<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Support\Str;
use DB;
use App\Models\QRCode as QRCodeModel;
use App\Models\Category;
use App\Models\Item;
use App\Exports\QrCodesExport;
use Maatwebsite\Excel\Facades\Excel;

class QrController
{
    public function index()
    {
        // $qr_codes = QRCodeModel::orderBy('id', 'desc')->with('categories')->paginate(10);
        $qr_codes = QRCodeModel::orderBy('id', 'desc')->with('categories')->get();
        // echo '<pre>';
        // print_r($qr_codes);
        // exit;
        return view('qr.index', compact('qr_codes'));
    }

    public function create()
    {
        $category = Category::get();
        return view(
            'qr.add',
            [
                'qr_code' => null,
                'categories' => $category
            ]
        );
    }

    public function generate(Request $request)
    {
        $request->validate([
            'category_id' => 'required|exists:categories,id',
            'total_count' => 'required|integer|min:1',
        ]);
        $category = Category::findOrFail($request->category_id);
        $folder = public_path('images/qr_code');
        if (!file_exists($folder)) {
            mkdir($folder, 0755, true);
        }
        $startNumber = QRCodeModel::where('category_id', $category->id)->count();
        for ($i = 1; $i <= $request->total_count; $i++) {
            $random = strtoupper(Str::random(6));
            $sequenceNumber = $startNumber + $i;
            $rockId = $sequenceNumber . '-' . Str::slug($category->name) . '-' . $random;
            $url    = url('/scan/' . $rockId);
            $qrImage = QrCode::format('svg')->size(300)->generate($url);
            $fileName = $rockId . '.svg';
            $filePath = $folder . '/' . $fileName;
            file_put_contents($filePath, $qrImage);
            $qr_code = new QRCodeModel();
            $qr_code->category_id   = $category->id;
            $qr_code->rock_id       = $rockId;
            $qr_code->qr_image      = 'images/qr_code/' . $fileName;
            $qr_code->is_registered = false;
            $qr_code->save();
        }
        return redirect()
            ->route('qr-code.index')
            ->with('success', $request->total_count . ' QR codes generated successfully!');
    }
    public function print(Request $request){
        $request->validate([
            'qr_ids' => 'required|array'
        ]);
        $qrCodes = QRCodeModel::with('categories')->orderBy('id','desc')->whereIn('id', $request->qr_ids)->get();
        return view('qr.print', compact('qrCodes'));
    }
    // public function edit(Request $request, $id)
    // {
    //     $qr_code = QRCodeModel::find($id);
    //     $category = Category::get();
    //     return view(
    //         'qr.add',
    //         [
    //             'qr_code' => $qr_code,
    //             'categories' => $category
    //         ]
    //     );
    // }
    // public function update(Request $request, $id)
    // {
    //     $random = strtoupper(Str::random(6));
    //     $qr_code = QRCodeModel::find($id);
    //     $qr_code->category_id  = $request->category_id;
    //     $qr_code->is_registered = false;
    //     $qr_code->save();
    //     $category = Category::find($request->category_id);
    //     $category_name = $category->name;
    //     $rockId = $qr_code->id . '-' . $category_name . '-' . $random;
    //     $url    = url('/scan/' . $rockId);
    //     $qrImage = QrCode::format('svg');
    //     $folder = public_path('images/qr_code');
    //     if (!file_exists($folder)) {
    //         mkdir($folder, 0755, true);
    //     }
    //     $fileName = $rockId . '.svg';
    //     $filePath = $folder . '/' . $fileName;
    //     file_put_contents($filePath, $qrImage);
    //     $qr_code->rock_id  = $rockId;
    //     $qr_code->qr_image = 'images/qr_code/' . $fileName;
    //     $qr_code->save();
    //     return redirect()->route('qr-code.index');
    // }
    public function export(Request $request)
    {
        if (!$request->qr_ids) {
            return back()->with('error', 'Please select at least one record');
        }

        return Excel::download(
            new QrCodesExport($request->qr_ids),
            'qr-codes.xlsx'
        );
    }
}

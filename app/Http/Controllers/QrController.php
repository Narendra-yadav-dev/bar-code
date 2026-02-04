<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Support\Str;
use DB;
use App\Models\QRCode as QRCodeModel;
use App\Models\Category;

class QrController extends Controller
{
    public function index()
    {
        $qr_codes = QRCodeModel::with('categories')->paginate(10);
        // echo '<pre>';
        // print_r($qr_codes);
        // exit;
        return view('qr.index',compact('qr_codes'));
    }

    public function create()
    {
        $category = Category::get();
        return view(
            'qr.add',
            [
                'qr_code' => null,
                'categories'=>$category
            ]
        );
    }

    public function generate(Request $request)
    {
        $random = strtoupper(Str::random(6));
        $qr_code = new QRCodeModel();
        $qr_code->category_id  = $request->category_id;
        $qr_code->is_registered = false;
        $qr_code->save();
        $category = Category::find($request->category_id);
        $category_name = $category->name;
        $rockId = $qr_code->id . '-' . $category_name . '-' . $random;
        $url    = url('/scan/' . $rockId);
        $qrImage = QrCode::format('svg');
        $folder = public_path('images/qr_code');
        if (!file_exists($folder)) {
            mkdir($folder, 0755, true);
        }
        $fileName = $rockId . '.svg';
        $filePath = $folder . '/' . $fileName;
        file_put_contents($filePath, $qrImage);
        $qr_code->rock_id  = $rockId;
        $qr_code->qr_image = 'images/qr_code/' . $fileName;
        $qr_code->save();
        return redirect()->route('qr-code.index');
    }
    public function edit(Request $request, $id){
        $qr_code = QRCodeModel::find($id);
        $category = Category::get();
        return view(
            'qr.add',
            [
                'qr_code' => $qr_code,
                'categories'=>$category
            ]
        );
    }
    public function update(Request $request, $id){
        $random = strtoupper(Str::random(6));
        $qr_code = QRCodeModel::find($id);
        $qr_code->category_id  = $request->category_id;
        $qr_code->is_registered = false;
        $qr_code->save();
        $category = Category::find($request->category_id);
        $category_name = $category->name;
        $rockId = $qr_code->id . '-' . $category_name . '-' . $random;
        $url    = url('/scan/' . $rockId);
        $qrImage = QrCode::format('svg');
        $folder = public_path('images/qr_code');
        if (!file_exists($folder)) {
            mkdir($folder, 0755, true);
        }
        $fileName = $rockId . '.svg';
        $filePath = $folder . '/' . $fileName;
        file_put_contents($filePath, $qrImage);
        $qr_code->rock_id  = $rockId;
        $qr_code->qr_image = 'images/qr_code/' . $fileName;
        $qr_code->save();
        return redirect()->route('qr-code.index');
    }
    public function reader(){
        return view('qr.generated');
    }
}

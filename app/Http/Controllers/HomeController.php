<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\QRCode as QRCodeModel;
use App\Models\Item;

class HomeController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function scan($rockId)
    {
        $qr = QRCodeModel::with('categories')->where('rock_id', $rockId)->first();
        if (!$qr) {
            return abort(404, 'Invalid QR Code');
        }
        if ($qr->is_registered == 1) {
            $item = Item::where('qr_code_id', $qr->id)->firstOrFail();
            return view('qr.show-details', compact('qr', 'item'));
        }
        return view('qr.register', compact('qr'));
    }
    public function store(Request $request, $rockId)
    {
        $qr = QRCodeModel::where('rock_id', $rockId)->firstOrFail();
        $item = new Item();
        $item->qr_code_id = $qr->id;
        $item->category_id = $qr->category_id;
        $item->name = $request->name;
        $item->owner_name = $request->owner_name;
        $item->phone = $request->phone;
        $extraData = [
            'alternate_phone' => $request->alternate_phone,
            'emergency_phone' => $request->emergency_phone,
        ];

        switch ($qr->categories->slug) {
            case 'car':
            case 'bike':
                $extraData['vehical_number'] = $request->vehical_number;
                $extraData['product_model'] = $request->product_model;
                $extraData['product_color'] = $request->product_color;
                break;

            case 'dogs':
                $extraData['breed']  = $request->breed;
                $extraData['color']  = $request->color;
                $extraData['gender'] = $request->gender;
                break;

            case 'luggage':
                $extraData['description'] = $request->description;
                $extraData['luggage_type'] = $request->luggage_type;
                break;
        }

        $item->extra_data = $extraData;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = uniqid() . '.' . $extension;
            $path = public_path('images/items/' . $filename);
            file_put_contents($path, file_get_contents($file));
            $item->image = 'items/' . $filename;
        }
        $item->save();
        $qr->update([
            'is_registered' => true,
        ]);
        return redirect()->back()->with('success', 'Item registered successfully!');
    }
    public function reader(){
        return view('reader');
    }
    public function about()
    {
        return view('about');
    }
}

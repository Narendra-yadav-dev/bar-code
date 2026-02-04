<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ScanController extends Controller
{
    public function scan($code)
    {
        $qr = \DB::table('qr_codes')->where('code', $code)->first();

        if (!$qr) {
            return view('scan.invalid');
        }

        if (!$qr->is_registered) {
            return view('scan.register', compact('code'));
        }

        $item = \DB::table('items')->where('qr_code_id', $qr->id)->first();
        return view('scan.show', compact('item'));
    }
    public function store(Request $request)
    {
        $qr = \DB::table('qr_codes')->where('code', $request->code)->first();

        \DB::table('items')->insert([
            'qr_code_id' => $qr->id,
            'category' => $request->category,
            'owner_name' => $request->owner_name,
            'phone' => $request->phone,
            'city' => $request->city,
            'created_at' => now()
        ]);

        \DB::table('qr_codes')->where('id', $qr->id)
            ->update(['is_registered' => true]);

        return redirect('/scan/' . $request->code);
    }
}

<?php

namespace App\Http\Controllers;

use App\User;
use App\QrScan;
use Illuminate\Http\Request;

class QrScanController extends Controller
{
    

    public function index(Request $request)
    {
        $qr = $request->qr;
        // dump($request->ip());
        // dd(\Location::get("172.23.0.1"));
        $user = User::where('secondary_id', $qr)->get();
        return view('qrscan', compact(['user', 'qr']) );
    }
    public function add(Request $request)
    {
        $qr_scan = QrScan::create($request->except('_token'));

        return $qr_scan;
    }


}

<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Kyc;
use Illuminate\Http\Request;

class KycController extends Controller
{
    public function index()
    {
        $status = request()->status ?? 'pending';
        $kycs = Kyc::where('status',$status)->get();
        return view('backend.kycs.index',compact('kycs'));
    }

    public function show(Kyc $kyc)
    {
        return view('backend.kycs.show',compact('kyc'));
    }
}

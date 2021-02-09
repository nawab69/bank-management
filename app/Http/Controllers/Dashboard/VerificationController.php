<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Kyc;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;

class VerificationController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        $pending = $user->kycs->where('status','pending')->count();
        $cancelled = $user->kycs->where('status','cancelled')->count();
        $completed = $user->kycs->where('status','completed')->count();
        $kycs = $user->kycs()->orderBy('id','DESC')->paginate(2);

        return view('dashboard.verification.index',compact('pending','cancelled','completed','kycs'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'nid_no' => 'required',
            'nid_1'  =>  'required|image',
            'nid_2'  =>  'required|image',
            'address' => 'required|image'
        ]);

        $nid1 = md5(microtime()).'.'.$request->nid_1->extension();
        $nid2 = md5(microtime()).'.'.$request->nid_2->extension();
        $address = md5(microtime()).'.'.$request->address->extension();

        $request->nid_1->storeAs('public/kyc',$nid1);
        $request->nid_2->storeAs('public/kyc',$nid2);
        $request->address->storeAs('public/kyc',$address);

        Kyc::create([
            'user_id' => auth()->user()->id,
            'nid_no'  => $request->nid_no,
            'nid_1'   => 'kyc/'.$nid1,
            'nid_2'   => 'kyc/'.$nid2,
            'address' =>  'kyc/'.$address,
            'status'  =>  'pending'
        ]);

        notify()->success('Document Has been Updated Successfully','Success!');

        return redirect()->route('home');



    }
}

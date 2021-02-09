<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\Settings\UpdateGeneralRequest;
use App\Http\Requests\Dashboard\Settings\UpdateInformationRequest;
use App\Http\Requests\Dashboard\Settings\UpdatePasswordRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SettingsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:web');
    }

    public function index()
    {
        $user = Auth::user();
        $profile = $user->profile;
        return view('dashboard.settings',compact('user','profile'));
    }

    public function general(UpdateGeneralRequest $request)
    {
        $user = Auth::user();
        $user->update([
            'first_name'    => $request->first_name,
            'last_name'     =>  $request->last_name,
            'phone'         => $request->phone,
            'username'      => $request->username,
        ]);
        // upload images
        if ($request->hasFile('avatar')) {
            $user->addMedia($request->avatar)->toMediaCollection('avatar');
        }
        notify()->success('User Successfully Updated.', 'Updated');
        return redirect()->back();
    }

    public function password(UpdatePasswordRequest $request)
    {
        $user = Auth::user();
        $hashedPassword = $user->password;
        if(Hash::check($request->old_password,$hashedPassword)){
            $user->update([
                'password' => Hash::make($request->password)
            ]);
            notify()->success('Password Successfully Updated.', 'Updated');
            return redirect()->back();
        }else{
            notify()->error('Invalid old Password', 'Error !');
            return redirect()->back();
        }
    }

    public function information(UpdateInformationRequest $request)
    {
        $user = Auth::user();
        $user->profile->update($request->except('_token'));
        notify()->success('Information Successfully Updated.', 'Updated');
        return redirect()->back();
    }
}

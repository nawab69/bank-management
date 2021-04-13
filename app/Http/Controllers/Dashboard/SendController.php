<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Account;
use Illuminate\Http\Request;

class SendController extends Controller
{


    /**
     * @TODO return 'send' view
     */
    public function index()
    {
        $accounts = auth()->user()->accounts;
        return view('dashboard.send.index',compact('accounts'));
    }

    /**
     * @TODO check and validate the request and return fee
     */
    public function checkSend(Request $request)
    {

        $user = auth()->user();

        // Validate Send Request

        $request->validate([
            'from' => 'required',
            'account_no' => 'required',
            'amount'     => 'required'
        ]);

        // Check if user has account and balance exists

        $fromAccount = $user->accounts()->where('account_type',$request->from)->first();

        if(!$fromAccount){
            notify()->error('We could not found Your account');
            return redirect()->back();
        }
        if($fromAccount->account_balance < $request->amount){
            notify()->error('Insufficient Balance');
            return redirect()->back();
        }

        // check if recipient exists

        $recipient = Account::where('account_no',$request->account_no )->first();
        if(!$recipient){
            notify()->error('Recepient account not found!');
            return redirect()->back();
        }


        // Calculate fee

        $fee = fee('send',$request->amount);
        $total = $request->amount + $fee;

        // save session and return Fee

        \Session::put('transaction_send',[
            'from' => $request->from,
            'from_account' => $fromAccount,
            'account_no' => $request->account_no,
            'amount' => $request->amount,
            'fee'  => $fee,
            'total' => $total,
        ]);

        return redirect()->back();
    }

    /**
     * @TODO confirm and execute transaction
     */

    public function confirmSend(Request $request)
    {
        // Get Session , if not exists return back with error

        // Check if user has account and balance exists

        // Calculate fee

        // Deduct from sender

        // Add to recipient account

        // Create a transaction

        // return redirect to homepage


    }



}

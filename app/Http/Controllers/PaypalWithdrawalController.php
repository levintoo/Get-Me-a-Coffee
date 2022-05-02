<?php

namespace App\Http\Controllers;

use App\Models\Accounts;
use App\Models\Transactions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class PaypalWithdrawalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'inputAmount' => ['required', 'numeric', 'min:1'],
            'inputEmail' => ['required', 'string', 'email', 'max:255'],
        ]);
        $user = Accounts::select('amount')->where('userid', Auth::user()->userid)->first();
        if($request->inputAmount>$user->amount)
        {
            session::flash('fail',"You do not have enough cash");
            return redirect()->back();
        }

        $transaction = new Transactions();
        $transaction->userid = Auth::user()->userid;
        $transaction->paidTo = $request->inputEmail;
        $transaction->amount = $request->inputAmount;
        $transaction->type = 'debit';
        $transaction->transaction_id = 'PPPPQDO8VU2WKS';
        $transaction->purpose = 'withdrawal';
        $transaction->paymentMethod = 'paypal';
        $transaction->status = '0';
        $transaction->save();
        $this->update($transaction);
        session::flash('success',"You have withdrawn $transaction->amount from paypal");
        return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($transaction)
    {
        $user = Accounts::select('amount')->where('userid', $transaction->userid)->first();
        $newamount = $user->amount - $transaction->amount;
        Accounts::where('userid',$transaction->userid)->update([
            'prev_amount' => $user->amount,
            'amount' => $newamount
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

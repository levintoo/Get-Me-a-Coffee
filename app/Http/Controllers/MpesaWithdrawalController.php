<?php

namespace App\Http\Controllers;

use App\Models\DonationTransactions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MpesaWithdrawalController extends Controller
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
            'inputAmount' => ['required', 'numeric'],
            'inputPhone' => ['required','regex:/^([0-9\s\-\+\(\)]*)$/','min:10', 'max:255'],
        ]);

        $transaction = new DonationTransactions();
        $transaction->userid = Auth::user()->userid;
        $transaction->donorid = $request->inputPhone;
        $transaction->amount = $request->inputAmount;
        $transaction->type = 'debit';
        $transaction->transaction_id = 'QDO8VU2WKS';
        $transaction->purpose = 'withdrawal';
        $transaction->paymentMethod = 'mpesa';
        $transaction->status = '0';
        $transaction->save();

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
    public function update(Request $request, $id)
    {
        //
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

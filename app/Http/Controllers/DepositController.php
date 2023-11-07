<?php

namespace App\Http\Controllers;

use App\Models\PaymentMethod;
use Illuminate\Http\Request;

class DepositController extends Controller
{
    public function deposit()
    {
        return view('dashboard.deposit.deposit');
    }

    public function cryptoDeposit()
    {
       $wallets = PaymentMethod::all();
       return view('dashboard.deposit.crypto', compact('wallets'));
    }

}

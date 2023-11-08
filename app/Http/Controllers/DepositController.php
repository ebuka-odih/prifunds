<?php

namespace App\Http\Controllers;

use App\Models\PaymentMethod;
use Illuminate\Http\Request;

class DepositController extends Controller
{
    public function deposit(Request $request)
    {
        return view('dashboard.deposit.deposit');
    }
    public function depositMethod(Request $request)
    {
        $amount = $request->amount;
        if ($request->deposit_method == 'crypto'){
            $wallets = PaymentMethod::all();
            return view('dashboard.deposit.crypto', compact('amount', 'wallets'));
        }elseif ($request->deposit_method == 'card'){
            return view('dashboard.deposit.card', compact('amount'));
        }
        return view('dashboard.deposit.deposit');
    }

    public function cryptoDeposit()
    {

       return view('dashboard.deposit.crypto', compact('wallets'));
    }

    public function cardDeposit()
    {
       $wallets = PaymentMethod::all();
       return view('dashboard.deposit.card-deposit', compact('wallets'));
    }

}

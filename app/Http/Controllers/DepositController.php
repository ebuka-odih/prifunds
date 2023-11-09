<?php

namespace App\Http\Controllers;

use App\Models\PaymentMethod;
use Illuminate\Http\Request;
use ProtoneMedia\Splade\Facades\Splade;

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

    public function fetchWalletAddress($paymentMethodId) {
        $paymentMethod = PaymentMethod::find($paymentMethodId);

        if ($paymentMethod) {
            return response()->json(['value' => $paymentMethod->value]);
        } else {
            return response()->json(['error' => 'Payment Method not found'], 404);
        }
    }

    public function cryptoDeposit()
    {

        view('news', [
            // This will only be evaluated when lazy loading...
            'wallets' => Splade::onLazy(fn () => PaymentMethod::all()),
        ]);
    }

    public function cardDeposit()
    {
       $wallets = PaymentMethod::all();
       return view('dashboard.deposit.card-deposit', compact('wallets'));
    }

}

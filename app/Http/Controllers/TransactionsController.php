<?php

namespace App\Http\Controllers;

use App\Models\Deposit;
use Illuminate\Http\Request;

class TransactionsController extends Controller
{
    public function depositHistory()
    {
        $deposits = Deposit::whereUserId(auth()->id())->get();
        return view('dashboard.transaction.deposit-history', compact('deposits'));
    }

}

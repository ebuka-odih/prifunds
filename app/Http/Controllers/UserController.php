<?php

namespace App\Http\Controllers;

use App\Models\Deposit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function dashboard()
    {
        $user = Auth::user();
        $deposit = Deposit::whereUserId(\auth()->id())->select('amount')->sum('amount');
        return view('dashboard.index', compact('user', 'deposit'));
    }
}

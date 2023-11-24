<?php

namespace App\Http\Controllers;

use App\Models\Package;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InvestPackageController extends Controller
{
    public function plans()
    {
        $plans = Package::all();
        $user = Auth::user();
        return view('dashboard.invest.plans', compact('plans', 'user'));
    }
}

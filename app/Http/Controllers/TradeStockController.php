<?php

namespace App\Http\Controllers;

use App\Models\Stock;
use Illuminate\Http\Request;

class TradeStockController extends Controller
{
    public function stock()
    {
        $stocks = Stock::all();
        return view('dashboard.stock.list', compact('stocks'));
    }
}

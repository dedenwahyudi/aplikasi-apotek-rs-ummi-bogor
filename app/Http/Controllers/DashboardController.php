<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Customer;
use App\Models\Product;
use App\Models\Transaction;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function index(): View
    {
        $totalCategory = Category::count();
        $totalProduct = Product::count();
        $totalCustomer = Customer::count();
        $totalTransaction = Transaction::count();

        $transactions = Transaction::select('product_id', DB::raw('sum(qty) as transactions_sum_qty'))->with('product:id,name,price,image')
            ->groupBy('product_id')
            ->orderBy('transactions_sum_qty', 'desc')
            ->take(5)
            ->get();

        return view('dashboard.index', compact('totalCategory', 'totalProduct', 'totalCustomer', 'totalTransaction', 'transactions'));
    }
}

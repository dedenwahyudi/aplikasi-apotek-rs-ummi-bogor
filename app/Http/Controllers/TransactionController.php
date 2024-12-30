<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Product;
use App\Models\Transaction;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class TransactionController extends Controller
{
    public function index(Request $request): View
    {
        $pagination = 10;
        $search = $request->search;

        if ($search) {
            $transactions = Transaction::select('id', 'date', 'customer_id', 'product_id', 'qty', 'total')->with('customer:id,name', 'product:id,name,price')
                ->whereAny(['date', 'qty', 'total'], 'LIKE', '%' . $search . '%')
                ->orWhereHas('customer', function ($query) use ($search) {
                    $query->where('name', 'LIKE', '%' . $search . '%');
                })
                ->orWhereHas('product', function ($query) use ($search) {
                    $query->where('name', 'LIKE', '%' . $search . '%');
                })
                ->paginate($pagination)
                ->withQueryString();
        } else {
            $transactions = Transaction::select('id', 'date', 'customer_id', 'product_id', 'qty', 'total')->with('customer:id,name', 'product:id,name,price')
                ->latest()
                ->paginate($pagination);
        }

        return view('transactions.index', compact('transactions'))->with('i', ($request->input('page', 1) - 1) * $pagination);
    }

    public function create(): View
    {
        $customers = Customer::get(['id', 'name']);
        $products = Product::get(['id', 'name', 'price']);

        return view('transactions.create', compact('customers', 'products'));
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'date'     => 'required',
            'customer' => 'required|exists:customers,id',
            'product'  => 'required|exists:products,id',
            'qty'      => 'required',
            'total'    => 'required'
        ]);

        Transaction::create([
            'date'        => $request->date,
            'customer_id' => $request->customer,
            'product_id'  => $request->product,
            'qty'         => $request->qty,
            'total'       => str_replace(',', '', $request->total)
        ]);

        return redirect()->route('transactions.index')->with(['success' => 'The new transaction has been saved.']);
    }

    public function edit(string $id): View
    {
        $transaction = Transaction::findOrFail($id);
        $customers = Customer::get(['id', 'name']);
        $products = Product::get(['id', 'name', 'price']);

        return view('transactions.edit', compact('transaction', 'customers', 'products'));
    }

    public function update(Request $request, $id): RedirectResponse
    {
        $request->validate([
            'date'     => 'required',
            'customer' => 'required|exists:customers,id',
            'product'  => 'required|exists:products,id',
            'qty'      => 'required',
            'total'    => 'required'
        ]);

        $transaction = Transaction::findOrFail($id);

        $transaction->update([
            'date'        => $request->date,
            'customer_id' => $request->customer,
            'product_id'  => $request->product,
            'qty'         => $request->qty,
            'total'       => str_replace('.', '', $request->total)
        ]);

        return redirect()->route('transactions.index')->with(['success' => 'The transaction has been updated.']);
    }


    public function destroy($id): RedirectResponse
    {
        $transaction = Transaction::findOrFail($id);

        $transaction->delete();

        return redirect()->route('transactions.index')->with(['success' => 'The transaction has been deleted!']);
    }
}

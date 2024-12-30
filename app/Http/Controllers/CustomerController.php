<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CustomerController extends Controller
{
    public function index(Request $request): View
    {
        $pagination = 10;

        if ($request->search) {
            $customers = Customer::select('id', 'name', 'address', 'phone')
                ->whereAny(['name', 'address', 'phone'], 'LIKE', '%' . $request->search . '%')
                ->paginate($pagination)
                ->withQueryString();
        } else {
            $customers = Customer::select('id', 'name', 'address', 'phone')
                ->latest()
                ->paginate($pagination);
        }

        return view('customers.index', compact('customers'))->with('i', ($request->input('page', 1) - 1) * $pagination);
    }

    public function create(): View
    {
        return view('customers.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name'    => 'required',
            'address' => 'required',
            'phone'   => 'required|max:13|unique:customers'
        ]);

        Customer::create([
            'name'    => $request->name,
            'address' => $request->address,
            'phone'   => $request->phone
        ]);

        return redirect()->route('customers.index')->with(['success' => 'The new customer has been saved.']);
    }

    public function edit(string $id): View
    {
        $customer = Customer::findOrFail($id);

        return view('customers.edit', compact('customer'));
    }

    public function update(Request $request, $id): RedirectResponse
    {
        $request->validate([
            'name'    => 'required',
            'address' => 'required',
            'phone'   => 'required|max:13|unique:customers,phone,' . $id
        ]);

        $customer = Customer::findOrFail($id);

        $customer->update([
            'name'    => $request->name,
            'address' => $request->address,
            'phone'   => $request->phone
        ]);

        return redirect()->route('customers.index')->with(['success' => 'The customer has been updated.']);
    }

    public function destroy($id): RedirectResponse
    {
        $customer = Customer::findOrFail($id);

        $customer->delete();

        return redirect()->route('customers.index')->with(['success' => 'The customer has been deleted!']);
    }
}

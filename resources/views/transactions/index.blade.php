<x-app-layout>
    <x-page-title>Transactions</x-page-title>

    <div class="bg-white rounded-2 shadow-sm p-4 mb-4">
        <div class="row">
            <div class="d-grid d-lg-block col-lg-5 col-xl-6 mb-4 mb-lg-0">
                <a href="{{ route('transactions.create') }}" class="btn btn-primary py-2 px-3">
                    <i class="ti ti-plus me-2"></i> Add Transaction
                </a>
            </div>
            <div class="col-lg-7 col-xl-6">
                <form action="{{ route('transactions.index') }}" method="GET">
                    <div class="input-group">
                        <input type="text" name="search" class="form-control form-search py-2" value="{{ request('search') }}" placeholder="Search transaction ..." autocomplete="off">
                        <button class="btn btn-primary py-2" type="submit">Search</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="bg-white rounded-2 shadow-sm pt-4 px-4 pb-3 mb-5">
        <div class="table-responsive mb-3">
            <table class="table table-bordered table-striped table-hover" style="width:100%">
                <thead>
                    <th class="text-center">No.</th>
                    <th class="text-center">Date</th>
                    <th class="text-center">Customer</th>
                    <th class="text-center">Product</th>
                    <th class="text-center">Price</th>
                    <th class="text-center">Qty</th>
                    <th class="text-center">Total</th>
                    <th class="text-center">Actions</th>
                </thead>
                <tbody>
                @forelse ($transactions as $transaction)
                    <tr>
                        <td width="30" class="text-center">{{ ++$i }}</td>
                        <td width="100">{{ date('F j, Y', strtotime($transaction->date)) }}</td>
                        <td width="130">{{ $transaction->customer->name }}</td>
                        <td width="170">{{ $transaction->product->name }}</td>
                        <td width="70" class="text-end">{{ 'Rp ' . number_format($transaction->product->price, 0, '', '.') }}</td>
                        <td width="50" class="text-center">{{ $transaction->qty }}</td>
                        <td width="80" class="text-end">{{ 'Rp ' . number_format($transaction->total, 0, '', '.') }}</td>
                        <td width="80" class="text-center">
                            <a href="{{ route('transactions.edit', $transaction->id) }}" class="btn btn-primary btn-sm m-1" data-bs-tooltip="tooltip" data-bs-title="Edit">
                                <i class="ti ti-edit"></i>
                            </a>
                            <button type="button" class="btn btn-danger btn-sm m-1" data-bs-toggle="modal" data-bs-target="#modalDelete{{ $transaction->id }}" data-bs-tooltip="tooltip" data-bs-title="Delete"> 
                                <i class="ti ti-trash"></i>
                            </button>
                        </td>
                    </tr>

                    <div class="modal fade" id="modalDelete{{ $transaction->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalDeleteLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">
                                        <i class="ti ti-trash me-2"></i> Delete Transaction
                                    </h1>
                                </div>
                                <div class="modal-body">
                                    <p class="mb-2">
                                        Are you sure to delete this transaction?
                                    </p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary py-2 px-3" data-bs-dismiss="modal">Cancel</button>
                                    <form action="{{ route('transactions.destroy', $transaction->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger py-2 px-3"> Yes, delete it! </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <tr>
                        <td colspan="8">
                            <div class="d-flex justify-content-center align-items-center">
                                <i class="ti ti-info-circle fs-5 me-2"></i>
                                <div>No data available.</div>
                            </div>
                        </td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>
        <div class="pagination-links">{{ $transactions->links() }}</div>
    </div>
</x-app-layout>
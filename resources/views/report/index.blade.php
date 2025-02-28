<x-app-layout>
    <x-page-title>Transaction Report</x-page-title>

    <div class="bg-white rounded-2 shadow-sm p-4 mb-4">
        <div class="alert alert-primary mb-5" role="alert">
            <i class="ti ti-calendar-search fs-5 me-2"></i> Filter by transaction date.
        </div>
        <form action="{{ route('report.filter') }}" method="GET" class="needs-validation" novalidate>
            <div class="row">
                <div class="col-lg-4 col-xl-3 mb-4 mb-lg-0">
                    <label class="form-label">Start Date <span class="text-danger">*</span></label>
                    <input type="text" name="start_date" class="form-control datepicker @error('start_date') is-invalid @enderror" value="{{ old('start_date', request('start_date')) }}" autocomplete="off">
                        
                    @error('start_date')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col-lg-4 col-xl-3">
                    <label class="form-label">End Date <span class="text-danger">*</span></label>
                    <input type="text" name="end_date" class="form-control datepicker @error('end_date') is-invalid @enderror" value="{{ old('end_date', request('end_date')) }}" autocomplete="off">
                        
                    @error('end_date')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
    
            <div class="pt-4 pb-2 mt-5 border-top">
                <div class="d-grid gap-3 d-sm-flex justify-content-md-start pt-1">
                    <button type="submit" class="btn btn-primary py-2 px-4">
                        Show <i class="ti ti-chevron-right align-middle ms-2"></i>
                    </button>
                </div>
            </div>
        </form>
    </div>

    @if (request(['start_date', 'end_date']))
        <div class="bg-white rounded-2 shadow-sm p-4 mb-5">
            <div class="d-flex flex-column flex-lg-row mb-4">
                <div class="flex-grow-1 d-flex align-items-center">
                    <h6 class="mb-0">
                        <i class="ti ti-file-text fs-5 align-text-top me-1"></i> 
                        Transactions' data report on {{ date('F j, Y', strtotime(request('start_date'))) }} - {{ date('F j, Y', strtotime(request('end_date'))) }}.
                    </h6>
                </div>
                <div class="d-grid gap-3 d-sm-flex mt-3 mt-lg-0">
                    <a href="{{ route('report.print', [request('start_date'), request('end_date')]) }}" target="_blank" class="btn btn-warning py-2 px-3">
                        <i class="ti ti-printer me-2"></i> Print
                    </a>
                </div>
            </div>

            <hr class="mb-4">

            <div class="table-responsive">
                <table class="table table-bordered table-striped table-hover" style="width:100%">
                    <thead>
                        <th class="text-center">No.</th>
                        <th class="text-center">Date</th>
                        <th class="text-center">Customer</th>
                        <th class="text-center">Product</th>
                        <th class="text-center">Price</th>
                        <th class="text-center">Qty</th>
                        <th class="text-center">Total</th>
                    </thead>
                    <tbody>
                    @php
                        $no = 1;
                    @endphp
                    @forelse ($transactions as $transaction)
                        <tr>
                            <td width="30" class="text-center">{{ $no++ }}</td>
                            <td width="100">{{ date('F j, Y', strtotime($transaction->date)) }}</td>
                            <td width="130">{{ $transaction->customer->name }}</td>
                            <td width="170">{{ $transaction->product->name }}</td>
                            <td width="70" class="text-end">{{ 'Rp ' . number_format($transaction->product->price, 0, '', '.') }}</td>
                            <td width="50" class="text-center">{{ $transaction->qty }}</td>
                            <td width="80" class="text-end">{{ 'Rp ' . number_format($transaction->total, 0, '', '.') }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7">
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
        </div>
    @endif
</x-app-layout>
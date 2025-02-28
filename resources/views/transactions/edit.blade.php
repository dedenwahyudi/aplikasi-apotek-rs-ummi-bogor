<x-app-layout>
    <x-page-title>Edit Transaction</x-page-title>

    <div class="bg-white rounded-2 shadow-sm p-4 mb-5">
        <form action="{{ route('transactions.update', $transaction->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-lg-6">
                    <div class="mb-3">
                        <label class="form-label">Date <span class="text-danger">*</span></label>
                        <input type="text" name="date" class="form-control datepicker @error('date') is-invalid @enderror" value="{{ old('date', $transaction->date) }}" autocomplete="off">
                        
                        @error('date')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <hr class="mt-4">

                    <div class="mb-3">
                        <label class="form-label">Customer <span class="text-danger">*</span></label>
                        <select name="customer" class="form-select select2-single @error('customer') is-invalid @enderror" autocomplete="off">
                            <option disabled value="">- Select customer -</option>
                            @foreach ($customers as $customer)
                                <option {{ old('customer', $transaction->customer_id) == $customer->id ? 'selected' : '' }} value="{{ $customer->id }}">{{ $customer->name }}</option>
                            @endforeach
                        </select>

                        @error('customer')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Product <span class="text-danger">*</span></label>
                        <select id="product" name="product" class="form-select select2-single @error('product') is-invalid @enderror" autocomplete="off">
                            <option disabled value="">- Select product -</option>
                            @foreach ($products as $product)
                                <option {{ old('product', $transaction->product_id) == $product->id ? 'selected' : '' }} value="{{ $product->id }}" data-price="{{ number_format($product->price, 0, '', '.') }}">{{ $product->name }}</option>
                            @endforeach
                        </select>

                        @error('product')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Price <span class="text-danger">*</span></label>
                        <div class="input-group">
                            <span class="input-group-text">Rp</span>
                            <input type="text" id="price" name="price" class="form-control mask-number @error('price') is-invalid @enderror" value="{{ old('price', number_format($transaction->product->price, 0, '', '.')) }}" readonly>
                        </div>
                        
                        @error('price')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <hr class="mt-4">

                    <div class="mb-3">
                        <label class="form-label">Qty <span class="text-danger">*</span></label>
                        <input type="number" id="qty" name="qty" class="form-control @error('qty') is-invalid @enderror" value="{{ old('qty', $transaction->qty) }}" autocomplete="off">
                        
                        @error('qty')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Total <span class="text-danger">*</span></label>
                        <div class="input-group">
                            <span class="input-group-text">Rp</span>
                            <input type="text" id="total" name="total" class="form-control mask-number @error('total') is-invalid @enderror" value="{{ old('total', number_format($transaction->total, 0, '', '.')) }}" readonly>
                        </div>
                        
                        @error('total')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>
    
            <div class="pt-4 pb-2 mt-5 border-top">
                <div class="d-grid gap-3 d-sm-flex justify-content-md-start pt-1">
                    <button type="submit" class="btn btn-primary py-2 px-3">Update</button>
                    <a href="{{ route('transactions.index') }}" class="btn btn-secondary py-2 px-3">Cancel</a>
                </div>
            </div>
        </form>
    </div>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#product').change(function() {
                var price = $(this).children('option:selected').data('price');
                $('#price').val(price);
                $('#qty').val('');
                $('#total').val(0);
            });

            $('#qty').keyup(function() {
                var price = $('#price').val().replace('.', '');
                var qty = $('#qty').val();

                if (price == "") {
                    $.notify({
                        title: '<h6 class="fw-bold mb-1"><i class="ti ti-circle-x-filled fs-5 align-text-top me-2"></i>Error!</h6>',
                        message: 'The Price field is required.',
                    }, {
                        type: 'danger',
                        delay: 500,
                    });
                    $('#qty').val('');
                    var total = "";
                }
                else if (qty == "") {
                    var total = "";
                }
                else if (qty <= 0) {
                    $.notify({
                        title: '<h6 class="fw-bold mb-1"><i class="ti ti-circle-x-filled fs-5 align-text-top me-2"></i>Error!</h6>',
                        message: 'The Qty field must be filled with positive integers.'
                    }, {
                        type: 'danger',
                        delay: 500
                    });
                    $('#qty').val('');
                    var total = "";
                }
                else {
                    var total = eval(price) * eval(qty);
                }

                var result = new Intl.NumberFormat().format(total);
                $('#total').val(result);
            });
        });
    </script>
</x-app-layout>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Transactions' Data Report on {{ date('F j, Y', strtotime(request('start_date'))) }} - {{ date('F j, Y', strtotime(request('end_date'))) }}</title>
    
    <style type="text/css">
        table, th, td {
            border: 1px solid #dee2e6;
            border-collapse: collapse;
        }

        th, td {
            padding: 10px 5px;
        }

        hr {
            color: #dee2e6;
        }
    </style>
</head>

<body>
    <div style="text-align: center">
        <h3>Transactions' Data Report on {{ date('F j, Y', strtotime(request('start_date'))) }} - {{ date('F j, Y', strtotime(request('end_date'))) }}.</h3>
    </div>

    <hr style="margin-bottom:20px">

    <table style="width:100%">
        <thead style="background-color: #6861ce; color: #ffffff">
            <th>No.</th>
            <th>Date</th>
            <th>Customer</th>
            <th>Product</th>
            <th>Price</th>
            <th>Qty</th>
            <th>Total</th>
        </thead>
        <tbody>
        @php
            $no = 1;
        @endphp
        @forelse ($transactions as $transaction)
            <tr>
                <td width="30" align="center">{{ $no++ }}</td>
                <td width="100">{{ date('F j, Y', strtotime($transaction->date)) }}</td>
                <td width="130">{{ $transaction->customer->name }}</td>
                <td width="200">{{ $transaction->product->name }}</td>
                <td width="70" align="right">{{ 'Rp ' . number_format($transaction->product->price, 0, '', '.') }}</td>
                <td width="50" align="center">{{ $transaction->qty }}</td>
                <td width="80" align="right">{{ 'Rp ' . number_format($transaction->total, 0, '', '.') }}</td>
            </tr>
        @empty
            <tr>
                <td align="center" colspan="7">No data available.</td>
            </tr>
        @endforelse
        </tbody>
    </table>

    <div style="margin-top: 25px; text-align: right">Bogor, {{ date('F j, Y') }}</div>
</body>

</html>

<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ReportController extends Controller
{
    public function index()
    {
        return view('report.index');
    }

    public function filter(Request $request): View
    {
        $request->validate([
            'start_date' => 'required',
            'end_date'   => 'required|date|after_or_equal:start_date'
        ]);

        $startDate = $request->start_date;
        $endDate   = $request->end_date;

        $transactions = Transaction::with('customer:id,name', 'product:id,name,price')
            ->whereBetween('date', [$startDate, $endDate])
            ->oldest()
            ->get();

        return view('report.index', compact('transactions'));
    }

    public function print($startDate, $endDate)
    {
        $transactions = Transaction::with('customer:id,name', 'product:id,name,price')
            ->whereBetween('date', [$startDate, $endDate])
            ->oldest()
            ->get();

        $pdf = Pdf::loadview('report.print', compact('transactions'))->setPaper('a4', 'landscape');
        return $pdf->stream('Transactions.pdf');
    }
}

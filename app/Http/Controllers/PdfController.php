<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class PdfController extends Controller {
    public function index() {
        return view('pdf.index');
    }

    public function downloadTempahanPdf(Request $request) {
        $pdf = PDF::loadView(
            'pdf.tempahan-template',
            [
                'letterSeriesNo' => 'UITM-0404 (M)',
                'letterDate' => '4 Februari 2022',
                'buyerIc' => '950811026191',
                'buyerName' => 'MUHAMMAD NADZMI BIN MOHAMED IDZHAM',
                'seriesNo' => 28,
                'price' => 'RM 10,000.00',
                'expiryDate' => '30 November 2022',
            ]
        );

        return $pdf->download('tempahan.pdf');
    }

    public function downloadKeputusanPdf(Request $request) {
        $pdf = PDF::loadView(
            'pdf.keputusan-template',
            [
                'letterSeriesNo' => 'UITM-0404 (M)',
                'letterDate' => '4 Februari 2022',
                'buyerName' => 'MUHAMMAD NADZMI BIN MOHAMED IDZHAM',
                'buyerAddress' => 'some address',
                'plate' => [
                    [
                        'plateNo' => 'UITM 92',
                        'price' => 'RM 10,000.00',
                    ],
                ],
                'totalPrice' => 'RM 10,000.00',
            ]
        );

        return $pdf->download('keputusan.pdf');
    }
}

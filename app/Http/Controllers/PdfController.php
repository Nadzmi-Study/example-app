<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class PdfController extends Controller {
    public function index() {
        return view('pdf.index');
    }

    public function downloadPdf(Request $request) {
        $pdf = PDF::loadView(
            'pdf.template',
            [
                'letterSeriesNo' => 'UITM-0404 (M)',
                'letterDate' => '4 Februari 2022',
                'seriesNo' => 28,
                'buyerIc' => '950811026191',
                'buyerName' => 'MUHAMMAD NADZMI BIN MOHAMED IDZHAM',
                'price' => '10,000.00',
                'expiryDate' => '30 November 2022',
            ]
        );

        return $pdf->download('sample.pdf');
    }
}

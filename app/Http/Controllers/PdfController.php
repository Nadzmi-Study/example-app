<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class PdfController extends Controller {
    public function index() {
        return view('pdf.index');
    }

    public function reservationLetter() {
        return view('pdf.reservation');
    }

    public function approvalLetter() {
        return view('pdf.approval');
    }

    public function downloadReservationLetter(Request $request) {
        // dd([
        //     'seriesNo' => $request['seriesNo'],
        //     'letterSeriesNo' => $request['letterSeriesNo'],
        //     'letterDate' => $request['letterDate'],
        //     'buyerIc' => $request['buyerIc'],
        //     'buyerName' => $request['buyerName'],
        //     'price' => number_format($request['price'], 2),
        //     'expiryDate' => $request['expiryDate'],
        // ]);

        $pdf = PDF::loadView(
            'pdf.reservation-template',
            [
                'seriesNo' => $request['seriesNo'],
                'letterSeriesNo' => $request['letterSeriesNo'],
                'letterDate' => $request['letterDate'], // TODO: date format must follow template
                'buyerIc' => $request['buyerIc'],
                'buyerName' => $request['buyerName'],
                'price' => number_format($request['price'], 2),
                'expiryDate' => $request['expiryDate'], // TODO: date format must follow template
            ],
        );

        return $pdf->download('reservation.pdf');
    }

    public function downloadApprovalLetter(Request $request) {
        // dd([
        //     'letterSeriesNo' => $request['letterSeriesNo'],
        //     'letterDate' => $request['letterDate'],
        //     'buyerName' => $request['buyerName'],
        //     'buyerAddressLine1' => $request['buyerAddressLine1'],
        //     'buyerAddressLine2' => $request['buyerAddressLine2'],
        //     'buyerAddressPostcode' => $request['buyerAddressPostcode'],
        //     'buyerAddressArea' => $request['buyerAddressArea'],
        //     'plateNo' => $request['plateNo'],
        //     'price' => number_format($request['price'], 2),
        //     'totalPrice' => number_format($request['price'], 2),
        // ]);

        $pdf = PDF::loadView(
            'pdf.approval-template',
            [
                'letterSeriesNo' => $request['letterSeriesNo'],
                'letterDate' => $request['letterDate'], // TODO: date format must follow template
                'buyerName' => $request['buyerName'],
                'buyerAddressLine1' => $request['buyerAddressLine1'],
                'buyerAddressLine2' => $request['buyerAddressLine2'],
                'buyerAddressPostcode' => $request['buyerAddressPostcode'],
                'buyerAddressArea' => $request['buyerAddressArea'],
                'plateNo' => $request['plateNo'],
                'price' => number_format($request['price'], 2),
                'totalPrice' => number_format($request['price'], 2),
            ],
        );

        return $pdf->download('approval.pdf');
    }
}

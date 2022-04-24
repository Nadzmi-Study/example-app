<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class LetterController extends Controller {
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
        return PDF::loadView(
            'pdf.reservation-template',
            [
                'seriesNo' => $request['seriesNo'],
                'letterSeriesNo' => $request['letterSeriesNo'],
                'letterDate' => $this->generateDate($request['letterDate']),
                'buyerIc' => $request['buyerIc'],
                'buyerName' => $request['buyerName'],
                'price' => number_format($request['price'], 2),
                'expiryDate' => $this->generateDate($request['expiryDate']),
            ],
        )->download('reservation.pdf');
    }

    public function downloadApprovalLetter(Request $request) {
        return PDF::loadView(
            'pdf.approval-template',
            [
                'letterSeriesNo' => $request['letterSeriesNo'],
                'letterDate' => $this->generateDate($request['letterDate']),
                'buyerName' => $request['buyerName'],
                'buyerAddressLine1' => $request['buyerAddressLine1'],
                'buyerAddressLine2' => $request['buyerAddressLine2'],
                'buyerAddressPostcode' => $request['buyerAddressPostcode'],
                'buyerAddressArea' => $request['buyerAddressArea'],
                'plateNo' => $request['plateNo'],
                'price' => number_format($request['price'], 2),
                'totalPrice' => number_format($request['price'], 2),
            ],
        )->download('approval.pdf');
    }

    private function generateDate(string $date) {
        $datetime = strtotime($date);

        $day = date('d', $datetime);
        $year = date('Y', $datetime);
        switch (date('m', $datetime)) {
            case '01':
                $month = 'Januari';
                break;
            case '02':
                $month = 'Februari';
                break;
            case '03':
                $month = 'Mac';
                break;
            case '04':
                $month = 'April';
                break;
            case '05':
                $month = 'Mei';
                break;
            case '06':
                $month = 'Jun';
                break;
            case '07':
                $month = 'Julai';
                break;
            case '08':
                $month = 'Ogos';
                break;
            case '09':
                $month = 'September';
                break;
            case '10':
                $month = 'Oktober';
                break;
            case '11':
                $month = 'November';
                break;
            case '12':
                $month = 'Disember';
                break;
        }

        return "{$day} {$month} {$year}";
    }
}

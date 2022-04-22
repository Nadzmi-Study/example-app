@extends('layouts.app')

@section('title', 'PDF')

@section('content')
    <!-- TODO: make a form to generate dynamic PDF letter -->
    {{-- <form method="POST" action="{{ url('/download-pdf') }}">
        <input name="seriesNo" placeholder="No. Siri" type="text" />
        <input name="date" placeholder="Tarikh" type="text" />
        <input name="icNo" placeholder="No K/P" type="text" />
        <input name="name" placeholder="Nama" type="text" />
        <input name="price" placeholder="Harga" type="text" />
        <input name="expiryDate" placeholder="Tarikh Luput" type="text" />

        <button type="submit">Download PDF</button>
    </form> --}}

    <a href="{{ url('/download-tempahan-pdf') }}">Download Tempahan PDF</a>
    <a href="{{ url('/download-keputusan-pdf') }}">Download Keputusan PDF</a>
@endsection

@extends('layouts.app')

@section('title', 'Reservation Letter')

@section('content')
    <form method="POST" action="{{ url('/pdf/reservation/download') }}">
        @csrf

        <div class="row">
            <div class="col">
                <input id="seriesNo" class="form-control" name="seriesNo" placeholder="No. Siri Tempahan" type="number" />
            </div>
            <div class="col">
                <input id="letterSeriesNo" class="form-control" name="letterSeriesNo" placeholder="No. Siri Surat" type="text" />
            </div>
            <div class="col">
                <input id="letterDate" class="form-control" name="letterDate" placeholder="Tarikh Surat" type="date" />
            </div>
        </div>

        <div class="form-group">
            <label for="buyerIc">No. K/P</label>
            <input id="buyerIc" class="form-control" name="buyerIc" placeholder="No. K/P" type="text" />
        </div>
        <div class="form-group">
            <label for="buyerName">Nama</label>
            <input id="buyerName" class="form-control" name="buyerName" placeholder="Nama" type="text" />
        </div>
        <div class="form-group">
            <label for="price">Harga (RM)</label>
            <input id="price" class="form-control" name="price" placeholder="Harga (RM)" type="number" />
        </div>
        <div class="form-group">
            <label for="expiryDate">Tarikh Luput</label>
            <input id="expiryDate" class="form-control" name="expiryDate" placeholder="Tarikh Luput" type="date" />
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection

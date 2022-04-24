@extends('layouts.app')

@section('title', 'Approval Letter')

@section('content')
    <form method="POST" action="{{ url('/pdf/approval/download') }}">
        @csrf

        <div class="row">
            <div class="col">
                <input id="letterSeriesNo" class="form-control" name="letterSeriesNo" placeholder="Surat Kami" type="text" />
            </div>
            <div class="col">
                <input id="letterDate" class="form-control" name="letterDate" placeholder="Tarikh Surat" type="date" />
            </div>
        </div>

        <div class="form-group">
            <label for="buyerName">Nama</label>
            <input id="buyerName" class="form-control" name="buyerName" placeholder="Nama" type="text" />
        </div>
        <div class="form-group">
            <label for="buyerAddressLine1">Alamat 1</label>
            <input id="buyerAddressLine1" class="form-control" name="buyerAddressLine1" placeholder="Alamat 1" type="text" />
        </div>
        <div class="form-group">
            <label for="buyerAddressLine2">Alamat 2</label>
            <input id="buyerAddressLine2" class="form-control" name="buyerAddressLine2" placeholder="Alamat 2" type="text" />
        </div>
        <div class="form-group">
            <label for="buyerAddressPostcode">Poskod</label>
            <input id="buyerAddressPostcode" class="form-control" name="buyerAddressPostcode" placeholder="Poskod" type="text" />
        </div>
        <div class="form-group">
            <label for="buyerAddressArea">Kawasan</label>
            <input id="buyerAddressArea" class="form-control" name="buyerAddressArea" placeholder="Kawasan" type="text" />
        </div>
        <div class="form-group">
            <label for="plateNo">No. Plat</label>
            <input id="plateNo" class="form-control" name="plateNo" placeholder="No. Plat" type="text" />
        </div>
        <div class="form-group">
            <label for="price">Harga (RM)</label>
            <input id="price" class="form-control" name="price" placeholder="Harga (RM)" type="number" />
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection

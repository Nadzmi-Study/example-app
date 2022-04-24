@extends('layouts.app')

@section('title', 'Approval Letter')

@section('content')
    <a href="{{ url('/pdf/reservation') }}">Generate Reservation Letter</a><br />
    <a href="{{ url('/pdf/approval') }}">Generate Approval Letter</a>
@endsection

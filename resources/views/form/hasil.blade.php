@extends('layouts.master')

@section('content')
    <div class="container">
        <p>Panjang : {{ $panjang }}</p>
        <p>Lebar : {{ $lebar }}</p>
        <p>Luas : {{ $luas }}</p>
    </div>
@endsection
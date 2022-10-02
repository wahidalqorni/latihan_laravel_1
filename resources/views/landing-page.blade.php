@extends('layouts.master')

@section('content')
<div class="container">
    <h1>Landing Page</h1>
    {{-- mengambil gambar dari folder public --}}
    <img src="{{ asset('images/appstore.png') }}" alt="" width="300" height="300">

    <p class="paragraf">ini paragraf</p>
</div>
@endsection


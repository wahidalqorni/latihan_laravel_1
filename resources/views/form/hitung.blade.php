@extends('layouts.master')

@section('content')
    <div class="container">
        <form method="POST" action="{{ url('luas-persegi-panjang') }}" >
            @csrf
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Panjang</label>
              <input type="number" name="panjang" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Lebar</label>
              <input type="number" name="lebar" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3 form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>   
    </div>
@endsection
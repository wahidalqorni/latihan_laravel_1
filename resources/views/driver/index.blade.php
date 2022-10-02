{{-- mengambul file master digabungkan ke sini --}}
@extends('layouts.master')

{{-- memberikan identitas pada content web --}}
@section('content')
    <div class="container">
        <a href="{{ url('add-driver') }}" class="btn btn-primary">Add</a>
        <br>
        <table class="table table-bordered mt-4">

            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Kota</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>1</td>
                    <td>Driver</td>
                    <td>Palembang</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Driver</td>
                    <td>Palembang</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Driver</td>
                    <td>Palembang</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Driver</td>
                    <td>Palembang</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Driver</td>
                    <td>Palembang</td>
                </tr>
            </tbody>

        </table>
    </div>
@endsection

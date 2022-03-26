@extends('layout.eApp')
@section('content')
<h1 class="text-center">Vouchar List</h1>
<table class="table table-info table-striped">
        <thead>
            <tr>
                <th scope="col">Voucher Id</th>
                <th scope="col">Code</th>
                <th scope="col">Price($)</th>
                <th class="col col-lg-1" scope="col">Operations</th>
            </tr>
        </thead>
            @foreach($vouchers as $voucher)
        <tbody>
            <tr>
                <th scope="row">{{$voucher->VOUID}}</th>
                <td>{{$voucher->VOUCODE}}</td>
                <td>{{$voucher->VOUPRICE}}</td>
                <td><a href='' class="btn btn-success">Edit</a></td>
                <td><a href='' class="btn btn-danger">Delete</a></td>
            </tr>
        </tbody>
            @endforeach
    </table>

@endsection
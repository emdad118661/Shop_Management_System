@extends('layout.eApp')
@section('content')
<h1 class="text-center">Customers</h1>
<table class="table table-info table-striped">
        <thead>
            <tr>
                <th scope="col">Customer Id</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Address</th>
                <th scope="col">Phone</th>
                <th scope="col">Picture</th>
            </tr>
        </thead>
            @foreach($customers as $customer)
        <tbody>
            <tr>
                <th scope="row">{{$customer->id}}</th>
                <td><a class="text-decoration-none" href="{{route('customer.details',['id'=>encrypt($customer->id)])}}">{{$customer->CNAME}}</a></td>
                <td>{{$customer->CEMAIL}}</td>
                <td>{{$customer->CADDRESS}}</td>
                <td>{{$customer->CPHONE}}</td>
                <td>{{$customer->CPICTURE}}</td>
            </tr>
        </tbody>
            @endforeach
    </table>
@endsection
@extends('layout.eApp')
@section('content')
<h1 class="text-center">Customers</h1>
<form class="mb-2" action="{{url('/search-record')}}" method="post">
    {{csrf_field()}}
<input type="text" placeholder="Search by Name" name="CNAME">
<input class="btn btn-info"type="submit" value="Search">
</form>
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
                <td><img src="{{asset('uploads/assets'.$customer->CPICTURE)}}" width="70px" alt="image"></td>
            </tr>
        </tbody>
            @endforeach
    </table>
@endsection
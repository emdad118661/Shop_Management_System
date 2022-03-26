@extends('layout.eApp')
@section('content')

<div>
    <h2 class="label label-info">{{$customer->CNAME}}</h2>
</div>
@if(count($customer->orders)>0)
<h1 class="text-center my-4">Order List</h1>
<table class="table table-info table-striped">
        <thead>
            <tr>
                <th scope="col">Order no</th>
                <th scope="col">Customer Id</th>
                <th scope="col">Order Status</th>
                <th scope="col">Date</th>
                <th scope="col">Cost</th>
                <th scope="col">Payment Method</th>
            </tr>
        </thead>
            @foreach($customer->orders as $order)
        <tbody>
            <tr>
                <th scope="row">{{$order->OID}}</th>
                <td>{{$order->CID}}</td>
                <td>{{$order->OSTATUS}}</td>
                <td>{{$order->ODATE}}</td>
                <td>{{$order->OTOTALCOST}}</td>
                <td>{{$order->OPAYMETHOD}}</td>
                <!-- <td><a href="/orderDetails" class="btn btn-success" role="button">Order Details</a></td>
                <td><a href="/employeeCustomerDetails" class="btn btn-secondary" role="button">Customer Details</a></td> -->
            </tr>
        </tbody>
            @endforeach
    </table>
    @else
    <div class="alert alert-danger text-center m-5" role="alert">
            Sorry, No Orders Found!
    </div>
@endif
@endsection
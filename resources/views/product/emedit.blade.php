@extends('layout.eApp')
@section('content')
<h1>This is edit Product Details!</h1>
    @if($errors->any())
    @foreach($errors->all() as $e)
        <span>{{$e}}</span>
    @endforeach
    @endif
    <form class="m-5 text-primary" action="{{route('edit.submit')}}", method="post">
            {{@csrf_field()}}
            <input type="hidden" name="PID" value="{{encrypt($product->PID)}}">
            Price:
            <input type="text" placeholder="Price" name="PBPRICE" value="{{$product->PBPRICE}}" id="">
            @error('PNAME')
            <span>{{$message}}</span>
            @enderror
            <br>
            Stock:
            <input type="text" placeholder="Stock" name="PSTOCK" value="{{$product->PSTOCK}}" id="">
            @error('PSTOCK')
            <span>{{$message}}</span>
            @enderror
            <br>
            Discount:
            <input type="text" placeholder="Discount" name="PDISCOUNT" value="{{$product->PDISCOUNT}}" id="">
            @error('PDISCOUNT')
            <span>{{$message}}</span>
            @enderror
            <br>
            Description:
            <input type="text" placeholder="Description" name="PDESCRIPTION" value="{{$product->PDESCRIPTION}}" id="">
            @error('PDESCRIPTION')
            <span>{{$message}}</span>
            @enderror
            <br>
            Sold Quantity:
            <input type="text" placeholder="Sold" name="PSOLDQUANTITY" value="{{$product->PSOLDQUANTITY}}" id="">
            @error('PSOLDQUANTITY')
            <span>{{$message}}</span>
            @enderror
            <br>
            <input class="btn btn-info" type="submit" value="UPDATE">
        </form>
@endsection
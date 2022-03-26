@extends('layout.eApp')
@section('content')
<h1>Edit Voucher Details!</h1>
    @if($errors->any())
    @foreach($errors->all() as $e)
        <span>{{$e}}</span>
    @endforeach
    @endif
    <form class="m-5 text-primary" action="{{route('vouedit.submit')}}", method="post">
            {{@csrf_field()}}
            <input type="hidden" name="VOUID" value="{{encrypt($voucher->VOUID)}}">
            Voucher Code:
            <input type="text" placeholder="Voucher Code" name="VOUCODE" value="{{$voucher->VOUCODE}}" id="">
            @error('VOUCODE')
            <span>{{$message}}</span>
            @enderror
            <br>
            Price:
            <input type="text" placeholder="Price" name="VOUPRICE" value="{{$voucher->VOUPRICE}}" id="">
            @error('VOUPRICE')
            <span>{{$message}}</span>
            @enderror
            <br>
            <br>
            <input class="btn btn-info" type="submit" value="UPDATE">
        </form>
@endsection
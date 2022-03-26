@extends('layout.eApp')
@section('content')
<form class="m-5 text-primary" action="{{route('voucreate.submit')}}", method="post">
            {{@csrf_field()}}
            Vouchar Id:
            <input type="text" placeholder="Voucher Id" name="VOUID" value="">
            @error('VOUID')
            <span>{{$message}}</span>
            @enderror
            <br>
            Voucher Code:
            <input type="text" placeholder="Voucher Code" name="VOUCODE" value="" id="">
            @error('VOUCODE')
            <span>{{$message}}</span>
            @enderror
            <br>
            Price:
            <input type="text" placeholder="Price" name="VOUPRICE" value="" id="">
            @error('VOUPRICE')
            <span>{{$message}}</span>
            @enderror
            <br>
            <br>
            <input class="btn btn-info" type="submit" value="Create">
        </form>
@endsection
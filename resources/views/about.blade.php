@extends('layout')

@section('container')
<h1>About Murid</h1>

@foreach($datas as $dataid)
<h1>{{ $dataid["nama"] }}</h1>
<h3>{{ $dataid["gender"] }}</h3>
<h3>{{ $dataid["email"] }}</h3>


@switch($dataid["gender"])
            @case("ayam")
                <img src="image/1.jpg" alt="">
                @break
            @case("pria")
                <img src="image/2.jpg" alt="">
                @break
            @case("wanita")
                <img src="image/3.jpg" alt="">
                @break
            @default
       
@endswitch

@if($dataid["nama"] === "Daffa Arrazi")
    <h1>ini saya</h1>

@elseif($dataid["nama"] === "Obama chan")
    <h1>ini obama</h1>

@else 
    <h1>ini ayam kfc</h1>
@endif

@endforeach



@endsection

@extends('inc')

@section('content')
    <h1>Product</h1>

    @foreach($product as $products)
    {{$products['device']}}
    @endforeach
@endsection('content')
@extends('layouts.app')

@section('content')
    <h1>Danh sách sản phẩm</h1>

    <ul>
        @foreach ($products as $product)
            <li>{{ $product->name }} - {{ $product->price }}</li>
        @endforeach
    </ul>
@endsection

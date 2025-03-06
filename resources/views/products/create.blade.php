@extends('layouts.app')

@section('content')
    <h1>Thêm sản phẩm mới</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <div>
            <label for="name">Tên sản phẩm:</label>
            <input type="text" id="name" name="name" value="{{ old('name') }}" required>
        </div>
        <div>
            <label for="description">Mô tả:</label>
            <textarea id="description" name="description">{{ old('description') }}"></textarea>
        </div>
        <div>
            <label for="price">Giá:</label>
            <input type="number" id="price" name="price" value="{{ old('price') }}" required>
        </div>
        <div>
            <label for="stock">Số lượng:</label>
            <input type="number" id="stock" name="stock" value="{{ old('stock') }}" required>
        </div>
        <button type="submit">Thêm sản phẩm</button>
    </form>
@endsection

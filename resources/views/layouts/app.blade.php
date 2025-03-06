<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Ứng dụng Laravel')</title>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="{{ route('products.index') }}">Danh sách sản phẩm</a></li>
                <li><a href="{{ route('products.create') }}">Thêm sản phẩm</a></li>
            </ul>
        </nav>
    </header>

    <main>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @yield('content')
    </main>

    <footer>
        <p>&copy; 2025 Laravel App</p>
    </footer>
</body>
</html>

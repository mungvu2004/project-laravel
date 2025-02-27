<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .news {
            display: flex;
            justify-content: start;
            gap: 50px;
        }
        .news-menu {
            width: 300px;
            align-items: center;
            display: flex;
            flex-direction: column;
            gap: 20px;
            font-size: 25px;
        }
        .new-title:hover {
            cursor: pointer;
            color: red;
        }
        .news-item {
            display: flex;
            justify-content: space-between;
            flex: 1;
        }
    </style>
</head>
<body>
    <h1>Danh sách tin tức</h1>
    <div class="news">
        <div class="news-menu">
            @foreach ($news as $item)
                <div class="new-item">
                    <div class="new-title">{{ $item->title }}</div>
                </div>
            @endforeach
        </div>
        <div class="news-item">
            @foreach ($news as $item)
                <div class="news-tp">
                    <h2 class="new-title">{{ $item->title }}</h2>
                    <h4 class="new-content">{{ $item->content }}</hh4>
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>
<h1>Tin xem nhiều</h1>

    <p>Dữ liệu trả ra:</p>

    <ul>
        @foreach ($data as $news)
            <li>Tiêu đề: {{ $news->tieuDe }} - Lượt xem: {{ $news->xem }}</li>
        @endforeach
    </ul>

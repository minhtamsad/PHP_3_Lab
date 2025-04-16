
    <div class="container">
        <h1>DANH SÁCH TIN</h1>
        @foreach ($data as $tin)
            <div class="row">
                <div class="left">
                    <h4>{{ $tin->tieuDe }}</h4>
                    <p>{{ $tin->tomTat }}</p>
                </div>
                <div class="right">
                <a href="{{ url('/tin/capnhat/' . $tin->id) }}">Cập nhật</a> | <a href="{{ url('/tin/xoa/' . $tin->id) }}">Xóa</a>
                </div>
            </div>
            <hr>
        @endforeach
    </div>


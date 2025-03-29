<h1>Tin mới nhất</h1>



        @foreach ($data as $news)
       <p>{{ $news->tieuDe }}</p>
       <em>{{ $news->created_at }}</em>
       <hr>
        @endforeach


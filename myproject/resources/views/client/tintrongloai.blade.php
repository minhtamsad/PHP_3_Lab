

@foreach ($data as $news)
       <h1>{{ $news->tieuDe }}</h1>
       <h3>{{ $news->tomTat }}</h3>
    <div>{!! $news->noiDung !!}</div>
        @endforeach


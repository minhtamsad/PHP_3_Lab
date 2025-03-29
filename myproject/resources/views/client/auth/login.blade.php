<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('meta_title', 'Xác thực người dùng')</title>
    @push('style')
    <style>
        body {
            background-color: cadetblue;
        }
    </style>
    @endpush
</head>
<!-- <style>
    body{
        background-color: aqua;
    }
</style> -->
<body>
<h1>login nè</h1>
@yield('content')
@section('meta_title')
    login
 @endsection


</body>


</html>

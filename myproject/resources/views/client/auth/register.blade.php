<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('meta_title', 'Xác thực người dùng')</title>
</head>
<!-- <style>
    body {
     background-color: red;
    }
</style> -->
<body>
<h1>đăng ký nè ?</h1>

@yield('content')

@section('meta_title')
    ĐĂNG KÝ
 @endsection
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('meta_title', 'Xác thực người dùng')</title>
@stack('style')

</head>
<body>
 @extends('client.auth.login')
 @extends('client.auth.register')   

 @section('content')
    trang chủ
 @endsection
 @section('meta_title')
    login
 @endsection
</body>
</html>

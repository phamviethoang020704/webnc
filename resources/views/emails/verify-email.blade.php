<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <p>Chào bạn,</p>
<p>Vui lòng xác thực email của bạn bằng cách nhấn vào link dưới đây:</p>
<a href="{{ url('/verify-email/' . $token) }}">Xác thực Email</a>
</body>
</html>

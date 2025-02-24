<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xác Thực Email</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .email-container {
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
            background: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #333;
            text-align: center;
            font-size: 24px;
        }
        .button {
            display: inline-block;
            padding: 15px 30px;
            background-color: #007bff;
            color: #ffffff;
            text-decoration: none;
            border-radius: 5px;
            font-size: 18px;
            text-align: center;
        }
        .button:hover {
            background-color: #0056b3;
        }
        .footer {
            text-align: center;
            margin-top: 20px;
            font-size: 14px;
            color: #777;
        }
    </style>
</head>
<body>
    <div class="email-container">
        <h1>Xác Nhận Email Của Bạn</h1>
        <p>Chào mừng tới Car Rental, cảm ơn bạn đã đăng ký tài khoản, vui lòng xác nhận email của bạn bằng cách ấn vào liên kết</p>
        <p style="text-align: center;">
            <a href="{{ $url }}" class="button">Xác Nhận Email</a>
        </p>
        <p class="footer">
            Nếu bạn không thực hiện hành động này, bạn có thể bỏ qua email này.<br>
            Cảm ơn,<br>
            {{ config('app.name') }}
        </p>
    </div>
</body>
</html>

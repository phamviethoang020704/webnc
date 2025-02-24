
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <title>Car Rental</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('images/favicon (1).ico') }}">
    <style>
        .register-container{
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            width: 350px;
            height: 450px;
            background-color: white;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding-top: 15px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
        }
        .register-container>ion-icon{
            color: #FA4226;
            font-size: 25px;
        }
        .input-1{
            display: flex;
            justify-content: space-between;
            margin-top: 5px;
        }
        .input{
            margin: 10px 0;
        }
        button{
            margin-top: 10px;
            margin-left: 116px;
            border: none;
            color: white;
            background-color: #FA4226;
            padding: 5px 10px;
            cursor: pointer;
        }
        #resgiter{
            display: flex;
            align-items: center;
            gap: 5px;
        }
        .error-message{
            display: flex;
            align-items: center;
            color: #FA4226;
            margin: auto;
            height: 15px;
            margin: 3px;
        }
    </style>
</head>
<body>
    <div class="register-container">
        <ion-icon name="car-sport" onclick="window.location.href='http://127.0.0.1:8000/';" style="cursor: pointer"></ion-icon>
        <h2>Đăng ký</h2>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="input">
                <div class="input-1">
                    <label for="email">email</label>
                    <input type="text" name="email" value="{{ old('trademark') }}">
                </div>
                @error('email')
                    <div class="error-message">
                        <ion-icon name="alert-circle-outline"></ion-icon>
                        <p>{{ $message }}</p>
                    </div>
                @enderror
            </div>

            <div class="input">
                <div class="input-1">
                    <label for="password">Mật khẩu</label>
                    <input type="password" name="password">
                </div>
                @error('password')
                    <div class="error-message">
                        <ion-icon name="alert-circle-outline"></ion-icon>
                        <p>{{ $message }}</p>
                    </div>
                @enderror
            </div>
            <div class="input">
                <div class="input-1">
                    <label for="password">Nhập lại mật khẩu</label>
                    <input type="password" name="password_confirmation">
                </div>
                @error('password_confirmation')
                    <div class="error-message">
                        <ion-icon name="alert-circle-outline"></ion-icon>
                        <p>{{ $message }}</p>
                    </div>
                @enderror
            </div>

            <div class="input">
                    <div class="input-1">
                        <label for="name">Họ và tên</label>
                        <input type="text" name="name">
                    </div>
                @error('name')
                <div class="error-message">
                    <ion-icon name="alert-circle-outline"></ion-icon>
                    <p>{{ $message }}</p>
                </div>
            @enderror
            </div>

            <div class="input">
                <div class="input-1">
                    <label for="phone">Số điện thoại</label>
                    <input type="text" name="phone">
                </div>
                @error('phone')
                <div class="error-message">
                    <ion-icon name="alert-circle-outline"></ion-icon>
                    <p>{{ $message }}</p>
                </div>
            @enderror
            </div>

            <div class="input">
                <div class="input-1">
                    <label for="address">Địa chỉ</label>
                    <input type="text" name="address">
                </div>
                @error('address')
                <div class="error-message">
                    <ion-icon name="alert-circle-outline"></ion-icon>
                    <p>{{ $message }}</p>
                </div>
            @enderror
            </div>
            <button type="submit">Đăng ký</button>
        </form>
        <div>
            <div id="resgiter">
                <p>bạn đã có tài khoản?</p>
                <a href="/login">nhấn để đăng nhập</a>
            </div>
        </div>
    </div>
</body>
</html>

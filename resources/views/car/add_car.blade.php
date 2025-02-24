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
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            font-family: sans-serif;
            scrollbar-width: thin;
            scrollbar-color: #ff4d30 #fff;
        }
        #header{
            display: flex;
            justify-content: space-between;
            background-color: #F3F4F6;
            height: 50px;
            align-items: center;
        }
        #header-left{
            display: flex;
            align-items: center;
            margin-left: 30px;
        }
        #header-left ion-icon{
            color:#FA4226;
            font-size: 30px;
            margin-right: 5px;
        }
        #header-left h1{
            padding-top: 5px;
            padding-left: 5px;
            font-size: 20px;
            font-weight: bold;
        }
        #header-menu{
            display: flex;
            justify-content: space-between;
            gap: 30px;
        }
        #header-menu a:hover{
            color: #FA4226;
        }
        #header-menu   a{
            text-decoration: none;
            color: black;
        }
        li{
            list-style: none;
        }
        #profile-logout a{
            text-decoration: none;
            color: black;
            font-size: 15px;
            height: 40px;
            line-height: 40px;
            display: flex;
            justify-content: start;
            padding-left: 10px;
            margin-top: 5px;
        }
        #profile-logout button{
            border: none;
            background-color: white;
            font-size: 15px;
            height: 40px;
            line-height: 40px;
            margin: 0;
            width: 100%;
            display: flex;
            justify-content: start;
            padding-left: 10px;
            cursor: pointer;
        }
        #profile-logout a:hover,#profile-logout button:hover{
            background-color: #F3F4F6;
        }
        #profile-logout{
            position: relative;
            height: 50px;
            line-height: 50px;
            margin-right: 40px;
            cursor: pointer;
            user-select: none;
            z-index: 2;
        }
        #profile-logout>div{
            position: absolute;
            bottom: -90px;
            left: 0;
            /* display: flex; */
            flex-direction: column;
            justify-content: start;
            border:1px solid #e5e7eb;
            box-shadow: 0 0 15px #e5e7eb;
            height: 90px;
            width: 150px;
            display: none;
        }
        #profile-logout-content{
            z-index: 2;
            background-color: white;
        }
        #form>h1{
            display: flex;
            justify-content: start;
            z-index: 1;
            margin-bottom: 20px;
        }
        .form input{
            border-color: black;
            margin-bottom: 10px;
            height: 30px;
            width: 250px;
            border-radius: 5px;
            padding: 10px;
        }
        .form input:focus{
            border: 2px solid black;
            outline: none;
        }
        #form{
            background-color:#F8F8F8;
            padding-left: 30px;
            padding-top: 40px;
            z-index: 1;
        }
        #form button{
            background-color: #FA4226;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            color: white;
            cursor: pointer;
            margin-top: 15px;
        }
        #form textarea{
            border:1px solid black;
            border-radius: 5px;
            padding: 10px;
            max-width: 800px;
        }


        .input-error {
            border: 2px solid red !important;
        }
        .error-message{
            display: flex;
            align-items: center;
            margin-bottom: 10px !important;
        }
        .error-message p,.error-message ion-icon{
            color: red;
            font-size: 15px;
        }
        #trademark-name{
            display: flex;
            gap: 100px;
        }
        #quantity-remaining_quantity{
            display: flex;
            gap: 100px;
        }

        #success-message {
            opacity: 1;
            transition: opacity 1s ease-out; /* Hiệu ứng mờ dần */
            position: fixed; /* Đặt ở vị trí cố định trong view */
            top: 50%; /* Khoảng cách từ trên cùng */
            transform: translateY(-50%); /* Căn giữa chính xác */
            left: 50%; /* Căn giữa */
            transform: translateX(-50%); /* Căn giữa chính xác */
            z-index: 9999; /* Đảm bảo thông báo không bị che khuất */
            background-color: #FA4226;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div id="header">
        <div id="header-left" onclick="window.location.href='http://127.0.0.1:8000/';" style="cursor: pointer">
            <ion-icon name="car-sport"></ion-icon>
            <h3>Car Rental</h3>
        </div>
        <ul id="header-menu">
            <li><a  href="{{route('admin.index')}}">Đơn thuê xe</a></li>
            <li><a id="header-main" href="{{route('car.create')}}">Thêm xe</a></li>
        </ul>
        <div id="profile-logout">
            <span>{{Auth::user()->name}} ⇊</span>
            <div id="profile-logout-content">
                <a href="{{ route('profile.edit') }}">Thông tin</a>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit">Đăng xuất</button>
                </form>
            </div>
        </div>
    </div>
    <div id="form">
        <h1>Nhập thông tin xe</h1>
        <div >
            <form action="{{ route('car.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div id="trademark-name">
                    <div class="form">
                        <label for="trademark">Thương hiệu</label>
                        <br>
                        <input type="text" name="trademark" id="trademark" list="trademarks" class="form-control @error('trademark') input-error @enderror" value="{{ old('trademark') }}">
                        <datalist id="trademarks">
                            <option value="Audi">
                            <option value="Bentley">
                            <option value="BMW">
                            <option value="Jaguar">
                            <option value="Land-Rover">
                            <option value="Lexus">
                            <option value="Mercedes-Benz">
                            <option value="Rolls-Royce">
                            </datalist>
                            @error('trademark')
                                <div class="error-message">
                                    <ion-icon name="alert-circle-outline"></ion-icon>
                                    <p>{{ $message }}</p>
                                </div>
                            @enderror
                    </div>
                    <div class="form">
                        <label for="name">Tên xe</label>
                        <br>
                        <input type="text" name="name" id="name" class="form-control @error('name') input-error @enderror" value="{{ old('name') }}">
                        @error('name')
                            <div class="error-message">
                                <ion-icon name="alert-circle-outline"></ion-icon>
                                <p>{{ $message }}</p>
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="form">
                    <label for="seat_count">Số chỗ ngồi</label>
                    <br>
                    <input type="" name="seat_count" id="seat_count" class="form-control @error('seat_count') input-error @enderror" value="{{ old('seat_count') }}">
                    @error('seat_count')
                        <div class="error-message">
                            <ion-icon name="alert-circle-outline"></ion-icon>
                            <p>{{ $message }}</p>
                        </div>
                    @enderror
                </div>
                <div class="form">
                    <label for="price_per_day">Giá thuê một ngày</label>
                    <br>
                    <input type="text" name="price_per_day" id="price_per_day" class="form-control @error('price_per_day') input-error @enderror" value="{{ old('price_per_day') }}">
                    @error('price_per_day')
                        <div class="error-message">
                            <ion-icon name="alert-circle-outline"></ion-icon>
                            <p>{{ $message }}</p>
                        </div>
                    @enderror
                </div>
                <div id="quantity-remaining_quantity">
                    <div class="form">
                        <label for="quantity">Số lượng</label>
                        <br>
                        <input type="number" name="quantity" id="quantity" class="form-control @error('quantity') input-error @enderror" value="{{ old('quantity') }}">
                        @error('quantity')
                            <div class="error-message">
                                <ion-icon name="alert-circle-outline"></ion-icon>
                                <p>{{ $message }}</p>
                            </div>
                        @enderror
                    </div>
                    <div class="form">
                        <label for="remaining_quantity">Số lượng có sẵn</label>
                        <br>
                        <input type="number" name="remaining_quantity" id="remaining_quantity" class="form-control @error('remaining_quantity') input-error @enderror" value="{{ old('remaining_quantity') }}">
                        @error('remaining_quantity')
                            <div class="error-message">
                                <ion-icon name="alert-circle-outline"></ion-icon>
                                <p>{{ $message }}</p>
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="form">
                    <label for="image_url">Chọn ảnh:</label>
                    <input type="file" name="image_url" id="image_url" accept="image/*">
                </div>
                <div class="form">
                    <label for="description">Mô tả</label>
                    <br>
                    <textarea type="text" name="description" id="description" rows="10" cols="80" class="form-control @error('description') input-error @enderror" value="{{ old('description') }}"></textarea>
                    @error('description')
                        <div class="error-message">
                            <ion-icon name="alert-circle-outline"></ion-icon>
                            <p>{{ $message }}</p>
                        </div>
                    @enderror
                </div>
                <div class="form">
                    <label>Ảnh liên quan:</label>
                    <input type="file" name="related_images[]" multiple>
                </div>
                <div>
                    <button type="submit">Thêm xe</button>
                </div>
            </form>
        </div>
    </div>
        @if (session('success'))
            <div id="success-message" class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
    <script>
                profileLogout = document.getElementById("profile-logout");
        profileLogoutContent = document.getElementById("profile-logout-content");
        profileLogoutContent.style.display = "none";
        profileLogout.addEventListener("click",(e) => {
            e.stopPropagation();
            profileLogoutContent.style.display = profileLogoutContent.style.display === "none" ? "flex" : "none";
        })
        document.addEventListener("click",(e) => {
            if(profileLogoutContent.style.display === 'flex')
            profileLogoutContent.style.display = 'none';
        })
        //
        window.onload = function() {
    const message = document.getElementById('success-message');
    if (message) {
        setTimeout(function() {
            message.style.opacity = 0; // Làm cho thông báo mờ dần
        }, 2000); // Đợi 2 giây để hiển thị đầy đủ trước khi mờ dần

        setTimeout(function() {
            message.style.display = 'none'; // Ẩn thông báo sau khi mờ dần
        }, 4000); // Đợi thêm 2 giây sau khi mờ dần hoàn toàn
    }
}
    </script>
</body>
</html>

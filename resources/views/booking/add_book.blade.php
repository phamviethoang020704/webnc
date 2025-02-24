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
        #content>h1{
            font-size: 25px;
            color: white;
            display: flex;
            justify-content: center;
            margin-top: 5px;
        }
        #content-image{
            width: 100%;
            position: relative;
            background-image: url('{{ asset('storage/booking/addBookMain.jpg') }}');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center center;
            height: 100vh;
            margin: 0;
        }
        #content{
            position: absolute;
            width: 60%;
            height: 80%;
            background-color: rgba(0, 0, 0, 0.7);
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            border:1px solid #fff;
        }
        #confirm-info-user{
            margin-left: 5px;
            margin-bottom: 10px;
        }
        #confirm-info-user h1{
            color: whitesmoke;
            font-size: 15px;
            margin-bottom: 5px;
        }
        #confirm-info-user p{
            color: white;
            font-size: 15px;
        }
        #confirm-info-user a{
            background-color: #FA4226;
            color: white;
            text-decoration: none;
            font-size: 15px;
            height: 25px;
            line-height: 25px;
            border-radius: 5px;
            padding: 2px;
        }
        #info-car{
            margin-left: 5px;
        }
        #info-car h1{
            color: white;
            font-size: 20px;
            margin-bottom: 5px;
        }
        #info-car p{
            color: white;
            font-size: 15px;
        }
        #start-end{
            margin-top: 20px;
            display: flex;
            gap: 50px;
        }
        .form-group{
            margin-top: 15px;
        }
        .form-group label{
            color: white;
            font-size: 15px;
        }
        .form-group input{
            width: 200px;
            height: 30px;
        }
        #form{
            margin-left: 5px;
        }
        #total_price:hover{
            cursor: default;
        }
        #total_price:focus{
            outline: none;
        }
        #form>button{
            color: white;
            background-color: #FA4226;
            border-radius: 5px;
            height: 40px;
            line-height: 40px;
            width: 130px;
            border: none;
            margin-top: 20px;
            cursor: pointer;
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
    <div id="content-image">
        <div id="content">
            <h1>Nhập thông tin để thuê xe</h1>
            <div id="confirm-info-user">
                <h1>Xác nhận thông tin người dùng</h1>
                <p>Tên người dùng: {{Auth()->user()->name}}</p>
                <p>Số điện thoại: {{Auth()->user()->phone}}</p>
                <p>Địa chỉ: {{Auth()->user()->address}}</p>
                <a href="{{ route('profile.edit') }}">Ấn vào đây để chỉnh sửa thông tin</a>
            </div>
            <div id="info-car">
                <h1>Đơn đặt xe:</h1>
                <p>{{$car->name}},{{$car->trademark}}</p>
                <p>{{number_format($car->price_per_day, 0, ',', '.')}} VND / Ngày</p>
            </div>
            <form id="form" action="{{ route('bookings.store') }}" method="POST">
                @csrf
                <input name="car_id" type="hidden" value="{{$car->id}}">
                <input name="user_id" type="hidden" value="{{auth()->user()->id}}">
                <input name="price_per_day" id="price_per_day" type="hidden" value="{{$car->price_per_day}}">
                <div id="start-end">

                    <div class="form-group">
                        <label for="start_date">Ngày bắt đầu</label>
                        <br>
                        <input type="date" id="start_date" name="start_date" class="form-control" required>
                        @error('start_date')
                            <div class="error-message">
                                <ion-icon name="alert-circle-outline"></ion-icon>
                                <p>{{ $message }}</p>
                            </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="end_date">Ngày kết thúc</label>
                        <br>
                        <input type="date" id="end_date" name="end_date" class="form-control" required>
                        @error('end_date')
                            <div class="error-message">
                                <ion-icon name="alert-circle-outline"></ion-icon>
                                <p>{{ $message }}</p>
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label for="total_price">Tổng giá thuê (Chọn ngày bắt đầu và kết thúc sẽ tự tính tổng giá)</label>
                    <br>
                    <input type="text" id="total_price" name="total_price" class="form-control" readonly>
                </div>

                <button type="submit">Xác nhận đặt xe</button>
            </form>
        </div>
    </div>
    @if (session('success'))
        <div id="success-message" class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

</body>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const startDateInput = document.getElementById('start_date');
        const endDateInput = document.getElementById('end_date');
        const totalPriceInput = document.getElementById('total_price');
        const pricePerDay = parseFloat(document.getElementById('price_per_day').value);

        function calculateTotalPrice() {
            const startDate = new Date(startDateInput.value);
            const endDate = new Date(endDateInput.value);

            if (!isNaN(startDate) && !isNaN(endDate) && endDate >= startDate) {
                const days = Math.ceil((endDate - startDate) / (1000 * 60 * 60 * 24));
                const totalPrice = days * pricePerDay;
                totalPriceInput.value = totalPrice.toLocaleString(); // Hiển thị số dạng tiền tệ
            } else {
                totalPriceInput.value = ''; // Xóa tổng giá nếu ngày không hợp lệ
            }
        }

        // Gắn sự kiện onchange cho các input ngày
        startDateInput.addEventListener('change', calculateTotalPrice);
        endDateInput.addEventListener('change', calculateTotalPrice);
    });

    //
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

</html>

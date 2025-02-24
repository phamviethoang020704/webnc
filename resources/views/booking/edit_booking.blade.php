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
        #header-main{
            border-bottom: 2px solid #FA4226;
            padding-bottom: 3px;
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
            <li><a href="{{route('car.create')}}">Thêm xe</a></li>
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
    <form action="{{ route('bookings.update',$booking->id) }}" method="POST">
        @csrf
        @method('PUT')
        <input type="number" name="user_id" id="user_id" value="{{ auth()->id() }}">
        <input type="hidden" name="car_id" id="car_id" value="{{ $booking->car->id }}">
        <input type="text" name="price_per_day" id="price_per_day" value="{{ $booking->car->price_per_day }}">

        <div class="form-group">
            <label for="start_date">Ngày bắt đầu:</label>
            <input type="date" id="start_date" name="start_date" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="end_date">Ngày kết thúc:</label>
            <input type="date" id="end_date" name="end_date" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="total_price">Tổng giá thuê:</label>
            <input type="text" id="total_price" name="total_price" class="form-control" readonly>
        </div>

        <button type="submit" class="btn btn-success">xac nhan sua</button>
    </form>

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
</script>

</html>

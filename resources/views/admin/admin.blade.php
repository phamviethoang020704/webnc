<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css">
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
        body{
            background-color: #F0F5F9;
            height: 100vh;
            z-index: 1;
        }
        #sidebar{
            position: fixed;
            top: 15px;
            left: 15px;
            bottom: 15px;
            border-radius: 20px;
            background-color: white;
            min-width: 270px;
            box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.5);
        }
        #sidebarIcon{
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 15px;
            margin-top: 10px;
        }
        #sidebarIcon>ion-icon{
            color: #FA4226;
            font-size: 25px;
        }
        #sidebar p{
            color: 	rgba(0, 0, 0, 0.7);
            margin-top: 20px;
            margin-left: 25px;
        }
        .menuClass{
            width: 100%;
            display: flex;
            align-items: center;
            gap: 15px;
            padding-left: 25px;
            height: 40px;
            border-bottom-right-radius: 20px;
            border-top-right-radius: 20px;
            margin-top: 15px;
            cursor: pointer;
        }
        .menuClass:hover{
            background-color:#E0F0FB;
        }
        .menuClass h2{
            font-size: 15px;
            font-weight: 100;

        }
        a{
            text-decoration: none;
            color: black;
        }
        #header{
            position: fixed;
            height: 70px;
            background-color: white;
            top: 15px;
            right: 15px;
            border-radius: 15px;
            margin-left: 20px;
            width: calc(100% - 320px);
            display: flex;
            justify-content: space-between;
            padding: 0 15px 0 30px;
            align-items: center;
            box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.5);
            z-index: 10;
        }
        #header i{
            font-size: 20px;
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
            background-color: #E0F0FB;
        }
        #profile-logout{
            position: relative;
            height: 50px;
            line-height: 50px;
            margin-right: 40px;
            cursor: pointer;
            user-select: none;
            z-index: 3;
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
            background-color: white;
            z-index: 4;
        }
        #profile-logout-content{
            z-index: 4;
        }
        #content{
            margin-left: 306px;
            margin-top: 106px;
            padding: 20px;
            min-height: 100vh;
            background-color: white;
            border-radius: 20px;
            box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.5);
            margin-right: 10px;
        }
        .odd {
            background-color: #f9f9f9; /* Xám nhạt */
        }

        .even {
            background-color: white; /* Xanh nhạt */
        }
        .booking-table{
            margin-top: 30px;
            width: 100%;
            table-layout: fixed;
            border: 1px solid #ddd;
        }
        th,td{
            border: 1px solid #ddd;
        }
        #bookingBrowsing,#overdueBookings{
            display: none;
        }
        table button{
            width: 100%;
            height: 100%;
            border-radius: 5px;
            color: white;
            background-color: #FA4226;
            padding: 10px;
            cursor: pointer;
        }
        .active{
            background-color: #E0F0FB;
        }
        #divAddCar{
            display: none;
        }
        #form>h1{
            font-weight: 200;
            border-bottom: 1px solid gray;
            color: rgba(0, 0, 0, 0.9);
            padding-bottom: 5px;
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
        .input-group {
            position: relative;
            width: 100%;
            max-width: 300px;
        }

        .input-group input {
            width: 100%;
            padding: 12px 10px;
            border: 2px solid #ccc;
            border-radius: 5px;
            outline: none;
            font-size: 16px;
            transition: 0.3s;
        }

        .input-group label {
            position: absolute;
            top: 50%;
            left: 12px;
            transform: translateY(-50%);
            font-size: 16px;
            color: #aaa;
            transition: 0.3s ease-in-out;
            pointer-events: none;
            background: white;
            padding: 0 5px;
        }

        /* Khi input được focus hoặc có giá trị */
        .input-group input:focus,
        .input-group input:valid {
            border-color: #2ab27b;
        }

        .input-group input:focus + label,
        .input-group input:valid + label {
            top: 0;
            font-size: 14px;
            color: #2ab27b;
        }
        .input-group textarea {
            width: 470px;
            padding: 12px 16px;
            border: 2px solid #ccc;
            border-radius: 8px;
            font-size: 16px;
            outline: none;
            transition: all 0.3s ease;
            resize: vertical; /* Cho phép kéo chỉnh chiều cao */
            min-height: 150px; /* Giữ chiều cao tối thiểu */
        }
        .input-group textarea:focus,
        .input-group textarea:valid {
            border-color: #2ab27b;
        }

        .input-group textarea:focus + label,
        .input-group textarea:valid + label {
            top: 0;
            font-size: 14px;
            color: #2ab27b;
        }
        .input-group.textarea-group label {
            position: absolute;
            top: 16px;
            left: 16px;
            background: white;
            padding: 0 4px;
            font-size: 16px;
            color: #888;
            transition: all 0.3s ease;
            pointer-events: none;
        }
        #trademark-name{
            display: flex;
            gap: 30px;
            margin-top: 30px;
        }
        .form{
            margin-top: 20px;
        }
        #quantity-remaining_quantity{
            display: flex;
            gap: 30px;
        }
        #seat_count{
            width: 468px;
        }
        #price_per_day{
            width: 468px;
        }
        .error-message{
            display: flex;
            gap: 5px;
            align-items: center;
            color: #ff4d30;
        }
        #btnAddCar{
            width: 50%;
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }
        #btnAddCar button{
            background-color: #FA4226;
            color: white;
            padding: 15px 50px;
            border-radius: 5px;
            border: none;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div id="sidebar">
        <div id="sidebarIcon" onclick="window.location.href='http://127.0.0.1:8000/';" style="cursor: pointer">
            <ion-icon name="car-sport"></ion-icon>
            <h3>Car Rental</h3>
        </div>
        <p>Trang chủ</p>
        <div class="menuClass">
            <ion-icon name="grid-outline"></ion-icon>
            <h2>Bảng điều khiển</h2>
        </div>
        <p>Đơn đặt xe</p>
        <div class="menuClass menu-item active" id="menu-all" onclick="setActive(this)">
            <i class='bx bx-podcast'></i>
            <h2  class="">Tất cả</h2>
        </div>
        <div class="menuClass menu-item" id="menu-bookingBrowsing" onclick="setActive(this)">
            <ion-icon name="checkmark-outline"></ion-icon>
            <h2  class="">Đơn chưa duyệt</h2>
        </div>
        <div class="menuClass menu-item" id="menu-overdueBookings" onclick="setActive(this)">
            <i class='bx bxl-paypal'></i>
            <h2  class="">Đơn chưa trả xe</h2>
        </div>
        <p>Thêm xe</p>
        <div class="menuClass" id="addCar" onclick="setActive(this)">
            <i class='bx bxs-car-wash'></i>
            <h2>Thêm xe</h2>
        </div>
    </div>
    <div id="header">
        <i class='bx bxs-bell-ring'></i>
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
    <div id="content">
        <div id="bookCar">
            <table id="all" class="booking-table">
                <tr>
                  <th>Thời gian</th>
                  <th>Họ và tên</th>
                  <th>Tên xe</th>
                  <th>Ngày bắt đầu thuê</th>
                  <th>Ngày kết thúc thuê</th>
                  <th>Tổng giá</th>
                  <th>Trạng thái duyệt</th>
                  <th>KH xác nhận trả xe</th>
                  <th>QTV xác nhận trả xe</th>
                  <th>trạng thái trả xe khách hàng</th>
                  <th>Xóa đơn</th>
                </tr>
                @foreach ($bookings as $booking)
                <tr class="{{ $loop->iteration % 2 == 0 ? 'even' : 'odd' }}">
                    <td>{{$booking->updated_at}}</td>
                    <td>{{ $booking->user ? $booking->user->name : 'Không có người dùng' }}</td>
                    <td>{{ $booking->car ? $booking->car->name : 'Không có xe' }}</td>
                    <td>{{ \Carbon\Carbon::parse($booking->start_date)->format('d/m/Y') }}</td>
                    <td>{{  \Carbon\Carbon::parse($booking->end_date)->format('d/m/Y')  }}</td>
                    <td>{{ number_format($booking->total_price, 0, ',', '.') }}</td>
                    <td>
                        @if ($booking->browsing_status == false)
                        <form action="{{ Route('admin.approveBooking',$booking->id)}}" method="POST">
                            @csrf
                            <button type="submit">duyệt</button>
                        </form>
                        @else
                            <p>✔</p>
                    @endif
                    </td>
                    <td>
                        @if ($booking->user_give_back == false)
                            <p>X</p>
                        @else
                            <p>✔</p>
                        @endif
                    </td>
                    <td>
                        @if ($booking->browsing_status == true)
                            @if ($booking->admin_give_back == false)
                                <form action="{{Route('admin.adminGiveBack',$booking->id)}}" method="POST">
                                    @csrf
                                    <button type="submit">Xac nhan</button>
                                </form>
                            @else
                                <p>✔</p>
                            @endif
                        @else
                                <button>X</button>
                        @endif
                    </td>
                    <td>{{ $booking->car_return_deadline }}</td>
                    <td>
                        <form action="{{Route('booking.destroy',$booking->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Xóa đơn</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </table>

            <table id="bookingBrowsing" class="booking-table">
                <tr>
                  <th>Thời gian</th>
                  <th>Họ và tên</th>
                  <th>Tên xe</th>
                  <th>Ngày b/d thuê</th>
                  <th>Ngày k/t thuê</th>
                  <th>Tổng giá</th>
                  <th>Trạng thái duyệt</th>
                  <th>KH x/n trả xe</th>
                  <th>QTV x/n trả xe</th>
                  <th>trạng thái trả xe kh</th>
                  <th>Xóa đơn</th>
                </tr>
                @if ($bookingBrowsing->isEmpty())
                    <p></p>
                @else
                @foreach ($bookingBrowsing as $booking)
                <tr>
                    <td>{{$booking->updated_at}}</td>
                    <td>{{ $booking->user ? $booking->user->name : 'Không có người dùng' }}</td>
                    <td>{{ $booking->car ? $booking->car->name : 'Không có xe' }}</td>
                    <td>{{ \Carbon\Carbon::parse($booking->start_date)->format('d/m/Y') }}</td>
                    <td>{{  \Carbon\Carbon::parse($booking->end_date)->format('d/m/Y')  }}</td>
                    <td>{{ number_format($booking->total_price, 0, ',', '.') }}</td>
                    <td>
                        @if ($booking->browsing_status == false)
                        <form action="{{ Route('admin.approveBooking',$booking->id)}}" method="POST">
                            @csrf
                            <button type="submit">duyệt</button>
                        </form>
                        @else
                            <p>✔</p>
                    @endif
                    </td>
                    <td>
                        @if ($booking->user_give_back == false)
                            <p>X</p>
                        @else
                            <p>✔</p>
                        @endif
                    </td>
                    <td>
                        @if ($booking->browsing_status == true)
                            @if ($booking->admin_give_back == false)
                                <form action="{{Route('admin.adminGiveBack',$booking->id)}}" method="POST">
                                    @csrf
                                    <button type="submit">Xac nhan</button>
                                </form>
                            @else
                                <p>✔</p>
                            @endif
                        @else
                                <button>X</button>
                        @endif
                    </td>
                    <td>{{ $booking->car_return_deadline }}</td>
                    <td>
                        <form action="{{Route('booking.destroy',$booking->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Xóa đơn</button>
                        </form>
                    </td>
                </tr>
                @endforeach
                @endif
            </table>

            <table id="overdueBookings" class="booking-table">
                <tr>
                    <th>Thời gian</th>
                    <th>Họ và tên</th>
                    <th>Tên xe</th>
                    <th>Ngày b/d thuê</th>
                    <th>Ngày k/t thuê</th>
                    <th>Tổng giá</th>
                    <th>Trạng thái duyệt</th>
                    <th>KH x/n trả xe</th>
                    <th>QTV x/n trả xe</th>
                    <th>trạng thái trả xe kh</th>
                    <th>Xóa đơn</th>
                </tr>
                @if ($overdueBookings->isEmpty())
                    <p></p>
                @else
                @foreach ($overdueBookings as $booking)
                <tr>
                    <td>{{$booking->updated_at}}</td>
                    <td>{{ $booking->user ? $booking->user->name : 'Không có người dùng' }}</td>
                    <td>{{ $booking->car ? $booking->car->name : 'Không có xe' }}</td>
                    <td>{{ \Carbon\Carbon::parse($booking->start_date)->format('d/m/Y') }}</td>
                    <td>{{  \Carbon\Carbon::parse($booking->end_date)->format('d/m/Y')  }}</td>
                    <td>{{ number_format($booking->total_price, 0, ',', '.') }}</td>
                    <td>
                        @if ($booking->browsing_status == false)
                        <form action="{{ Route('admin.approveBooking',$booking->id)}}" method="POST">
                            @csrf
                            <button type="submit">duyệt</button>
                        </form>
                        @else
                            <p>✔</p>
                    @endif
                    </td>
                    <td>
                        @if ($booking->user_give_back == false)
                            <p>X</p>
                        @else
                            <p>✔</p>
                        @endif
                    </td>
                    <td>
                        @if ($booking->browsing_status == true)
                            @if ($booking->admin_give_back == false)
                                <form action="{{Route('admin.adminGiveBack',$booking->id)}}" method="POST">
                                    @csrf
                                    <button type="submit">Xac nhan</button>
                                </form>
                            @else
                                <p>✔</p>
                            @endif
                        @else
                                <button>X</button>
                        @endif
                    </td>
                    <td>{{ $booking->car_return_deadline }}</td>
                    <td>
                        <form action="{{Route('booking.destroy',$booking->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Xóa đơn</button>
                        </form>
                    </td>
                </tr>
                @endforeach
                @endif
            </table>
        </div>
        <div id="divAddCar">
            <div id="form">
                <h1>Nhập thông tin xe</h1>
                <div>
                    <form action="{{ route('car.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div id="trademark-name">
                            <div class="form">
                                <div class="input-group">
                                    <input required type="text" name="trademark" id="trademark" list="trademarks" class="form-control @error('trademark') input-error @enderror" value="{{ old('trademark') }}">
                                    <label for="trademark">Thương hiệu</label>
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
                                </div>
                                    @error('trademark')
                                        <div class="error-message">
                                            <ion-icon name="alert-circle-outline"></ion-icon>
                                            <p>{{ $message }}</p>
                                        </div>
                                    @enderror
                            </div>
                            <div class="form">
                                <div class="input-group">
                                    <input required type="text" name="name" id="name" class="form-control @error('name') input-error @enderror" value="{{ old('name') }}">
                                    <label for="name">Tên xe</label>
                                </div>
                                @error('name')
                                    <div class="error-message">
                                        <ion-icon name="alert-circle-outline"></ion-icon>
                                        <p>{{ $message }}</p>
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form">
                            <div class="input-group">
                                <input required type="" name="seat_count" id="seat_count" class="form-control @error('seat_count') input-error @enderror" value="{{ old('seat_count') }}">
                                <label for="seat_count">Số chỗ ngồi</label>
                            </div>
                            @error('seat_count')
                                <div class="error-message">
                                    <ion-icon name="alert-circle-outline"></ion-icon>
                                    <p>{{ $message }}</p>
                                </div>
                            @enderror
                        </div>
                        <div class="form">
                            <div class="input-group">
                                <input required type="text" name="price_per_day" id="price_per_day" class="form-control @error('price_per_day') input-error @enderror" value="{{ old('price_per_day') }}">
                                <label for="price_per_day">Giá thuê một ngày</label>
                            </div>
                            @error('price_per_day')
                                <div class="error-message">
                                    <ion-icon name="alert-circle-outline"></ion-icon>
                                    <p>{{ $message }}</p>
                                </div>
                            @enderror
                        </div>
                        <div id="quantity-remaining_quantity">
                            <div class="form">
                                <div class="input-group">
                                    <input required type="number" name="quantity" id="quantity" class="form-control @error('quantity') input-error @enderror" value="{{ old('quantity') }}">
                                    <label for="quantity">Số lượng</label>
                                </div>
                                @error('quantity')
                                    <div class="error-message">
                                        <ion-icon name="alert-circle-outline"></ion-icon>
                                        <p>{{ $message }}</p>
                                    </div>
                                @enderror
                            </div>
                            <div class="form">
                                <div class="input-group">
                                    <input required type="number" name="remaining_quantity" id="remaining_quantity" class="form-control @error('remaining_quantity') input-error @enderror" value="{{ old('remaining_quantity') }}">
                                    <label for="remaining_quantity">Số lượng có sẵn</label>
                                </div>
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
                                <input required type="file" name="image_url" id="image_url" accept="image/*">
                        </div>
                        <div class="form">
                            <div class="input-group textarea-group">
                                <textarea required type="text" name="description" id="description" rows="10" cols="80" class="form-control @error('description') input-error @enderror" value="{{ old('description') }}"></textarea>
                                <label for="description">Mô tả</label>
                            </div>
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
                        <div id="btnAddCar">
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
        </div>
    </div>
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
         document.addEventListener('DOMContentLoaded',() =>{
            let bookCar = document.getElementById('bookCar')
            let divAddCar = document.getElementById('divAddCar')
            const menuItems = document.querySelectorAll('.menu-item')
            const all = document.getElementById('all');
            const bookingBrowsing = document.getElementById('bookingBrowsing');
            const overdueBookings = document.getElementById('overdueBookings');
            menuItems.forEach(item => {
                item.addEventListener('click',() => {
                    all.style.display = "none"
                    bookingBrowsing.style.display = "none"
                    overdueBookings.style.display = "none"

                    if(item.id == 'menu-all' ){
                        all.style.display = "table"
                        bookCar.style.display = "block"
                        divAddCar.style.display = "none"
                        all.style.width = "100%"
                    }
                    else if(item.id == 'menu-bookingBrowsing'){
                        bookingBrowsing.style.display = "table"
                        bookCar.style.display = "block"
                        divAddCar.style.display = "none"
                        bookingBrowsing.style.width = "100%"
                    }
                    else if(item.id == 'menu-overdueBookings'){
                        overdueBookings.style.display = "table"
                        bookCar.style.display = "block"
                        divAddCar.style.display = "none"
                        overdueBookings.style.width = 100 + "%"
                    }


                })
            })
        })
        //
        function setActive(element) {
            // Bỏ class 'active' khỏi tất cả các div
            document.querySelectorAll(".menuClass").forEach(box => {
                box.classList.remove("active");
            });

            // Thêm class 'active' vào div được click
            element.classList.add("active");
        }
        //xử lí ấn nút thêm xe, xóa phần đơn đặt hàng
        let bookCar = document.getElementById('bookCar')
        let addCar = document.getElementById('addCar')
        let divAddCar = document.getElementById('divAddCar')
        addCar.addEventListener('click',() => {
            bookCar.style.display = 'none'
            divAddCar.style.display = 'block'
        })
        //lưu trạng thái form trước khi commit
        document.addEventListener("DOMContentLoaded", function () {
        // Khi bấm vào "Thêm xe", lưu trạng thái vào sessionStorage
        document.getElementById("addCar").addEventListener("click", function () {
            sessionStorage.setItem("activeForm", "addCar");
        });

        // Khi bấm vào nút khác, xóa trạng thái form đã lưu
        document.querySelectorAll(".menuClass").forEach(item => {
            item.addEventListener("click", function () {
                if (this.id !== "addCar") {
                    sessionStorage.removeItem("activeForm");
                }
            });
        });

        // Kiểm tra sessionStorage khi trang tải lại
        if (sessionStorage.getItem("activeForm") === "addCar") {
            document.getElementById("divAddCar").style.display = "block";
            document.getElementById("bookCar").style.display = "none";
        }
    });
        document.addEventListener("DOMContentLoaded", function () {
            @if(session('activeForm') == 'addCar')
                document.getElementById("divAddCar").style.display = "block";
                document.getElementById("bookCar").style.display = "none";
            @endif
        });
        document.addEventListener("DOMContentLoaded", function () {
    // Khi bấm vào menu item, lưu ID của menu vào sessionStorage
    document.querySelectorAll(".menuClass").forEach(item => {
        item.addEventListener("click", function () {
            sessionStorage.setItem("activeMenu", this.id);
        });
    });

    // Nếu form bị lỗi và Laravel trả về activeForm = 'addCar'
    @if(session('activeForm') == 'addCar')
        sessionStorage.setItem("activeMenu", "addCar");
    @endif

    // Xử lý class active khi load lại trang
    let activeMenu = sessionStorage.getItem("activeMenu");
    if (activeMenu) {
        document.querySelectorAll(".menuClass").forEach(item => item.classList.remove("active"));
        let activeElement = document.getElementById(activeMenu);
        if (activeElement) {
            activeElement.classList.add("active");
        }
    }
});
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

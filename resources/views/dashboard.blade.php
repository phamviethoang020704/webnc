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
            z-index: 3;
        }
        #profile-logout>div{
            position: absolute;
            bottom: -90px;
            right: 0;
            /* display: flex; */
            flex-direction: column;
            justify-content: start;
            border:1px solid #e5e7eb;
            box-shadow: 0 0 15px #e5e7eb;
            height: 90px;
            width: 150px;
            display: none;
        }
        #user-booking{
            z-index: 2;
            margin-top: 50px;
        }
        hr{
            z-index: 2;
        }
        #img-info{
            display: flex;
        }
        #img-info p{
            line-height: 16px;
            height: 25px;
        }
        #booking-items{
            height: 200px;
        }
        #booking-items img{
            width: 160px;
            height: 90px;
            margin-right: 10px;
        }
        #bold{
            font-weight: bold;
        }
        #edit-delete{
            display: flex;
            gap: 15px;
            margin-top: 10px;
        }
        #edit-delete a{
            color: black;
            background-color: #5CB85C;
            text-decoration: none;
            padding: 5px;
        }
        #edit-delete button{
            color: white;
            background-color: #FA4226;
            border: none;
            padding: 5px;
            cursor: pointer;
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
    <div id="user-booking">
        <h3>Đơn hàng của bạn:</h3>
        <hr>
        @if($bookings->isEmpty())
            <p>bạn chưa có đơn hàng nào.</p>
        @else
            <div id="booking-item">
                @foreach($bookings as $booking)
                <div id="booking-items">
                    <div id="img-info">
                        <img src="{{ $booking->car ? asset('storage/' . $booking->car->image_url) : asset('default-image.png') }}" alt="{{ $booking->car->name ?? 'No car assigned' }}">
                        <div>
                            <p><span id="bold">Hãng xe:</span> {{ $booking->car?->trademark ?? 'Không xác định' }}</p>
                            <p><span id="bold">Xe:</span> {{ $booking->car->name ?? 'N/A' }}</p>
                            <p><span id="bold">Tổng giá thuê:</span>   {{ number_format($booking->total_price) }} VND</p>
                            <p><span id="bold">trạng thái:</span>
                                @if ($booking->browsing_status)
                                    Đơn hàng của bạn Đã được duyệt
                                @else
                                    Đơn hàng của bạn Chưa được duyệt
                                @endif
                            </p>
                        </div>
                    </div>
                    <div id="edit-delete">
                        <a href="{{Route('booking.edit',$booking->id)}}">Sửa đơn hàng</a>
                        <form action="{{route('booking.destroy', $booking->id)}}" method="POST" onsubmit="return confirm('Ban co chac muon xoa don thue xe nay?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Xóa đơn hàng</button>
                        </form>
                    </div>
                </div>
                    <hr>
                @endforeach
            </div>
        @endif
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
    </script>
</body>
</html>

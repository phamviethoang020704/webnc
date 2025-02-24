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
        #header-main{
            border-bottom: 2px solid #FA4226;
            padding-bottom: 3px;
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
        }
        #table-menu{
            position: relative;
        }
        #table-menu ion-icon{
            font-size: 40px;
            margin: 30px 30px 0;
            cursor: pointer;
        }
        #table-menu-content{
            position: absolute;
            width: 200px;
            height: 120px;
            border:1px solid #e5e7eb;
            box-shadow: 0 0 15px #e5e7eb;
            z-index: 2;
            bottom: -120px;
            left: 10px;
            display: none;
            flex-direction: column;
            background-color: white;
        }
        #table-menu-content h2{
            height: 40px;
            font-size: 15px;
            padding: 5px;
            cursor: pointer;
            display: flex;
            align-items: center;
        }
        #table-menu-content h2:hover{
            background-color: #F3F4F6;
        }
        .booking-table{
            margin-top: 50px;
            border: 1px solid black;
            width: 100%;
            table-layout: fixed;

        }
        th,td{
            border: 1px solid black;
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
    </style>
</head>
<body>
    <div id="header">
        <div id="header-left" onclick="window.location.href='http://127.0.0.1:8000/';" style="cursor: pointer">
            <ion-icon name="car-sport"></ion-icon>
            <h3>Car Rental</h3>
        </div>
        <ul id="header-menu">
            <li><a id="header-main" href="{{route('admin.index')}}">Đơn thuê xe</a></li>
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
    <div id="table-menu">
        <ion-icon name="menu-outline"></ion-icon>
        <div id="table-menu-content">
            <h2 id="menu-all" class="menu-item">Tất cả</h2>
            <h2 id="menu-bookingBrowsing" class="menu-item">Đơn chưa duyệt</h2>
            <h2 id="menu-overdueBookings" class="menu-item">Đơn chưa trả xe</h2>
        </div>
    </div>
    <table id="all" class="booking-table">
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
        @foreach ($bookings as $booking)
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
    </table>











    <table id="bookingBrowsing" class="booking-table">
        <tr>
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

        //ẩn hiện menu bảng danh sách xe
        tableMenu = document.getElementById("table-menu");
        tableMenuContent = document.getElementById("table-menu-content");
        tableMenuContent.style.display = "none";
        tableMenu.addEventListener("click",(e) => {
            e.stopPropagation();
            tableMenuContent.style.display = tableMenuContent.style.display === "none" ? "flex" : "none";
        })
        document.addEventListener("click",(e) => {
            if(tableMenuContent.style.display === 'flex')
            tableMenuContent.style.display = 'none';
        })
        //bắt sự kiện kick vào menu loại đơn đặt xe
        document.addEventListener('DOMContentLoaded',() =>{
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
                        all.style.width = "100%"
                    }
                    else if(item.id == 'menu-bookingBrowsing'){
                        bookingBrowsing.style.display = "table"
                        bookingBrowsing.style.width = "100%"
                    }
                    else if(item.id == 'menu-overdueBookings'){
                        overdueBookings.style.display = "table"
                        overdueBookings.style.width = 100 + "%"
                    }


                })
            })
        })

    </script>
</body>
</html>

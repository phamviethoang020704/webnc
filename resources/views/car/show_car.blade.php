<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Rental</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link rel="icon" type="image/x-icon" href="{{ asset('images/favicon (1).ico') }}">
    <style>
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            font-family: sans-serif;
            position: relative;
            scrollbar-width: thin;
            scrollbar-color: #ff4d30 #fff;
        }
        #header{
            display: flex;
            justify-content: space-between;
            padding: 20px;
            width: 100%;
            height: 412px;
            position: relative;
            background-image: url('{{ asset('storage/vehicels/heroes-bg.png') }}');
        }
        #header-overlay{
            position: absolute;
            top: 0;
            right: 0;
            width: 100%;
            height: 412px;
            background-color: white;
            opacity: 0.9;
            z-index: 1;
        }
        #header-left{
            display: flex;
            justify-content: center;
            z-index: 10;
        }
        #header-left h3{
            /* color: #5937E0; */
            padding-top: 5px;
            padding-left: 5px;
            font-size: 20px;
            font-weight: bold;
        }
        #header-left ion-icon{
            color:#FA4226;
            font-size: 30px;
            margin-right: 5px;

        }
        #header-menu li{
            margin: 0 20px;
            z-index: 99;
            font-size: 20px;
            list-style: none;
            color: black;
        }
        #header-menu a{
            text-decoration: none;
            color: black;
            font-weight: bold;
        }
        #header-menu a:hover{
            color: #FA4226;
        }
        #header-menu{
            display: flex;
        }
        #header-menu-main{
            border-bottom: 3px solid #FF4D30;
            padding-bottom: 3px;
        }
        #Login-Register{
            z-index: 100;
        }
        .register{
            text-decoration: none;
            background: #FA4226;
            margin: 10px;
            padding: 10px;
            border-radius: 10px;
            color: white;
            font-size: 20px;
            box-shadow: 0 0 15px #FA4226;
        }
        .register:hover{
            background-color: #df2d12;
            box-shadow: 0 0 15px #df2d12;
        }
        .login{
            text-decoration: none;
            color: black;
            font-size: 20px;
        }
        .login:hover{
            color: #FA4226;
        }
        #account{
            background: #FA4226;
            font-size: 20px;
            text-decoration: none;
            color: white;
            border-radius: 10px;
            padding: 5px;
            margin-left: 30px;
        }
        #header-content{
            position: absolute;
            top: 150px;
            left: 70px;
            z-index: 3;
            height: auto;
        }
        #header-content a{
            text-decoration: none;
            color: black;
            cursor: pointer;
            width: 50px;
            height: 30px;
            border: 1px solod black;
        }
        #menu-icon-responsive{
            display: none;
            font-size: 30px;
            color: #df2d12;
            cursor: pointer;
        }
        #header-menu-responsive{
            opacity: 0;
            visibility: hidden;
            transition: opacity 0.3s ease;
            width: 100%;
            height: 100%;
            z-index: 1000;
            position: fixed;
            top: 0;
            right: 0;
            background-color: rgba(0, 0, 0, 0.5);
        }
        #header-menu-responsive-2{
            padding-top: 30px;
            padding-left: 20px;
            top: 0;
            right: -100%;
            background-color: white;
            z-index: 1001;
            height: 100%;
            width: 40%;
            position: fixed;
            transition: right 0.3s ease;
        }
        #header-menu-responsive-2 li{
            list-style: none;
            margin:10px;
        }
        #header-menu-responsive-2 li>a{
            text-decoration: none;
            color: black;
            font-size: 20px;
        }
        #header-menu-responsive-2 li>a:hover{
            color: #FA4226;
        }
        #header-menu-responsive-2 ul{
            display: flex;
            flex-direction: column;
        }
        #Login-Register-responsive{
            display: flex;
            flex-direction: column;
            flex-wrap: wrap;
        }
        .login-responsive{
            background-color: black;
            color: white;
            padding: 15px 50px;
            border-radius: 10px;
            width: 80%;
            position: absolute;
            top: 95px;
            left: 50%;
            transform: translate(-60%, -50%);
            text-decoration: none;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .register-responsive{
            background-color: #FF4D30;
            color: white;
            padding: 15px 50px;
            border-radius: 10px;
            width: 80%;
            position: absolute;
            top: 30px;
            left: 50%;
            transform: translate(-60%, -50%);
            text-decoration: none;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        #header-content{
            position: absolute;
            top: 150px;
            left: 60px;
            z-index: 10;
        }
        #header-content h1{
            font-size: 40px;
        }
        #header-content h2{
            font-size: 20px;
            margin-top: 10px;
            font-weight: bold;
        }
        #header-content a{
            text-decoration: none;
            color: black;
            cursor: pointer;
        }
        #header-content a:hover{
            color: #FA4226;
        }


        .menu {
            display: flex;
            justify-content: space-between;
            margin: 60px 0 20px;
            padding: 0 30px;
        }
        .menu a {
            text-decoration: none;
            padding: 5px 5px;
            border-radius: 5px;
            border: 1px solid #ccc;
            color: #000;
            background-color: #f8f9fa;
            transition: all 0.3s;
            width: 9vw;
            height: 40px;
            font-size: 13px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .menu a.active {
            background-color: #FF4D30;
            color: #fff;
            font-weight: bold;
        }
        .menu a:hover {
            background-color: #FF4D30;
            color: #fff;
        }
        #car-list{
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            width: calc(100% - 40px);
            margin: 0 auto;
            padding: 0 30px;
        }
        .car-item {
            flex: 0 1 calc((100% - 40px) / 3);
            border: 1px solid #ddd;
            border-radius: 5px;
            box-sizing: border-box;
            height: 400px;
            position: relative;
        }
        #car-item-1{
            display: flex;
            justify-content: space-between;
            padding: 0 10px;
        }
        .car-item-1 p{
            color: #FF4D30;
        }
        .car-item-1 h2, .car-item-1 h3{
            font-size: 15px;
        }
        .car-item a{
            text-decoration: none;
            color: white;
            background-color: #FF4D30;
            padding: 10px 15px;
            border-radius: 10px;
            width: 50%;
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            text-align: center;
            margin-top: 20px;
            bottom: 10px;
        }
        .car-item img {
            width: 100%;
            height: 250px;
            border-radius: 5px;
            margin-bottom: 20px;
        }
        .pagination {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 10px;
            margin-top: 20px;
        }

        .pagination a {
            text-decoration: none;
            padding: 8px 12px;
            border: 1px solid #ccc;
            border-radius: 5px;
            color: #333;
            transition: background-color 0.3s, color 0.3s;
        }

        .pagination a:hover {
            background-color: #FF4D30;
            color: #fff;
        }

        .pagination .active {
            padding: 8px 12px;
            border: 1px solid #FF4D30;
            border-radius: 5px;
            background-color: #FF4D30;
            color: #fff;
            font-weight: bold;
        }

        .pagination .disabled {
            padding: 8px 12px;
            color: #999;
            border: 1px solid #ccc;
            border-radius: 5px;
            cursor: not-allowed;
            background-color: #f9f9f9;
        }

        .pagination .dots {
            padding: 8px 12px;
            color: #999;
            border: none;
            background: transparent;
            font-size: 14px;
            cursor: default;
        }
        #book-a-car{
            background-color: #282828;
            width: 100%;
            height: auto;
            line-height: 130px;
            text-align: center;
            margin-top: 60px;
            display: flex;
            align-items: center;
        }
        #book-a-car-text{
            color: white;
            font-size: 3vw;
        }
        #phone-number-1{
            color: #FF4D30;
            margin-left: 20px;
            /* font-style: 3vw; */
        }
        #phone-number-1 ion-icon{
            /* font-style: 5px; */
        }

        #phone-number{
        position: relative;
    }
    #tooltip {
        position: absolute; /* Đặt vị trí cố định */
        width: 140px;
        bottom: 70%;
        font-size: 14px;
        left: 50%;
        transform: translateX(-50%);
        background-color: #FA4226;
        color: white;
        display: flex;
        text-align: center;
        justify-content: center;
        line-height: 30px;
        opacity: 0;
        transition: opacity 0.3s ease;    }
    #tooltip-arrow{
        position: absolute;
        top: 100%; /* Đặt mũi tên ở dưới */
        left: 50%;
        transform: translateX(-50%);
        width: 0;
        height: 0;
        border-left: 6px solid transparent;
        border-right: 6px solid transparent;
        border-top: 6px solid #FA4226; /* Màu của tooltip */
    }


        #footer{
            display: flex;
            margin-top: 70px;
            flex-wrap: wrap;
            justify-content: space-between;
        }
        #footer-1,#footer-2,#footer-3,#footer-4{
            flex-basis: 20%;
            padding: 20px;
            box-sizing: border-box;
        }
        #footer a{
            text-decoration: none;
            color: black;
        }
        #footer li{
            list-style: none;
        }
        #footer-1 p{
            color: #888888;
            line-height: 25px;
            margin:15px 0;
            font-size: 15px;
        }
        #footer-1 h4{
            font-size: 15px;
        }
        #footer-1 h3{
            margin: 15px 0;
            font-size: 15px;
        }
        #footer-2 li{
            margin: 20px 0;
            font-size: 15px;
        }
        #footer-2 a:hover{
            color: #FF4D30;
        }
        #footer-2 ul{
            margin: 0;padding: 0;
            list-style: none;
        }
        #footer-3 p{
            margin: 20px 0;
            font-size: 15px;
        }
        #footer-4{
            display: flex;
            flex-direction: column;
        }
        #footer-4 p{
            font-size: 20px;
            margin: 20px 0;
        }
        #footer-4 input{
            padding: 15px 40px;
            background-color:#ECECEC;
            border: none;
            outline: none;
            font-size: 15px;
        }
        #footer-4 button{
            cursor: pointer;
            background-color:#FF4D30;
            border:none;
            margin-top: 10px;
            line-height: 30px;
            padding: 7px 15px;
            color: white;
            font-size: 15px;
        }
        #menu-responsive{
                display: none;
            }
            .menu-responsive{
                display: none;
            }
        @media screen and (max-width: 1200px){
                #header-menu{
                    display: none;
                }
                #Login-Register{
                    display: none;
                }
                .register{
                    margin-top: 10px;
                }
                #footer-1,#footer-2,#footer-3,#footer-4{
                    flex-basis: 50%;
                }
                #menu-icon-responsive{
                    display: block;
                    z-index: 1000;
                }
            }
            @media screen and (max-width: 992px){
                .car-item{
                    flex: 0 1 calc((100% - 40px) / 2);
                }
            }
            @media screen and (max-width: 768px){
                #footer-1,#footer-2,#footer-3,#footer-4{
                    flex-basis: 100%;
                }
                .car-item{
                    flex: 0 1 calc((100% - 40px) / 1);
                    width: 60% ;
                }
                #menu-responsive{
                    display: block;
                }
                .menu{
                    display: none;
                }
            }

            #scrollToTop{
                display: none;
                width: 40px;
                height: 40px;
                border-radius: 50%;
                background-color: #FA4226;
                color: white;
                position: fixed;
                bottom: 30px;
                right: 30px;
                z-index: 1003;
                border: none;
                cursor: pointer;
            }
            #scrollToTop:hover{
                background-color: #df2d12;
            }

            #car-cartegory{
                display: flex;
                align-items: center;
                background-color: #FA4226;
                width: 116px;
                margin: 30px 5px 20px;
                cursor: pointer;
                user-select: none;
                height: auto;
                border: 2px solid #ddd;
            }
            #car-cartegory h1{
                color: white;
                font-size: 15px;
                padding: 5px 5px 5px 5px;
                width: 100px;
                text-decoration: underline;
                text-underline-offset: 4px;
                text-decoration-thickness: 2px;
                text-decoration-color: white;
            }
            #car-cartegory span{
                text-decoration:none;
                text-decoration-color: none;
                color: white;
                border: 2px solid white;
                width: 15px;
                display: flex;
                justify-content: center;
                height: 34px;
            }
            #menu-responsive{
                position: relative;
            }
            .menu-responsive{
                position: absolute;
                bottom: -250px;
                left: 30px;
                height: 250px;
                display: flex;
                flex-direction: column;
                z-index: 5;
                background-color: rgba(0, 0, 0, 0.5);
                padding: 10px 20px;
            }
            .menu-responsive a{
                color: white;
                text-decoration: none;
                border-bottom: 3px solid transparent;
            }
            .menu-responsive a:hover{
                border-bottom-color: #FA4226;
                color: #FA4226;
            }





    </style>
</head>
<body>
    <div id="header">
        <div id="header-overlay"></div>
        <div id="header-left" onclick="window.location.href='http://127.0.0.1:8000/';" style="cursor: pointer">
            <ion-icon name="car-sport"></ion-icon>
            <h3>Car Rental</h3>
        </div>
        <ul id="header-menu">
            <li><a href="/">Trang chủ</a></li>
            <li><a href="/car" id="header-menu-main">Phương tiện</a></li>
            <li><a href="/feedback">Phản hồi</a></li>
            <li><a href="/about">Giới thiệu</a></li>
            <li><a href="/contact">Liên hệ</a></li>
        </ul>
        <div id="Login-Register">
            @if (Route::has('login'))
                <div>
                    @auth
                        @if (Auth::user()->role === 'admin')
                            <a id="account" href="{{ url('/admin') }}">Trang quản trị</a>
                        @else
                            <a id="account" href="{{ url('/dashboard') }}">Tài khoản</a>
                        @endif
                    @else
                        <a class="login" href="{{ route('login') }}">Đăng nhập</a>

                        @if (Route::has('register'))
                            <a class="register" href="{{ route('register') }}">Đăng ký</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
        <ion-icon id="menu-icon-responsive" name="grid-outline"></ion-icon>

    </div>
    <div id="header-content">
        <h1>Phương tiện</h1>
        <h2><a href="/">Trang chủ</a> / Phương tiện</h2>
    </div>
<div id="header-menu-responsive"></div>
<div id="header-menu-responsive-2">
    <ul>
        <li><a href="/">Trang chủ</a></li>
        <li><a href="/car">Phương tiện</a></li>
        <li><a href="/feedback">Phản hồi</a></li>
        <li><a href="/about">Giới thiệu</a></li>
        <li><a href="/contact">Liên hệ</a></li>
    </ul>
    <div id="Login-Register-responsive">
        @if (Route::has('login'))
            <div>
                @auth
                    @if (Auth::user()->role === 'admin')
                        <a id="account" href="{{ url('/admin') }}">Trang quản trị</a>
                    @else
                        <a id="account" href="{{ url('/dashboard') }}">Tài khoản</a>
                    @endif
                @else
                    <a class="login-responsive" href="{{ route('login') }}">Đăng nhập</a>

                    @if (Route::has('register'))
                        <a class="register-responsive" href="{{ route('register') }}">Đăng ký</a>
                    @endif
                @endauth
            </div>
        @endif
    </div>
</div>

        <!-- Mục lọc -->
        <div class="menu">
            <a href="{{ route('car.index', ['trademark' => 'all']) }}" class="{{ request('trademark') == 'all' || !request('trademark') ? 'active' : '' }}">
                Tất cả
            </a>
            @foreach ($trademarks as $item)
                <a href="{{ route('car.index', ['trademark' => $item]) }}" class="{{ request('trademark') == $item ? 'active' : '' }}">
                    {{ $item }}
                </a>
            @endforeach
        </div>





        <div id="menu-responsive">
            <div id="car-cartegory">
                <h1>Chọn loại xe </h1>
                <span>↓</span>
            </div>
            <div class="menu-responsive">
                <a href="{{ route('car.index', ['trademark' => 'all']) }}" class="{{ request('trademark') == 'all' || !request('trademark') ? 'active' : '' }}">
                    Tất cả
                </a>
                @foreach ($trademarks as $item)
                    <a href="{{ route('car.index', ['trademark' => $item]) }}" class="{{ request('trademark') == $item ? 'active' : '' }}">
                        {{ $item }}
                    </a>
                @endforeach
            </div>
        </div>




        <!-- Danh sách xe -->
        <div id="car-list">
            @forelse ($cars as $car)
            <div class="car-item">
                <img src="{{ asset('storage/' . $car->image_url) }}" alt="{{ $car->name }}">
                <div id="car-item-1">
                    <div class="car-item-1">
                        <h3>{{ $car->name }}</h3>
                        <p>{{ $car->trademark }}</p>
                    </div>
                    <div class="car-item-1">
                        <h2>{{number_format($car->price_per_day, 0, ',', '.')}} VND</h2>
                        <p>/ Ngày</p>
                    </div>
                </div>

                <a href="/car/show/{{$car->id}}">Xem chi tiết</a>
            </div>
            @empty
                <p class="text-center">Không có xe nào.</p>
            @endforelse
        </div>


        <div class="pagination">
            @if ($cars->onFirstPage())
                <span class="disabled">← Trước</span>
            @else
                <a href="{{ $cars->previousPageUrl() }}" class="page-link">← Trước</a>
            @endif

            {{-- Trang đầu tiên --}}
            @if ($cars->currentPage() > 2)
                <a href="{{ $cars->url(1) }}" class="page-link">1</a>
                @if ($cars->currentPage() > 3)
                    <span class="dots">...</span>
                @endif
            @endif

            {{-- Các trang lân cận --}}
            @foreach (range(max(1, $cars->currentPage() - 1), min($cars->lastPage(), $cars->currentPage() + 1)) as $page)
                @if ($page == $cars->currentPage())
                    <span class="active">{{ $page }}</span>
                @else
                    <a href="{{ $cars->url($page) }}" class="page-link">{{ $page }}</a>
                @endif
            @endforeach

            {{-- Trang cuối cùng --}}
            @if ($cars->currentPage() < $cars->lastPage() - 1)
                @if ($cars->currentPage() < $cars->lastPage() - 2)
                    <span class="dots">...</span>
                @endif
                <a href="{{ $cars->url($cars->lastPage()) }}" class="page-link">{{ $cars->lastPage() }}</a>
            @endif

            @if ($cars->hasMorePages())
                <a href="{{ $cars->nextPageUrl() }}" class="page-link">Tiếp →</a>
            @else
                <span class="disabled">Tiếp →</span>
            @endif
        </div>
        <div id="book-a-car">
            <h1 id="book-a-car-text">Bạn muốn thuê xe? liên hệ với chúng tôi ngay bây giờ</h1>
            <div id="phone-number">
                <span id="phone-number-1" style="cursor: pointer;font-size:3vw;">
                    0123 567 789
                    <ion-icon name="copy-outline" style="font-size: 1.5vw"></ion-icon>
                </span>
                <div id="tooltip">
                    Sao chép thành công!
                    <div id="tooltip-arrow"></div>
                </div>
            </div>
        </div>
        <div id="footer">
            <div id="footer-1">
                <h1>Thuê xe</h1>
                <p>Chúng tôi cung cấp nhiều loại xe đáp ứng mọi nhu cầu lái xe của bạn. Chúng tôi có chiếc xe hoàn hảo để đáp ứng nhu cầu của bạn.</p>
                <h2>0123-456-789</h2>
                <h3>Lanh@gmail.com</h3>
                <h4>Thiết kế: Dao Lan Anh</h4>
            </div>
            <div id="footer-2">
                <h1>Công ty</h1>
                <ul>
                    <li><a href="#">Phòng trưng bày</a></li>
                    <li><a href="#">Sự nghiệp</a></li>
                    <li><a href="#">Điện thoại di động</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Cách chúng tôi làm việc</a></li>
                </ul>
            </div>
            <div id="footer-3">
                <h1>Thời gian làm việc</h1>
                <p>Thứ 2 - Thứ 6, từ 8 giờ sáng - 9 giờ tối</p>
                <p>Thứ 7: 8 giờ sáng - 7 giờ tối</p>
                <p>Chủ nhật: đóng cửa</p>
            </div>
            <div id="footer-4">
                <h1>Đăng ký</h1>
                <p>Đăng ký địa chỉ Email của bạn để nhận tin tức và cập nhật mới nhất.</p>
                <input type="text" placeholder="Nhập địa chỉ email">
                <button>Xác nhận</button>
            </div>
        </div>
        <button id="scrollToTop">↑</button>
    <script>
        const menuIconResponsive = document.getElementById("menu-icon-responsive")
            const headerMenuResponsive = document.getElementById("header-menu-responsive")
            const headerMenuResponsive2 = document.getElementById("header-menu-responsive-2")
            menuIconResponsive.addEventListener("click",() => {
                headerMenuResponsive.style.opacity = 1;
                headerMenuResponsive.style.visibility = "visible";
                menuIconResponsive.style.display = "none";
                headerMenuResponsive2.style.right = 0;
            })
            headerMenuResponsive.addEventListener("click",() => {
                headerMenuResponsive.style.opacity = 0;
                menuIconResponsive.style.display = "block";
                headerMenuResponsive2.style.right = -100 + "%";
                headerMenuResponsive.style.visibility = "hidden";
            })

            //
            const scrollToTop = document.getElementById("scrollToTop");
            window.onscroll = function(){
                if(document.body.scrollTop > 100 || document.documentElement.scrollTop > 100){
                    scrollToTop.style.display = "block";
                }
                else{
                    scrollToTop.style.display = "none";
                }
            }
            scrollToTop.addEventListener("click",() => {
                window.scrollTo({
                    top: 0,
                    behavior: "smooth",
                })
            })

            const carCartegory = document.getElementById("car-cartegory");
            const menuResponsive = document.querySelector(".menu-responsive");

            // Đặt menu mặc định ẩn
            menuResponsive.style.display = "none";

            carCartegory.addEventListener("click", (e) => {
                e.stopPropagation(); // Ngăn không cho sự kiện lan tới document
                menuResponsive.style.display = menuResponsive.style.display === "none" ? "flex" : "none";
            });

            // Khi click vào bất kỳ đâu trên document
            document.addEventListener("click", (e) => {
                if (menuResponsive.style.display === "flex") {
                    menuResponsive.style.display = "none";
                }
            });





//
        const phoneNumber1 = document.getElementById("phone-number-1");
        const tooltip = document.getElementById("tooltip");

        phoneNumber1.addEventListener("click", () => {
        const textToCopy = phoneNumber1.textContent.trim();

    // Sao chép số điện thoại
        navigator.clipboard.writeText(textToCopy)
        .then(() => {
            tooltip.style.opacity = 1;
            setTimeout(() => {
                tooltip.style.opacity = 0;
            }, 700);
        })
        .catch(err => {
            console.error("Không thể sao chép: ", err);
        });
});


    </script>
</body>
</html>

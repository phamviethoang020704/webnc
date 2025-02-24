<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Car Rental</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
        <link rel="icon" type="image/x-icon" href="{{ asset('images/favicon (1).ico') }}">
        <style>
            *{
                margin: 0;
                padding: 0;
                box-sizing: border-box;
                font-family: sans-serif;
                position: relative;
                scrollbar-width: thin;
                scrollbar-color: #ff4d30 #fff;
            }
            #header{
                position: relative;
                display: flex;
                justify-content: space-between;
                padding: 20px;
                background-color: #F8F8F8;
                height: 870px;
                width: 100%;
            }
            #header-left{
                display: flex;
                justify-content: center;
            }
            #header-left h3{
                /* color: #5937E0; */
                padding-top: 5px;
                padding-left: 5px;
                font-size: 20px;
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
            #header-image{
                position: absolute;
                top: 0;
                right: 0;
            }
            #main-car{
                position: absolute;
                top: 140px;
                right: 0;
                width: 650px;
                height: 650px;
            }
            #main-car>img{
                width: 100%;
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
            }
            #hero-content{
                position: absolute;
                top: 170px;
                left: 50px;
            }
            #hero-content p{
                width: 400px;
                margin: 30px 0 50px;
                font-size: 15px;
            }
            #hero-content h2{
                font-size: 40px;
                margin: 10px 0;
                width: 500px;
            }
            #hero-content h1{
                font-size: 1.5vw;
            }
            #book-ride{
                text-decoration: none;
                color:white;
                background-color: #FA4226;
                padding: 15px;
                margin: 20px 20px 20px 0;
                font-size: 15px;
                box-shadow: 0 0 15px #FA4226;
            }
            #book-ride:hover{
                background-color: #df2d12;
                box-shadow: 0 0 15px #df2d12;
            }
            #learn-more{
                text-decoration: none;
                color: white;
                background-color: black;
                padding: 15px;
                font-size: 15px;
            }
            #learn-more:hover{
                background-color: white;
                color: black;
                border: 1px solid black;
            }
            #home-menu-accordion{
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                height: auto;
            }
            #home-menu-accordion h1{
                font-size: 20px;
                margin-top: 30px;
            }
            #home-menu-accordion h2{
                font-size: 3vw;
                margin: 10px 0 15px;
            }
            #home-menu-accordion p{
                color: #888888;
                width: 50%;
                font-size: 15px;
                text-align: center;
            }
            #home-menu-accordion-2{
                height: 650px;
                position: relative;
            }
            #accordion-car{
                position: absolute;
                left: 0;
                top: 0;
                z-index: 1;
            }
            #accordion-content{
                z-index: 2;
                width: 70%;
                position: absolute;
                left: 15%;
                background-color: white;
                box-shadow: 0 10px 15px 0 rgba(255,83,48,.35);
                padding-bottom: 30px;
            }
            #accordion-header-1{
                background-color: #FF4D30;
                color: white;
                transition: background-color 0.3s ease;
                padding: 20px 30px;
                cursor: pointer;
                margin: 15px 0;
                font-size: 20px;
            }
            #accordion-content-1{
                font-size: 15px;
                color: #888888;
                max-height: 0px;
                overflow: hidden;
                transition: max-height 0.5s ease;
                padding: 0px 40px;
            }
            #accordion-header-2,#accordion-header-3{
                background-color: white;
                color: black;
                transition: background-color 0.3s ease;
                padding: 20px 30px;
                cursor: pointer;
                margin: 15px 0;
                font-size: 20px;
            }
            #accordion-content-2,#accordion-content-3{
                font-size: 15px;
                color: #888888;
                transition: max-height 0.5s ease;
                max-height: 0px;
                overflow: hidden;
                padding: 0 40px;
            }
            #car-features{
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                height: 250px;
            }
            #car-features h1{
                font-size: 20px;
            }
            #car-features h2{
                font-size: 50px;
            }
            #car-features-2{
                display: flex;
                padding: 20px;
                flex-wrap: wrap;
            }
            .car-features{
                flex-basis: 33%;
                text-align: center;
                padding: 20px;
            }
            .car-features ion-icon{
                font-size: 50px;
                color: #FA4226;
            }
            .car-features h1{
                margin: 20px 0;
            }
            .car-features p{
                padding: 0 82px;
                color: #888888;
                font-size: 15px;
            }
            #view-all{
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                height: 250px;
                margin-top: 100px;
            }
            #view-all h1{
                font-size: 20px;
            }
            #view-all h2{
                font-size: 50px;
                margin: 10px 0 20px;
            }
            #view-all p{
                font-size: 15px;
                color: #2D2D2D;
            }
            #view-all-2 h1{
                margin-left: 40px;
                width: 350px;
                font-size: 30px;
            }
            #view-all-2 a{
                text-decoration: none;
                color: black;
                padding-right: 40px;
                font-size: 20px;
            }
            #view-all-2 a:hover{
                color: #FA4226;
            }
            #view-all-2{
                display: flex;
                justify-content: space-between;
            }
            #car-home{
                flex-wrap: wrap;
                display: flex;
                justify-content: space-between;
                margin-top: 20px;
                padding: 0 30px;
            }
            #car-home-content{
                flex-basis: 30%;
                width: 6vw;
                background-color: #FAFAFA;
                display: flex;
                flex-direction: column;
                align-items: center;
                height: 450px;
                border-radius: 10px;
                border: 1px solid #d3d3d3;
                margin: 10px 0;
            }
            #car-home-content a{
                text-decoration: none;
                background-color: #FA4226;
                padding: 3px 7px;
                width: 140px;
                height: 40px;
                border-radius: 10px;
                color: white;
                display: flex;
                justify-content: center;
                align-items: center;
                margin-top: 30px;
            }
            #car-home-content img{
                width: 100%;
                height: 250px;
                justify-content: center;
                margin-bottom: 30px;
                border-radius: 10px;
                object-fit: cover;
            }
            .car-home-content-1{
                display: flex;
                justify-content: space-between;
                padding: 10px 20px;
                width: 100%;
            }
            #trademark{
                color: black;
                font-size: 1.4vw;
                /* font-size: 15px; */
            }
            #name{
                /* font-size: 1.4vw; */
                font-size: 15px;
            }
            .car-home-content-2 p{
                color: #FA4226;
                font-size: 15px;
            }
            .car-home-content-2 h1{
                font-size: 15px;
            }
            #save-big{
                width: 100%;
                height: auto;
                background-color:#2D2D2D;
                margin-top: 20px;
                display: flex;
                flex-direction: column;
                align-items: center;
                padding: 25px 0;
            }
            #save-big h1{
                font-size: 3vw;
                color: white;
            }
            #save-big p{
                font-size: 2vw;
                color: whitesmoke;
            }
            #car-home-2{
                position: relative;
                height: 550px;
            }
            #lexus-home{
                position: absolute;
                top: 88px;
                left: -12px;
                width: 60%;
            }
            #audi-home{
                position: absolute;
                top: 40px;
                right: 100px;
                width: 40%;
            }
            #why-choose-us{
                display: flex;
                flex-wrap: wrap;
            }
            #why-choose-us-2{
                display: flex;
                flex-direction: column;
                flex-basis: 50%;
                padding-right: 40px;
            }
            #why-choose-us-1{
                flex-basis: 50%;
                padding: 30px 80px;
            }
            .why-choose-us-2{
                display: flex;
                padding: 30px;
            }
            #why-choose-us-1 h1{
                font-size: 50px;
                margin-top: 30px;
            }
            #why-choose-us-1 p{
                color: #888888;
                margin-top: 20px;
            }
            .why-choose-us-2 img{
                margin-right: 20px;
                font-size: 15px;
            }
            .why-choose-us-2 p{
                margin-top: 10px;
                color: #888888;
                font-size: 15px;
            }
            #reviewed-by-people{
                display: flex;
                flex-direction: column;
                align-items: center;
                background-color:#F8F8F8;
                padding: 50px 0;
            }
            #reviewed-by-people p{
                width: 50%;
                text-align: center;
                color: #888888;
                font-size: 15px;
            }
            #reviewed-by-people h2{
                margin: 15px 0 20px;
                font-size: 40px;
            }
            #review-by-people-2{
                display: flex;
                flex-wrap: wrap;
                padding: 0 100px 50px;
                background-color: #F8F8F8;
                height: auto;
                justify-content: space-between;

            }
            .review-by-people-2{
                flex-basis: 45%;
                display: flex;
                flex-direction: column;
                height: auto;
                padding: 30px;
                background-color: white;
                width: 40%;
                box-shadow: 10px 10px 20px rgba(0, 0, 0, 0.5);
            }
            .review-by-people-2 img{
                width: 90px;
                height: 90px;
                margin-right: 10px;
                border-radius: 50%;
            }
            .review-by-people-2 div{
                display: flex;
                align-items: center;
            }
            .review-by-people-2 p{
                width: 90%;
                margin-bottom: 10px;
                font-size: 1.5vw;
            }
            .review-by-people-2 h1{
                font-size: 1.5vw;
            }
            #download{
                display: flex;
                width: 100%;
                position: relative;
                background-color: #F8F8F8;
                min-height: 750px;
                margin-top: 20px;
            }
            #download-1{
                padding: 123px 40px 0;
                z-index: 10;
            }
            #download-1 h1{
                font-size: 50px;
                max-width: 600px;
                line-height: 80px;
            }
            #download-1 p{
                padding: 20px 0px 30px;
                max-width: 45%;
                line-height: 30px;
                color: #888888;
            }
            #download-2{
                position: absolute;
                top: 0;
                right: 0;
                z-index: 9;
            }
            #download-image{
                display: flex;
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
            #footer-1 h3{
                margin: 15px 0;
            }
            #footer-2 li{
                margin: 20px 0;
                font-size: 15px;
            }
            #footer-2 a:hover{
                color: #FF4D30;
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
                .car-features{
                    flex-basis: 50%;
                }
                #footer-1,#footer-2,#footer-3,#footer-4{
                    flex-basis: 50%;
                }
                #download-2 img{
                    display: none;
                }
                #download-1{
                    width: 80%;
                    position: absolute;
                    top: 50%;
                    left: 50%;
                    transform: translate(-50%, -50%);
                }
                #download-1 p{
                    min-width: 80%;
                }
                #menu-icon-responsive{
                    display: block;
                    z-index: 1000;
                }
                #main-car{
                    opacity: 0.2;
                }
            }
            @media screen and (max-width: 992px){
                #car-home-content{
                    flex-basis: 50%;
                }
                #header-image{
                    display: none;
                }
                #main-car{
                    display: none;
                }
                #hero-content{
                    top: 50%;
                    left: 50%;
                    transform: translate(-50%, -50%);
                }
                .car-features{
                    flex-basis: 100%;
                }
                #why-choose-us-1,#why-choose-us-2{
                    flex-basis: 100%;
                }

            }
            @media screen and (max-width: 768px){
                #car-home-content{
                    flex-basis: 100%;
                }
                .review-by-people-2{
                    flex-basis: 100%;
                    margin-top: 20px;
                }
                .review-by-people-2 p{
                    font-size: 1.7vw;
                }
                #footer-1,#footer-2,#footer-3,#footer-4{
                    flex-basis: 100%;
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
        </style>
    </head>
    <body>
        <div id="header">
            <div id="header-left" onclick="window.location.href='http://127.0.0.1:8000/';" style="cursor: pointer">
                <ion-icon name="car-sport"></ion-icon>
                <h3>Car Rental</h3>
            </div>
            <ul id="header-menu">
                <li><a href="/">Trang chủ</a></li>
                <li><a href="/car">Phương tiện</a></li>
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
            <div id="header-image">
                <img src="{{ asset('storage/cars-welcome/hero-bg.png') }}" alt="hero-bg">
            </div>
            <div id="main-car">
                <img src="{{ asset('storage/cars-welcome/main-car.png') }}" alt="main-car">
            </div>
            <div id="hero-content">
                <h1>Lên kế hoạch cho chuyến đi ngay!</h1>
                <h2>Tiết kiệm <plan style="color: #FA4226">lớn</plan> khi thuê xe của chúng tôi</h2>
                <p>Thuê chiếc xe mơ ước của bạn. Giá cạnh tranh nhất, số dặm không giới hạn, các lựa chọn đón khách linh hoạt và hơn thế nữa.</p>
                <a id="book-ride" href="\login">Đặt ngay</a>
                <a id="learn-more" href="\car">Xem tất cả</a>
            </div>
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
        <div id="car-features">
            <h1>Lên kế hoạch cho chuyến đi của bạn</h1>
            <h2>Thuê xe nhanh chóng & dễ dàng</h2>
        </div>
        <div id="car-features-2">
            <div class="car-features">
                <ion-icon name="navigate-outline"></ion-icon>
                <h1>Sẵn sàng</h1>
                <p>Sẵn sàng với nhiều lựa chọn phù hợp với nhu cầu của bạn.</p>
            </div>
            <div class="car-features">
                <ion-icon name="car-sport-outline"></ion-icon>
                <h1>Trải nghiệm tốt</h1>
                <p>đảm bảo sự thoải mái với không gian rộng rãi và tiện nghi hiện đại.</p>
            </div>
            <div class="car-features">
                <ion-icon name="bookmark-outline"></ion-icon>
                <h1>Giá cả hợp lý</h1>
                <p>cung cấp dịch vụ cho thuê xe với giá cả hợp lý và nhiều ưu đãi.</p>
            </div>
        </div>
        <div id="view-all">
            <h1>Các mẫu xe mới nhất</h1>
            <h2>Những hãng xe cho thuê của chúng tôi</h2>
            <p>Chọn từ nhiều loại phương tiện tuyệt vời của chúng tôi để thuê cho chuyến phiêu lưu hoặc chuyến công tác tiếp theo của bạn</p>
        </div>
        <div id="view-all-2">
            <h1>Hãy chọn chiếc xe phù hợp với bạn</h1>
            <a href="/car">Xem tất cả -></a>
        </div>
        <div id="car-home">
            @foreach ($cars as $car)
            <div id="car-home-content">
                <img src="{{ asset('storage/' . $car->image_url) }}" alt="{{ $car->name }}">
                <div class="car-home-content-1">
                    <div class="car-home-content-2">
                        <h1 id="trademark">{{$car->trademark}}</h1>
                        <p id="name">{{$car->name}}</p>
                    </div>
                    <div class="car-home-content-2">
                        <h1 style="font-size: 15px">{{ number_format($car->price_per_day, 0, ',', '.') }} VND</h1>
                        <p style="font-size: 1.5vw">/ ngày</p>
                    </div>
                </div>
                <a href="/car/show/{{$car->id}}">Xem chi tiết</a>
            </div>
            @endforeach
        </div>
        <div id="save-big">
            <h1>Tiết kiệm lớn với dịch vụ thuê xe giá rẻ của chúng tôi!</h1>
            <p>Hỗ trợ <span style="color: #FA4226"> 24/7</span></p>
        </div>
        <div id="car-home-2">
            <img id="lexus-home" src="{{ asset('storage/cars-welcome/lexus-home.png') }}" alt="lexus-home">
            <img id="audi-home" src="{{ asset('storage/cars-welcome/audi-home.png') }}" alt="audi-home">
        </div>
        <div id="why-choose-us">
            <div id="why-choose-us-1">
                <h2>Tại sao nên chọn chúng tôi</h2>
                <h1>Giao dịch có giá trị tốt nhất mà bạn từng tìm thấy</h1>
                <p>Khám phá những giao dịch tốt nhất mà bạn từng tìm thấy với những ưu đãi không thể tuyệt vời hơn của chúng tôi. Chúng tôi tận tâm cung cấp cho bạn giá trị tốt nhất cho số tiền bạn bỏ ra để bạn có thể tận hưởng các dịch vụ và sản phẩm chất lượng hàng đầu mà không phải tốn nhiều tiền. Các ưu đãi của chúng tôi được thiết kế để mang lại cho bạn trải nghiệm thuê xe tối ưu, vì vậy đừng bỏ lỡ cơ hội này</p>
            </div>
            <div id="why-choose-us-2">
                <div class="why-choose-us-2">
                    <img id="icon-1" src="{{ asset('storage/icon-home/icon1.png') }}" alt="icon-1">
                    <div>
                        <h1>Lái xe xuyên quốc gia</h1>
                        <p>Đưa trải nghiệm lái xe của bạn lên một tầm cao mới với những chiếc xe hàng đầu của chúng tôi cho chuyến phiêu lưu xuyên quốc gia của bạn.</p>
                    </div>
                </div>
                <div class="why-choose-us-2">
                    <img id="icon-2" src="{{ asset('storage/icon-home/icon2.png') }}" alt="icon-2">
                    <div>
                        <h1>Giá trọn gói</h1>
                        <p>Nhận mọi thứ bạn cần với một mức giá thuận tiện, minh bạch với chính sách giá trọn gói của chúng tôi.</p>
                    </div>
                </div>
                <div class="why-choose-us-2">
                    <img id="icon-3" src="{{ asset('storage/icon-home/icon3.png') }}" alt="icon-3">
                    <div>
                        <h1>Không có phí ẩn</h1>
                        <p>Tận hưởng sự yên tâm với chính sách không có phí ẩn của chúng tôi. Chúng tôi tin vào giá cả minh bạch và trung thực.</p>
                    </div>
                </div>
            </div>
        </div>
        <div id="reviewed-by-people">
            <h1>Đánh giá của khách hàng</h1>
            <h2>Lời chứng thực của khách hàng</h2>
            <p>Khám phá tác động tích cực mà chúng tôi đã tạo ra đối với khách hàng bằng cách đọc qua lời chứng thực của họ. Khách hàng của chúng tôi đã trải nghiệm dịch vụ và kết quả của chúng tôi và họ mong muốn chia sẻ những trải nghiệm tích cực của mình với bạn.</p>
        </div>
        <div id="review-by-people-2">
            <div class="review-by-people-2">
                <p>"Chúng tôi đã thuê một chiếc ô tô từ trang web này và đã có một trải nghiệm tuyệt vời! Việc đặt xe rất dễ dàng và giá thuê rất phải chăng. "</p>
                <div>
                    <img id="reviewed-by-people-donald-trump" src="{{ asset('storage/review-by-people-home/reviewed-by-people-donald-trump.jpg') }}" alt="reviewed-by-people-donald-trump">
                    <h1>Donald trump</h1>
                </div>
            </div>
            <div class="review-by-people-2">
                <p>"Chiếc xe ở tình trạng tốt và khiến chuyến đi của chúng tôi trở nên tuyệt vời hơn. Rất khuyến khích bạn chọn trang web cho thuê xe này!"</p>
                <div>
                    <img id="reviewed-by-people-putin" src="{{ asset('storage/review-by-people-home/reviewed-by-people-putin.jpg') }}" alt="reviewed-by-people-putin">
                    <h1>Putin</h1>
                </div>
            </div>
        </div>
        <div id="home-menu-accordion">
            <h1>FAQ</h1>
            <h2>Câu hỏi thường gặp</h2>
            <p>Câu hỏi thường gặp về quy trình đặt thuê xe trên trang web của chúng tôi: Câu trả lời cho những mối quan tâm và thắc mắc thường gặp.</p>
        </div>
        <div id="home-menu-accordion-2">
            <div id="accordion-car">
                <img id="car-faq" src="{{ asset('storage/cars-welcome/car-faq.png') }}" alt="car-faq.png">
            </div>
            <div id="accordion-content">
                <h1 id="accordion-header-1">Câu hỏi 1: Tôi cần giấy tờ gì để thuê xe?</h1>
                <p id="accordion-content-1">Để thuê xe tại trang web của chúng tôi, bạn cần chuẩn bị các giấy tờ cần thiết bao gồm giấy tờ tùy thân (CMND, CCCD hoặc hộ chiếu còn hiệu lực) và bằng lái xe hợp lệ tương ứng với loại xe bạn muốn thuê; trong trường hợp thuê xe tự lái, bằng lái xe phải đáp ứng các yêu cầu pháp lý, đảm bảo còn hiệu lực và phù hợp với quy định về phương tiện di chuyển.</p>
                <h1 id="accordion-header-2">Câu hỏi 2: Tôi có thể hủy đặt xe không? Có mất phí không?</h1>
                <p id="accordion-content-2">Bạn hoàn toàn có thể hủy đặt xe khi có sự thay đổi về kế hoạch; tuy nhiên, việc có mất phí hay không sẽ phụ thuộc vào thời điểm bạn thực hiện yêu cầu hủy, bởi nếu hủy đúng thời hạn quy định trong chính sách của chúng tôi thì bạn sẽ không phải chịu bất kỳ khoản phí nào, còn nếu hủy sát giờ hoặc sau thời hạn đã thỏa thuận thì có thể áp dụng mức phí hủy theo quy định; vui lòng tham khảo chi tiết chính sách hoặc liên hệ đội ngũ hỗ trợ để được hướng dẫn cụ thể.</p>
                <h1 id="accordion-header-3">Câu hỏi 3: Giá thuê xe đã bao gồm xăng chưa?</h1>
                <p id="accordion-content-3">Giá thuê xe hiển thị trên trang web của chúng tôi chưa bao gồm chi phí xăng; chúng tôi bàn giao xe với bình xăng đầy để đảm bảo sự tiện lợi tối đa cho khách hàng và mong muốn nhận lại xe trong tình trạng bình xăng tương tự; nếu có thắc mắc, bạn có thể liên hệ trực tiếp để được giải đáp thêm về chính sách liên quan đến nhiên liệu.</p>
            </div>
        </div>
        <div id="download">
            <div id="download-1">
                <h1>Tải xuống ứng dụng của chúng tôi để tận dụng tối đa nó</h1>
                <p>Trải nghiệm mọi tính năng tiện ích của chúng tôi bằng cách tải ứng dụng trực tiếp từ cửa hàng ứng dụng trên điện thoại của bạn. Ứng dụng hỗ trợ cả hệ điều hành iOS và Android, đảm bảo hoạt động mượt mà và dễ sử dụng. Hãy cài đặt ngay hôm nay để tận hưởng dịch vụ tốt nhất mọi lúc, mọi nơi!</p>
                <div id="download-image">
                    <img src="{{ asset('storage/home-download/appstore.svg') }}" alt="appstore">
                    <img src="{{ asset('storage/home-download/googleapp.svg') }}" alt="googleapp">
                </div>
            </div>
            <div id="download-2">
                <img src="{{ asset('storage/home-download/bg02.png') }}" alt="bg02">
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
            const accordionHeader1 = document.getElementById("accordion-header-1");
            const accordionContent1 = document.getElementById("accordion-content-1");
            const accordionHeader2 = document.getElementById("accordion-header-2");
            const accordionContent2 = document.getElementById("accordion-content-2");
            const accordionHeader3 = document.getElementById("accordion-header-3");
            const accordionContent3 = document.getElementById("accordion-content-3");
            accordionContent1.style.maxHeight = 200+"px";
            accordionContent2.style.maxHeight = 0 + "px";
            accordionContent3.style.maxHeight = 0 + "px";
            accordionHeader1.addEventListener("click",() => {
                if(accordionContent1.style.maxHeight == "0px"){
                    accordionHeader1.style.backgroundColor = "#FF4D30"
                    accordionHeader1.style.color = "white"
                    accordionContent1.style.maxHeight = 200+"px"
                }
                else{
                    accordionHeader1.style.backgroundColor = "white"
                    accordionHeader1.style.color = "black"
                    accordionContent1.style.maxHeight = 0+"px"
                }
                accordionContent2.style.maxHeight = 0 + "px";
                accordionContent3.style.maxHeight = 0 + "px";
                accordionHeader2.style.backgroundColor = "white"
                accordionHeader3.style.backgroundColor = "white"
                accordionHeader2.style.color = "black"
                accordionHeader3.style.color = "black"
            })
            //
            accordionHeader2.addEventListener("click",() => {
                if(accordionContent2.style.maxHeight == "0px"){
                    accordionHeader2.style.backgroundColor = "#FF4D30"
                    accordionHeader2.style.color = "white"
                    accordionContent2.style.maxHeight = 200+"px"
                }
                else{
                    accordionHeader2.style.backgroundColor = "white"
                    accordionHeader2.style.color = "black"
                    accordionContent2.style.maxHeight = 0+"px"
                }
                accordionContent1.style.maxHeight = 0 + "px";
                accordionContent3.style.maxHeight = 0 + "px";
                accordionHeader1.style.backgroundColor = "white"
                accordionHeader3.style.backgroundColor = "white"
                accordionHeader1.style.color = "black"
                accordionHeader3.style.color = "black"
            })
            //
            accordionHeader3.addEventListener("click",() => {
                if(accordionContent3.style.maxHeight == "0px"){
                    accordionHeader3.style.backgroundColor = "#FF4D30"
                    accordionHeader3.style.color = "white"
                    accordionContent3.style.maxHeight = 200+"px"
                }
                else{
                    accordionHeader3.style.backgroundColor = "white"
                    accordionHeader3.style.color = "black"
                    accordionContent3.style.maxHeight = 0+"px"
                }
                accordionContent2.style.maxHeight = 0 + "px";
                accordionContent1.style.maxHeight = 0 + "px";
                accordionHeader2.style.backgroundColor = "white"
                accordionHeader1.style.backgroundColor = "white"
                accordionHeader2.style.color = "black"
                accordionHeader1.style.color = "black"
            })
            //
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
        </script>
    </body>
</html>

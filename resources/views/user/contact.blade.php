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
                #add-info{
                    flex-wrap: wrap;
                    justify-content: center;
                }
                #add-info-right,#add-info-left{
                    flex-basis: 100%;
                }
            }
            @media screen and (max-width: 768px){
                #footer-1,#footer-2,#footer-3,#footer-4{
                    flex-basis: 100%;
                }

                #menu-responsive{
                    display: block;
                }
                .review-by-people-2{
                    flex-basis: 100%;
                    margin-top: 20px;
                }
                .review-by-people-2 p{
                    font-size: 1.7vw;
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
            #add-info{
                display: flex;
                margin-top: 70px;
            }
            #add-info-left,#add-info-right{
                flex-basis: 50%;
                padding: 10px 30px;
            }
            #add-info-left h1{
                font-weight: bold;
                color: #010103;
            }
            #add-info-left p{
                margin: 20px 0 40px;
                color: #706f7b;
                width: 80%;
            }
            #add-info-left h3{
                margin-top: 10px;
                font-size: 15px;
            }
            #add-info-right h1{
                font-size: 20px;
                color: black;
                margin-top: 30px;
            }
            #add-info-right span{
                color: red;
            }
            #add-info-right input{
                background-color: #f2f2f2;
                border: none;
                padding: 10px 20px;
                width: 500px;
            }
            #add-info-right textarea{
                padding: 10px;
                background-color: #f2f2f2;
            }
            #add-info-right input:focus{
                border: 2px solid #FF4D30; /* Viền màu xanh lá */
                outline: none; /* Loại bỏ outline mặc định */
                box-shadow: 0 0 5px rgba(76, 175, 80, 0.8); /* Hiệu ứng ánh sáng */
            }
            textarea {
                border: 1px solid gray; /* Viền mặc định */
                outline: none; /* Loại bỏ viền mặc định */
            }

            textarea:focus {
                border: 2px solid #FA4226; /* Viền khi focus */
                box-shadow: 0 0 5px rgba(0, 0, 255, 0.5); /* Thêm hiệu ứng ánh sáng */
            }

            textarea:not(:focus) {
                border: none; /* Quay về trạng thái mặc định khi không focus */
                box-shadow: none; /* Loại bỏ hiệu ứng ánh sáng */
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
            <li><a href="/car" >Phương tiện</a></li>
            <li><a href="/feedback">Phản hồi</a></li>
            <li><a href="/about">Giới thiệu</a></li>
            <li><a href="/contact" id="header-menu-main">Liên hệ</a></li>
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
        <h1>Liên hệ</h1>
        <h2><a href="/">Trang chủ</a> / Liên hệ</h2>
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


<div id="add-info">
    <div id="add-info-left">
        <h1>Cần thêm thông tin?</h1>
        <p>Một chuyên gia đa năng có kỹ năng trong nhiều lĩnh vực nghiên cứu, phát triển cũng như là một chuyên gia học tập. Hơn 15 năm kinh nghiệm.</p>
        <h3>0123 456 789</h3>
        <h3>Lananh@gmail.com</h3>
        <h3>Hà Đông, Hà Nội</h3>
    </div>
    <div id="add-info-right">
        <h1>Họ và tên <span>*</span> </h1>
        <input type="text" id="name" placeholder="ví dụ: Đào Lan Anh">
        <h1>Email <span>*</span> </h1>
        <input type="text" placeholder="Email của bạn @gmail.com">
        <h1>Bạn cần hỗ trợ gì? <span>*</span> </h1>
        <textarea name="sopport" id="" cols="60" rows="10" placeholder="Viết ở đây..."></textarea>
    </div>
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



            // Đặt menu mặc định ẩn






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

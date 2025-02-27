📌 Tên dự án<br>
    Ứng dụng web cho thuê xe ô tô CarRental<br>
🚀 Tính năng<br>
    Admin: đăng kí đăng nhập, xem, thêm, sửa, xóa xe, xem các đơn đặt xe, duyệt các đơn đặt xe, xác nhận người dùng đã trả xe<br>
    User: đăng kí đăng nhập, xem xe, đặt xe, xem đơn đặt xe, sửa đơn đặt xe, xóa đơn đặt xe<br>
    ![image](https://github.com/user-attachments/assets/7a249abf-ca92-463b-a553-b30f0d84f83a)<br>
    Trước khi cài đặt Laravel, đảm bảo hệ thống có:<br>
✅ PHP ≥ 8.1<br>
✅ Composer <br>
✅ Node.js & NPM <br>
git clone https://github.com/phamviethoang020704/webnc.git<br>
Cài composer: composer install<br>
Cài npm: npm install<br>
cp .env.example .env<br>
Cấu hình env<br>
tạo khóa ứng dụng php artisan key:generate<br>
php artisan migrate --seed<br>
php artisan storage:link<br>
php artisan serve<br>




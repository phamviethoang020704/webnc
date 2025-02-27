📌 Tên dự án
    Ứng dụng web cho thuê xe ô tô CarRental
🚀 Tính năng
    Admin: đăng kí đăng nhập, xem, thêm, sửa, xóa xe, xem các đơn đặt xe, duyệt các đơn đặt xe, xác nhận người dùng đã trả xe
    User: đăng kí đăng nhập, xem xe, đặt xe, xem đơn đặt xe, sửa đơn đặt xe, xóa đơn đặt xe
    ![image](https://github.com/user-attachments/assets/7a249abf-ca92-463b-a553-b30f0d84f83a)
    Trước khi cài đặt Laravel, đảm bảo hệ thống có:
✅ PHP ≥ 8.1
✅ Composer 
✅ Node.js & NPM 
git clone https://github.com/phamviethoang020704/webnc.git
Cài composer: composer install
Cài npm: npm install
cp .env.example .env
Cấu hình env
tạo khóa ứng dụng php artisan key:generate
php artisan migrate --seed
php artisan storage:link
php artisan serve




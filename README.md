# CarRental

## Tổng quan

### Giao diện sản phẩm

![Image](https://github.com/user-attachments/assets/98daa18d-a4a8-4427-8e31-c4a56fd3c609)

![Image](https://github.com/user-attachments/assets/82375c47-837f-4cec-a01a-1ec6fe966b18)

![Image](https://github.com/user-attachments/assets/164379a8-ef3c-4abc-83df-e9ab210b1122)

![Image](https://github.com/user-attachments/assets/43e1e2d5-d1ae-4647-9e47-5e01c2b744f7)

![Image](https://github.com/user-attachments/assets/6baa2e94-20a5-40d7-9c1a-df0a8501abba)

![Image](https://github.com/user-attachments/assets/f6a9a839-0931-4b07-ac14-f719400a313a)

![Image](https://github.com/user-attachments/assets/2bda680f-92f7-4f4a-b4d1-e7d869176125)

![Image](https://github.com/user-attachments/assets/6fced2b2-7121-49b4-95b1-243e67a403fe)

![Image](https://github.com/user-attachments/assets/3205693f-62ef-461d-93a1-c933891590ce)

## Tính năng

### Admin  
- Đăng ký, đăng nhập  
- Xem, thêm, sửa, xóa xe  
- Xem các đơn đặt xe  
- Duyệt các đơn đặt xe  
- Xác nhận người dùng đã trả xe  

### User  
- Đăng ký, đăng nhập  
- Xem xe  
- Đặt xe  
- Xem đơn đặt xe  
- Sửa đơn đặt xe  
- Xóa đơn đặt xe  

![image](https://github.com/user-attachments/assets/7a249abf-ca92-463b-a553-b30f0d84f83a)

## Cài đặt

Trước khi cài đặt Laravel, đảm bảo hệ thống có:  
✅ PHP ≥ 8.1  
✅ Composer  
✅ Node.js & NPM  

```sh
# Clone repository
git clone https://github.com/phamviethoang020704/webnc.git

# Cài đặt dependencies
composer install
npm install

# Sao chép file cấu hình môi trường
cp .env.example .env

# Cấu hình .env và tạo khóa ứng dụng
php artisan key:generate

# Chạy migration và seed dữ liệu
php artisan migrate --seed

# Liên kết storage
php artisan storage:link

# Chạy server
php artisan serve






* **Sinh viên:** Đặng Thị Quỳnh
* **MSV:** 238103101156
* **Lớp:** D18CNPM2

# Tích hợp Đăng nhập Social (Google & Facebook) với Laravel

Dự án này thực hiện việc tích hợp xác thực người dùng thông qua các nền tảng mạng xã hội sử dụng thư viện Laravel Socialite.

## 1. Cách cài đặt dự án

### Yêu cầu hệ thống:
* PHP >= 8.2
* Composer
* MySQL

### Các bước thực hiện:

1. **Clone mã nguồn từ GitHub:**
   ```bash
   git clone 
   cd my-login
   ```

2. **Cài đặt các thư viện phụ thuộc:**
   ```bash
   composer install
   ```

3. **Cấu hình môi trường:**
   * Sao chép file `.env.example` thành `.env`:
     ```bash
     cp .env.example .env
     ```
   * Tạo App Key:
     ```bash
     php artisan key:generate
     ```
   * Cấu hình Database trong file `.env` (DB_DATABASE, DB_USERNAME, DB_PASSWORD).

4. **Chạy Migration để tạo bảng Users:**
   ```bash
   php artisan migrate
   ```

5. **Khởi chạy Server:**
   ```bash
   php artisan serve
   ```

---

## 2. Cách cấu hình Google OAuth

1. Truy cập [Google Cloud Console](https://console.cloud.google.com/).
2. Tạo một dự án mới và vào mục **APIs & Services > Credentials**.
3. Tạo **OAuth client ID** dạng "Web application".
4. Thêm **Authorized redirect URIs**: `http://localhost:8000/auth/google/callback`.
5. Copy Client ID và Client Secret vào file `.env`:
   ```env
   GOOGLE_CLIENT_ID=your_id
   GOOGLE_CLIENT_SECRET=your_secret
   GOOGLE_REDIRECT_URI=http://localhost:8000/auth/google/callback
   ```

---

## 3. Cách cấu hình Facebook OAuth

1. Truy cập [Meta for Developers](https://developers.facebook.com/).
2. Tạo ứng dụng mới với loại **"Authenticate and request data from users with Facebook Login"**.
3. Trong mục **Facebook Login > Settings**, đảm bảo hệ thống chấp nhận chuyển hướng từ `localhost`.
4. Trong mục **App Settings > Basic**, lấy App ID và App Secret.
5. Cấp quyền **Advanced Access** cho `public_profile` và `email` trong mục **Use Cases**.
6. Copy thông tin vào file `.env`:
   ```env
   FACEBOOK_CLIENT_ID=your_id
   FACEBOOK_CLIENT_SECRET=your_secret
   FACEBOOK_REDIRECT_URI=http://localhost:8000/auth/facebook/callback
   ```
---

# Lession2
# Install use Xampp
<hr>
1. Đổi tên file .env.example thành .env 
* copy vô .env
<hr>
  DB_DSN = mysql:host=127.0.0.1;port=4306;dbname=lampart
  DB_USER = root
  DB_PASSWORD = 
* chỉnh port tương ứng với port trong Xampp
2. Run: Composer install
3. Tạo database lamppart trong phpmyadmin
4. Run: php migrations.php trong thư mục gốc để tạo bảng category 
5. Di chuyển tới thư mục public và Run: php -S 127.0.0.1:8080
6. Mở trình duyệt và truy cập https://127.0.0.1:8080





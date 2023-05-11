# Lession2
# Install use Xampp
<hr>
1. Đổi tên file .env.example thành .env  
**copy vô .env**  
<hr>
  DB_DSN = mysql:host=127.0.0.1;port=4306;dbname=lampart  
  DB_USER = root  
  DB_PASSWORD =
<hr>  
_chỉnh port tương ứng với port trong Xampp_  
2. Run <mark>Composer install</mark>  
3. Tạo database lamppart trong phpmyadmin  
4. Run <mark>php migrations.php</mark> trong thư mục gốc để tạo bảng category   
5. Di chuyển tới thư mục public và Run <mark>php -S 127.0.0.1:8080</mark>  
6. Mở trình duyệt và truy cập https://127.0.0.1:8080  





# Lession2
# Install use Xampp
1. Đổi tên file .env.example thành .env    
**copy vô .env**    
    
  DB_DSN = mysql:host=127.0.0.1;port=4306;dbname=lampart    
  DB_USER = root    
  DB_PASSWORD =    
      
  _chỉnh port tương ứng với port trong Xampp_    
2. Run <strong>Composer install</strong>    
3. Tạo database lamppart trong phpmyadmin    
4. Run <strong>php migrations.php</strong> trong thư mục gốc để tạo bảng category     
5. Di chuyển tới thư mục public và Run <strong>php -S 127.0.0.1:8080</strong>    
6. Mở trình duyệt và truy cập https://127.0.0.1:8080    





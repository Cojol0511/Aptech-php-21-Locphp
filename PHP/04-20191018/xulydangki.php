<?php
 
    // Nếu không phải là sự kiện đăng ký thì không xử lý
    if (!isset($_POST['txtUsername'])){
        die('');
    }
     
    //Nhúng file kết nối với database
    include('connect-database.php');
          
    //Lấy dữ liệu từ file register.php
    
    $password   = addslashes($_POST['txtPassword']);
    $email      = addslashes($_POST['txtEmail']);
   
          
    //Kiểm tra người dùng đã nhập liệu đầy đủ chưa
    if ( !$password || !$email )
    {
        echo "Vui lòng nhập đầy đủ thông tin.";
        exit;
    }
          
    //Kiểm tra tên đăng nhập này đã có người dùng chưa
    if (mysql_num_rows(mysql_query("SELECT name FROM users WHERE name='$username'")) > 0){
        echo "Tên đăng nhập này đã có người dùng. Vui lòng chọn tên đăng nhập khác.";
    
    }
          
    //Kiểm tra email có đúng định dạng hay không
    if (!eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$", $email))
    {
        echo "Email này không hợp lệ. Vui long nhập email khác.";
    
    }
          
    //Kiểm tra email đã có người dùng chưa
    if (mysql_num_rows(mysql_query("SELECT email FROM member WHERE email='$email'")) > 0)
    {
        echo "Email này đã có người dùng. Vui lòng chọn Email khác.";
        
    }

    $sentenAdd = "INSERT INTO ap_21_4.users (pass,email,)
    VALUE ('{$password}','{$email}',)";
          
    //Lưu thông tin thành viên vào bảng
    @$addmember = mysqli_query($conn, $sentenAdd);
?>
<?php
if (isset($_POST["submit"])) {
	//lấy thông tin từ các form bằng phương thức POST
	$password = $_POST["password"];
	$email = $_POST["email"];
	//Kiểm tra điều kiện bắt buộc đối với các field không được bỏ trống
	if ($email == "" || $password == "") {
		echo "bạn vui lòng nhập đầy đủ thông tin";
	} else {
		$serverName = "localhost";
        $userName = "root";
        $password = "";
        $databaseName = "ap_21_5";

        // Create connection
        $conn = mysqli_connect($serverName, $userName, $password, $databaseName);

		$sql = "INSERT INTO users(email,password)
		 VALUES ('$email','$password')";
		mysqli_query($conn, $sql);
		echo "chúc mừng bạn đã đăng ký thành công";
	}
}

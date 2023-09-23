<!-- tạo form đăng ký -->
<form method="post">
    <input type="text" name="username" placeholder="username">
    </br>
    <input type="password" name="password" placeholder="password">
    </br>
    <input type="password" name="confirm_password" placeholder="confirm password">
    <input type="submit" name='submit' value="Đăng ký">

</form>
<?php
// connect to database
$dbserver = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "news";
$conn = mysqli_connect($dbserver, $dbuser, $dbpass, $dbname) or die("Không thể kết nối database");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($_POST['username'] != '' && $_POST['password'] != '' &&  $_POST['confirm_password'] != '') {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $confirm_password = $_POST['confirm_password'];
        $sql = "insert into account (username,password,confirm_password) values ('$username','$password','$confirm_password')";

        $check_query = "SELECT * FROM account WHERE username='$username'";
        $check_result = mysqli_query($conn, $check_query);
        if (mysqli_num_rows($check_result) > 0) {
            echo "Tên người dùng đã tồn tại. Vui lòng chọn tên khác.";
        } elseif ($password != $confirm_password) {
            echo "Mật khẩu không khớp";
        } else {
            $password_hash = password_hash($password, PASSWORD_DEFAULT);

            $sql = "INSERT INTO account (username, password, confirm_password) VALUES ('$username','$password_hash','$password_hash')";
            if (mysqli_query($conn, $sql)) {
                echo "Đăng ký thành công";
            } else {
                echo "Đăng ký thất bại";
            }
        }
    } else {
        echo "Vui lòng điền đầy đủ thông tin";
    }
}
mysqli_close($conn);
?>
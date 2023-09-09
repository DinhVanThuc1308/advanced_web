<?php
$dbserver = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "news";

//1 kết nối database
$conn = mysqli_connect($dbserver, $dbuser, $dbpass, $dbname) or die("Không thể kết nối database");
//2 thành lập câu truy vấn
$sql = "insert into morning (title,content,author) values ('Hà nội','đây là content','Nguyễn Văn A')";
//3 thực thi câu truy vấn
if (mysqli_query($conn, $sql)) {
    echo "Thêm thành công";
} else {
    echo "Thêm thất bại";
}
//4 đóng kết nối
mysqli_close($conn);

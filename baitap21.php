<?php
// connect to database
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $dbserver = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "news";
    $conn = mysqli_connect($dbserver, $dbuser, $dbpass, $dbname) or die("Không thể kết nối database");


    $sql = "DELETE FROM morning WHERE id=$id";

    if (mysqli_query($conn, $sql)) {

        echo "<script>alert('Bài viết đã được xoá thành công.')</script>";
        header("Location: ../baitap6/bai18.php", true, 301);
    } else {
        echo "Lỗi khi xoá bài viết: ";
    }
    mysqli_close($conn);
} else {
    echo "Không có ID bài viết được cung cấp.";
}

<?php
// connect to database

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $dbserver = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "news";
    $conn = mysqli_connect($dbserver, $dbuser, $dbpass, $dbname) or die("Không thể kết nối database");

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Xử lý dữ liệu chỉnh sửa và cập nhật bài viết trong cơ sở dữ liệu
        $newTitle = $_POST['new_title'];
        $newContent = $_POST['new_content'];
        $newAuthor = $_POST['new_author'];

        $sql = "UPDATE morning SET title='$newTitle', content='$newContent', author='$newAuthor' WHERE id=$id";

        if (mysqli_query($conn, $sql)) {
            // echo "Bài viết đã được cập nhật thành công.";
            echo "<script>alert('Bài viết đã được cập nhật thành công.')</script>";
        } else {
            echo "Lỗi khi cập nhật bài viết: " . mysqli_error($conn);
        }
    }

    // Trích xuất thông tin của bài viết cần chỉnh sửa
    $sql = "SELECT * FROM morning WHERE id=$id";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $title = $row['title'];
        $content = $row['content'];
        $author = $row['author'];
    } else {
        echo "Không tìm thấy bài viết.";
    }

    mysqli_close($conn);
} else {
    echo "Không có ID bài viết được cung cấp.";
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Sửa Bài Viết</title>
</head>

<body>
    <h2>Sửa Bài Viết</h2>
    <form method="POST" action="">
        <label for="new_title">Tiêu đề:</label>
        <input type="text" id="new_title" name="new_title" value="<?php echo $title; ?>"><br>

        <label for="new_content">Nội dung:</label>
        <textarea id="new_content" name="new_content"><?php echo $content; ?></textarea><br>

        <label for="new_author">Tác giả:</label>
        <input type="text" id="new_author" name="new_author" value="<?php echo $author; ?>"><br>

        <input type="submit" value="Cập nhật">
    </form>
</body>

</html>
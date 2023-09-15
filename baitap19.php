<!-- connect đến database -->
<?php
$dbserver = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "news";
$conn = mysqli_connect($dbserver, $dbuser, $dbpass, $dbname) or die("Không thể kết nối database");
mysqli_set_charset($conn, "utf8");
$id = "";
$title = "";
$content = "";
$author = "";
$error = true;


if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "select * from morning where id = $id";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        $row = mysqli_fetch_assoc($result);
        $title = $row["title"];
        $content = $row["content"];
        $author = $row["author"];
        $error = false;
    } else {
        echo "0 results";
    }
    mysqli_close($conn);
}
if ($error) {
    echo "Không tìm thấy bài viết </br>";
    echo
    "Bài 19 click vào tiêu đề sẽ hiển thị nội dung bài viết";
} else {
?>
    <table border=1>
        <tr>
            <td>id</td>
            <td>title</td>
            <td>content</td>
            <td>author</td>
        </tr>
        <tr>
            <td><?php echo  $id ?></td>
            <td><?php echo $title ?></td>
            <td><?php echo $content ?></td>
            <td><?php echo $author ?></td>
        </tr>
    </table>
<?php
}
?>
<form method="POST" action="">
    <label for="title">Title</label>
    <br />
    <input type="text" name="title" />
    <br />
    <label for="content">Content</label>
    <br />
    <textarea name="content"></textarea>
    <br />
    <label for="author">Author</label>
    <br />
    <input type="text" name="author" />
    <br />
    <input type="submit" value="Submit" name="submit" />

</form>
<?php
$dbserver = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "news";
$conn = mysqli_connect($dbserver, $dbuser, $dbpass, $dbname) or die("Không thể kết nối database");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($_POST["title"] != "" && $_POST["content"] != "" && $_POST["content"]) {
        $title = $_POST["title"];
        $content = $_POST["content"];
        $author = $_POST["author"];
        if ($title != "" && $content != "" && $author != "") {
            //sql insert
            $sql = "insert into morning (title,content,author) values ('$title','$content','$author')";
            if (mysqli_query($conn, $sql)) {
                echo "Thêm thành công";
            } else {
                echo "Thêm thất bại";
            }
        }
    } else {
        echo "Please fill all the fields";
    }
}

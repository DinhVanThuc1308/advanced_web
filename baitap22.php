<?php
$dbserver = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "news";
$conn = mysqli_connect($dbserver, $dbuser, $dbpass, $dbname) or die("Không thể kết nối database");

$search = isset($_GET['search']) ? mysqli_real_escape_string($conn, $_GET['search']) : '';

?>

<div>
    <a href="../baitap6/bai17.php">Thêm bài viết</a>
    <form method="GET">
        <label for="search">Tìm kiếm:</label>
        <input type="text" id="search" name="search" />
        <input type="submit" value="Tìm kiếm">
    </form>

    <table border=1>
        <tr>
            <td>id</td>
            <td>title</td>
            <td>content</td>
            <td>author</td>
            <td> Sửa </td>
            <td> Xóa </td>
        </tr>
        <?php
        $sql = "SELECT * FROM morning WHERE title LIKE '%$search%' OR content LIKE '%$search%' OR author LIKE '%$search%' ORDER BY id DESC LIMIT 10";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while ($row = mysqli_fetch_assoc($result)) { ?>
                <tr>
                    <td><?php echo $row["id"] ?></td>
                    <td>
                        <a href="../baitap6/bai19.php?id=<?= $row['id'] ?>">
                            <?php echo $row["title"] ?>
                        </a>
                    </td>
                    <td><?php echo $row["content"] ?></td>
                    <td><?php echo $row["author"] ?></td>
                    <td>
                        <a href="../baitap6/bai20.php?id=<?= $row['id'] ?>">
                            Sửa
                        </a>
                    </td>
                    <td>
                        <a onclick="deleteConfirm()" href="../baitap6/bai21.php?id=<?= $row['id'] ?>">
                            Xóa
                        </a>
                    </td>
                </tr>
        <?php
            }
        } else {
            echo "Không tìm thấy kết quả.";
        }
        mysqli_close($conn);
        ?>
    </table>
</div>
<script>
    function deleteConfirm() {
        return confirm("Bạn có chắc chắn muốn xoá bài viết này không?");
    }
</script>
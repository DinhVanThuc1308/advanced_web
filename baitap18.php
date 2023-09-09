<?php
$dbserver = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "news";
$conn = mysqli_connect($dbserver, $dbuser, $dbpass, $dbname) or die("Không thể kết nối database");

?>
<div>
    <a href="baitap17.php">Thêm bài viết</a>


    <table border=1>
        <tr>
            <td>id</td>
            <td>title</td>
            <td>content</td>
            <td>author</td>
        </tr>
        <?php
        $sql = "select * from morning  order by id desc limit 10";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while ($row = mysqli_fetch_assoc($result)) { ?>
                <tr>
                    <td><?php echo $row["id"] ?></td>
                    <td><?php echo $row["title"] ?></td>
                    <td><?php echo $row["content"] ?></td>
                    <td><?php echo $row["author"] ?></td>
                </tr>
        <?php
            }
        } else {
            echo "0 results";
        }
        mysqli_close($conn);
        ?>
    </table>
</div>
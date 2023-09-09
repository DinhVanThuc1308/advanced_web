<!-- hiển thị file đã upload -->
<?php
$sort = isset($_GET['sort']) && $_GET['sort'] === 'a' ? 1 : 0;
$dir = "../savefile";
$files = scandir($dir, $sort);
$sortRender = ((isset($_GET['sort']) && $_GET['sort'] === 'a') ? 'd' : 'a');
?>
<table border="1">
    <tr>

        <th><a href="?sort=<?= $sortRender ?>">Tên file</a></th>

        <th> Loại </th>
        <th> Ngày tải lên </th>
        <th> Kích thước </th>
    </tr>
    <?php

    foreach ($files as $file) {
        $filePath = $dir . "/" . $file;
        if ($file != "." && $file != "..") {
            echo "<tr>
        <td> " . $file . "</td>
        <td> " . mime_content_type($filePath) . "</td>
        <td> " . date("Y-m-d H:i:s.", filemtime($filePath)) . "</td>
        <td> " . filesize($filePath) . "</td>

        </tr>";
            // echo "<a href='$dir/$file'>$file</a><br>";
        }
    }
    echo "</table>";
    ?>
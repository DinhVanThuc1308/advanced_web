<div class="footer">
    <?php
    if (isset($_COOKIE['lastVisit'])) {
        $lastVisit = $_COOKIE['lastVisit'];
        echo "Lần cuối bạn vào web là: " . $lastVisit;
    } else {
        echo "Đây là lần đầu tiên bạn vào web";
    }
    ?>
    </br>
    <?php

    $filename = "counterVisit.txt";
    if (file_exists($filename)) {
        $file = fopen("counterVisit.txt", "r");
        $number = (int) fgets($file);
        $number++;
        fclose($file);
    } else {
        $number = 1;
    }
    echo "Số lần truy cập: " . $number;
    $file = fopen("counterVisit.txt", "w");
    fwrite($file, $number);
    fclose($file);
    ?>
</div>
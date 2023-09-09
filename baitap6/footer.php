<div class="footer">
    <?php
    if (isset($_COOKIE['lastVisit'])) {
        $lastVisit = $_COOKIE['lastVisit'];
        echo "Lần cuối bạn vào web là: " . $lastVisit;
    } else {
        echo "Đây là lần đầu tiên bạn vào web";
    }
    ?>
</div>
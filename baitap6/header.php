<?php
session_start();

?>



<?php echo "<header> Lập trình web với php </header>" ?>
<?php
$_COOKIE['lastVisit'] = date("d/m/Y h:i:s");
setcookie('lastVisit', $_COOKIE['lastVisit'], time() + 3600, "/");

if (isset($_SESSION['username'])) {
    echo 'Xin chào' . $_SESSION['username'] . '<a href ="../logout.php">Logout</a>';
} else {
    echo 'Chưa đăng nhập';
}


?>
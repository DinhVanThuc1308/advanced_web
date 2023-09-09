<?php
session_start();
session_unset();
session_destroy();
echo ' Đăng xuất thành công';
sleep(3);
header('Location: baitap8_login.php');

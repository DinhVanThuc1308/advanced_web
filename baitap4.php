<html>
    <head>
        <title> Bài tập  4</title>
    </head>
<body>
    <form method="post">
        <text>Nhập tháng: </text></br>
        <input type="text" name="thang" value="<?php echo $_POST['thang'] ?? 0 ?>"></br>
        <text>Nhập năm: </text></br>
        <input type="text" name="nam" value="<?php echo $_POST['nam'] ?? 0 ?>">
        <input type="submit" value="Tính">
    </form>
    <?php
    if (isset($_POST['thang'])&& isset($_POST['nam'])&& $_POST['thang'] && $_POST['nam']){
        $thang = (double) trim($_POST['thang']);
        $nam = (double) trim($_POST['nam']);
        kiemTraNamNhuan($thang, $nam);
    }
    ?>
<?php



function kiemTraNamNhuan($thang, $nam)
{
    if ($thang == 2) {
        if (($nam % 4 == 0 && $nam % 100 != 0) || ($nam % 400 == 0)) {
            $soNgay = 29;
        } else {
            $soNgay = 28;
        }
    } else if ($thang == 4 || $thang == 6 || $thang == 9 || $thang == 11) {
        $soNgay = 30;
    } else {
        $soNgay = 31;
    }
    
    echo "Tháng $thang  năm $nam : </br>  $soNgay ngày.";
   
}

?>
</html>
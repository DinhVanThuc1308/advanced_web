<html>
    <head>
        <title>Chào mừng bạn đến với PHP</title>
    </head>
   
    <body>
        <?php

// bài tập 1
echo "Bài tập 3 </br>";
?>
<!-- viêst form -->
<form action="" method="post">
    <input type="text" name="a" value="<?php echo $_POST['a'] ?? 0 ?>">
    <input type="submit" value="nộp">

<?php
// kiểm tra xem có tồn tại a không
if (isset($_POST['a'])){
    $a = (double) trim($_POST['a']);
    ngay($a);
}
?>
<?php

function ngay($a){
    $weekdays = array(1=> "Sunday","Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");

    
    echo " ". $weekdays[$a];

}



    ?>
    

        
    </body>
</html>

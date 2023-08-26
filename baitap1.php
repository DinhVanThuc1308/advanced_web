<html>
    <head>
        <title>Chào mừng bạn đến với PHP</title>
    </head>
   
    <body>

        <form action="bai1.php" method="POST">
            <input type="number" name="a" value="<?php echo $_POST['a'] ?? ''?>">
            <input type="number" name="b" value="<?php echo $_POST['b'] ?? '' ?>">
            <input type="submit" value="giaiPTB1">
        </form>


        <?php
        if(isset($_POST['a']) && isset($_POST['b']) && $_POST['a'] && $_POST['b']){
            $a = (double) trim($_POST['a']);
            $b = (double) trim($_POST['b']);
            giaiPTB1($a, $b);
        }
        ?>
        <?php

// bài tập 1
echo "Bài tập 1 </br>";


//viết func giải phương trình bậc nhất

function giaiPTB1($a, $b){
    if ($a == 0) {
        if ($b == 0) {
            echo "Phương trình vô số nghiệm";
        } else {
            echo "Phương trình vô nghiệm";
        }
    } else {
        echo "Phương trình có nghiệm x = " . (-$b / $a);
    }
}

    ?>
    

 
    </body>
</html>

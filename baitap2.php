<html>
    <title>
        Bài tập 2
    </title>
    <body>
        <?php
    echo " bài tập 2 </br>";
       ?>
        <form action=""
         method="post">
            <input type="text" name="a" value="<?php echo $_POST['a'] ?? 0 ?>">
            <input type="text" name="b" value="<?php echo $_POST['b'] ?? 0 ?>">
            <input type="text" name="c" value="<?php echo $_POST['c'] ?? 0 ?>">
            <input type="submit" value="Tính">
        </form>
        <?php
        if (isset($_POST['a'])&& isset($_POST['b'])&& isset($_POST['c'])&& $_POST['a'] && $_POST['b'] && $_POST['c']){
            $a = (double) trim($_POST['a']);
            $b = (double) trim($_POST['b']);
            $c = (double) trim($_POST['c']);
            giaiPTB2($a, $b, $c);
        }
            
        ?>
        <?php

        function giaiPTB2($a, $b, $c){
            $delta = ($b*$b) - 4 * $a * $c;
    
                if ($a == 0){
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
                else
                if ($a != 0){
                    if ($delta < 0) {
                        echo "Phương trình vô nghiệm";
                    } else if ($delta == 0) {
                        echo "Phương trình có nghiệm kép x1 = x2 = " . (-$b / (2 * $a));
                    } else {
                        echo "Phương trình có 2 nghiệm phân biệt x1 = " . ((-$b + sqrt($delta)) / (2 * $a)) . " </br> x2 = " . ((-$b - sqrt($delta)) / (2 * $a));
                    }
                }
    
            }

        

        


        ?>
    </body>
</html>
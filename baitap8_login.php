<div style="display:flex; justify-content:center; align-items: center;"
>
 <style>
        form {
            width: 300px;
            height: 200px;
            margin: 0 auto;
            background: #ccc;
            padding: 20px;
        }
        input {
            margin: 10px;
        }
        input{
            width: 100%;
            height: 30px;
           
            border-radius: 5px;
        }
    </style>
    
    <?php
        $isLogin = false;
        if (isset($_POST['username'])&& isset($_POST['password'])){
            $user = $_POST['username']??"";
            $pass = $_POST['password']??"";
            if ($user == 'ABC' && $pass == '123'){
                $isLogin = true;
                echo 'Đăng nhập thành công';
            }


        }
        if (!$isLogin){
            ?>
            <form action="bai8.php" method="POST">
                <input type="text" name="username" placeholder="username" >
                </br>
                <input type="password" name="password" placeholder="password">
                </br>
                <input type="submit" name='submit' value="Đăng nhập">
            </form>
            <?php
            echo 'Đăng nhập thất bại';

        }
        
        
        
        ?>


</div>

<div style="display:flex; justify-content:center; align-items: center;">
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

        input {
            width: 100%;
            height: 30px;

            border-radius: 5px;
        }
    </style>

    <?php

    $dbserver = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "news";
    $conn = mysqli_connect($dbserver, $dbuser, $dbpass, $dbname) or die("Không thể kết nối database");
    $isLogin = false;
    if (isset($_POST['username']) && isset($_POST['password'])) {
        $user = $_POST['username'] ?? "";
        $pass = $_POST['password'] ?? "";

        $sql = "SELECT * FROM account WHERE username='$user' ";



        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            $password_hash = mysqli_fetch_assoc($result)['password'];
            $verify = password_verify($pass, $password_hash);
            if ($verify) {
                $isLogin = true;
                echo 'Đăng nhập thành công';
                $_SESSION['username'] = $user;
            } else {
                echo 'Đăng nhập thất bại';
            }

            // $isLogin = true;
            // echo 'Đăng nhập thành công';
            // $_SESSION['username'] = $user;

        }
    }
    if (!$isLogin) {
    ?>
        <form action="bai8.php" method="POST">
            <input type="text" name="username" placeholder="username">
            </br>
            <input type="password" name="password" placeholder="password">
            </br>
            <input type="submit" name='submit' value="Đăng nhập">
            <!-- thêm nút đăng ký link đến baitap23_register -->
            <a href="baitap23_register.php">Đăng ký</a>
        </form>

    <?php
        echo 'Đăng nhập thất bại';
    }



    ?>


</div>
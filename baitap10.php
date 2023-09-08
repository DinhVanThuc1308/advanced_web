<div class="container">
    <form method="post">
    <input type="radio" name="calculations" value="cong" >Cộng</br>
    <input type="radio" name="calculations" value="tru">Trừ</br>
    <input type="radio" name="calculations" value="nhan" >Nhân</br>
    <input type="radio" name="calculations" value="chia" >Chia</br>  
    <input type="text" name="number1" value="<?php echo $_POST['number1'] ?? "" ?>"></br>
    <input type="text" name="number2" value="<?php echo $_POST['number2'] ?? "" ?>"></br>
    <input type="submit" value="Tính">
    </form> 

</div>
<?php
if (isset($_POST['calculations']) && isset($_POST['number1']) && isset($_POST['number2']) && $_POST['number1'] && $_POST['number2']) {
    $calculations = $_POST['calculations'];
    $number1 = (double) trim($_POST['number1']);
    $number2 = (double) trim($_POST['number2']);
    switch ($calculations) {
        case 'cong':
            $result = $number1 + $number2;
            break;
        case 'tru':
            $result = $number1 - $number2;
            break;
        case 'nhan':
            $result = $number1 * $number2;
            break;
        case 'chia':
            if ($number2 == 0) {
                $result = 'Không thể chia cho 0';
                echo $result;
                break;
            }else
            $result = $number1 / $number2;
            break;
        default:
            $result = 'Vui lòng chọn phép tính';
            break;
    }
    ?>
    <input style="text" value="<?php echo $result; ?>"/>
    <?php
}
?>
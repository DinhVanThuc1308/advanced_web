<?php
$dir = "./savefile/";
if ($_FILES['new_file']["name"] = !"") {
    $fileupload = $dir . $_FILES['new_file']['full_path'];
    if (move_uploaded_file($_FILES['new_file']['tmp_name'], $fileupload)) {
        echo "Upload thành công";
    } else {
        echo "Upload thất bại";
    }
} else {
    echo " vui lòng chọn file";
}

<?php
include './connection.php';

if (isset($_POST['acceptUpdate'])) {
    $code = $_POST['upid'];
    $name = $_POST['upname'];
    $price = $_POST['upprice'];
    $qty = $_POST['upqty'];
    $old_img = $_POST['up_old_img'];
    $new_img = $_FILES['up_new_img'];

    if(!empty($new_img['name'])){
        unlink(('./img/'.$old_img));
        $new_img_name = time().'.'. pathinfo($new_img['name'],PATHINFO_EXTENSION);
        $path = './img/'. $new_img_name;
        move_uploaded_file($new_img['tmp_name'],$path);

        $sql = "
            UPDATE `products` SET `name`='$name',`qty`='$qty',`price`='$price',`thumbnail`='$new_img_name' WHERE `code` = '$code'
        ";
        $rs = $connection ->query($sql);
        if($rs){
            header('location:./');
        }
    }else{
        // $sql = "
        //     UPDATE `products` SET `name`='$name',`qty`='$qty',`price`='$price', WHERE `code` = '$code'
        // ";
        $sql = "
                UPDATE `products` SET `name`='$name', `qty`='$qty', `price`='$price' WHERE `code` = '$code'
            ";

        $rs = $connection->query($sql);
        if($rs){
            header('location:./');
        }
    }

}
?>

<?php
    if(isset($_POST['accept_del'])){
        include 'connection.php';
        $code = $_POST['code_del'];
        $img = $_POST['img_del'];
        unlink($img);
        $sql = "DELETE FROM `products` WHERE `code` = '$code'";
        $connection-> query($sql);
        header('location:index.php');
    }
?>
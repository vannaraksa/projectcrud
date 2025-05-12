<?php
    include './connection.php';
    if(isset($_POST['acceptAdd'])) {
        $name = $_POST['name'];
        $price = $_POST['price'];
        $qty = $_POST['qty'];
        $file = $_FILES['img'];
        // $sql = "INSERT INTO `products`(`name`, `qty`, `price`) 
        //         VALUES ('$name','$qty','$price')";
        // $rs =  $connection->query($sql);

        $thumbnail = time().'.'. pathinfo( $file['name'], PATHINFO_EXTENSION );
        $path = './img/'. $thumbnail;
        move_uploaded_file($file['tmp_name'], $path);
        $sql = "INSERT INTO `products`(`code`, `name`, `price`, `qty`, `thumbnail`) 
                VALUES (null,'$name','$price','$qty','$thumbnail')";
        $rs = $connection->query($sql);
        if($rs){
           header('location:./');
        }
    }
?>
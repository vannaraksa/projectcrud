<?php
    function Show(){
        include'./connection.php';
        $sql = "SELECT * FROM `products` ORDER BY `code` DESC";
        $rs = $connection->query($sql);
        while($row = $rs->fetch_assoc()){
            echo '
                <tr>
                    <td>'.$row['code'].'</td>
                    <td>
                        <img src="./img/'.$row['thumbnail'].'" alt="" width="80" height="80" imgname=" '.$row['thumbnail'].'">
                    </td>
                    <td>'.$row['name'].'</td>
                    <td>'.$row['price'].'</td>
                    <td>'.$row['qty'].'</td>
                    <td>'.$row['create_at'].'</td>
                    <td>
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal_update" id="Update">Edit</button>
                        <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal_del" value="'.$row['code'].'" id = "Delete">Delete</button>
                    </td>
                </tr>
            ';
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    
    <nav class="navbar shadow w-100 p-2 ps-5 pe-5" >
        <h1>Dashbord</h1>
        <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal" >Add</button>
        <?php 
        include './modal.php' ;
        include './modal_del.php';
        include './modal_update.php';
        ?>
    </nav>
    <div class="container">
        <table class="table table-striped mt-5 align-middle " style=" table-layout:fixed">
            <thead>
                <tr>
                    <th>Code</th>
                    <th>Image</th>
                    <th>Name</th>
                    <th>price</th>
                    <th>qty</th>
                    <th>create_at</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    Show()
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
<script>
    $(document).ready(function(){
        $("body").on('click', '#Delete', function(){
            var img = $(this).closest('tr').find('td img').attr('src');
            var code = $(this).val();
            $("#code_del").val(code);
            $('#img_del').val(img);
        })

        $("body").on('click','#Update', function(){
            var code = $(this).parents('tr').find('td').eq(0).text();
            var img = $(this).parents('tr').find('td').eq(1).find('img').attr('imgname');
            var preview_img = $(this).parents('tr').find('td').eq(1).find('img').attr('src');
            var name = $(this).parents('tr').find('td').eq(2).text();
            var price = $(this).parents('tr').find('td').eq(3).text();
            var qty = $(this).parents('tr').find('td').eq(4).text();
            $("#up_new_img").val(null);

            $('#upid').val(code);
            $('#upname').val(name);
            $('#upprice').val(price);
            $('#upqty').val(qty);
            $('#up_old_img').val(img);
            $('#preview').attr('src',preview_img);
        })
        // $("#up_new_img").hide();

        $("#preview").click(function(){
            $("#up_new_img").click();
        })

        $("body").on('change', '#up_new_img', function() {
            var file = this.files[0];
            var reader = new FileReader();

            reader.onload = function(e) {
                $("#preview").attr('src', e.target.result);
            }
            reader.readAsDataURL(file);
        });
    })
</script>
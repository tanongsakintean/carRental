<?php
    require('../connect.php');


    if(isset($_POST) && !empty($_POST)){
        $car_id = $_POST["car_id"];
        $car_name = $_POST["car_name"];
        $car_reg = $_POST["car_reg"];
        $car_color = $_POST["car_color"];
        $car_price = $_POST["car_price"];
        $car_type = $_POST["car_type"];
        $car_status = $_POST["car_status"];

        $oldImageFile = @$_POST['oldImageFile'];
        $imageFileName = @$_FILES['car_img']['name'];
        $imageFileType = @$_FILES['car_img']['type'];
        $imageFileSize = @$_FILES['car_img']['size'];
        $imageFileTmpName = @$_FILES['car_img']['tmp_name'];
        $car_img="";

    if ($_FILES['car_img']['name']=="") {
        echo '<b><li>คุณไม่ได้เลือกรูปภาพ</li></b><br>';
    }
    else{
        move_uploaded_file($_FILES["car_img"]["tmp_name"],"../assets/images/".$_FILES["car_img"]["name"]);
        $car_img = $_FILES['car_img']['name'];
    }


        $sql_edit = "UPDATE tb_car SET car_name='$car_name', car_reg='$car_reg', car_color='$car_color', car_price='$car_price',
                    car_type='$car_type', car_status='$car_status', car_img='$car_img'
                     WHERE car_id = '$car_id'";
        $queue_edit = mysqli_query($conn,$sql_edit);

        header("Location:../pages/admin.php?p=list_car");
    }
?>

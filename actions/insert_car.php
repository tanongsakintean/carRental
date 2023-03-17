<?php
//เชื่อมต่อฐานข้อมูล
    require('../connect.php');

//รับข้อมูลจากฟอร์ม
if(isset($_POST) && !empty($_POST)){

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


    // switch ($car_type) {
    //     case "1":
    //         $car_type = "รถมอเตอร์ไซค์";
    //         break;
    //     case "2":
    //         $car_type = "รถเก๋ง";
    //         break;
    //     case "3":
    //         $car_type = "รถกระบะ";
    //         break;
    //     case "4":
    //         $car_type = "รถตู้";
    //         break;
    //     case "5":
    //         $car_type = "รถบรรทุก";
    //         break;
    // }

    // switch ($car_status) {
    //     case "1":
    //         $car_status = "อยู่ระหว่างการใช้งาน";
    //         break;
    //     case "2":
    //         $car_status = "ว่าง";
    //         break;
    //     case "3":
    //         $car_status = "อยู่ระหว่างการซ่อมแซม";
    //         break;
    // }


    
    $sql = "INSERT INTO tb_car
            (car_img, car_name, car_reg, car_type, car_color, car_price, car_status)
            VALUES
            ('$car_img', '$car_name', '$car_reg', '$car_type', '$car_color', '$car_price', '$car_status')";
              

    mysqli_query($conn, $sql)or die("insert ลงตาราง tb_car มีข้อผิดพลาดเกิดขึ้น" .mysqli_error($conn));
    header("Location:../pages/admin.php?p=list_car");
    


}

    
?>
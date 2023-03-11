<?php
    require('../connect.php');

    $id = $_REQUEST['id'];
    $sql = "SELECT * FROM tb_car WHERE car_id = '$id'";
    $result = mysqli_query($conn,$sql);
    $data = mysqli_fetch_array($result);

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


        $sql_edit = "UPDATE tb_car SET car_name='$car_name', car_reg='$car_reg', car_color='$car_color', car_price='$car_price',
                    car_type='$car_type', car_status='$car_status', car_img='$car_img'
                     WHERE car_id = '$id'";
        $queue_edit = mysqli_query($conn,$sql_edit);

        header('Location:list_car.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Car</title>
</head>
<body>
<h1>แบบฟอร์มแก้ไขข้อมูลรถ</h1>
<form enctype="multipart/form-data" action="" method="post">

    <label for="car_name">ยี่ห้อรถ:</label>
    <input type="text" id="car_name" name="car_name" value = "<?=$data['car_name']?>" required><br>

    <label for="car_reg">ทะเบียนรถ:</label>
    <input type="text" id="car_reg" name="car_reg" value = "<?=$data['car_reg']?>" required><br>

    <label for="car_type">ประเภทรถ:</label>
    <select id="car_type" name="car_type" required>
        <option value="" selected>เลือกประเภทของรถ </option>";
        <option value="1" >รถมอเตอร์ไซค์</option>
        <option value="2" >รถเก๋ง</option>
        <option value="3" >รถกระบะ</option>
        <option value="4" >รถตู้</option>
        <option value="5" >รถบรรทุก</option>
    </select><br>

    <label for="car_color">สีของรถ:</label>
    <input type="text" id="car_color" name="car_color" value = "<?=$data['car_color']?>" required><br>

    <label for="car_price">ราคาเช่ารถ/วัน:</label>
    <input type="text" id="car_price" name="car_price" value = "<?=$data['car_price']?>" required><br>

    <label for="car_status">สถานะของรถ:</label>
    <select id="car_status" name="car_status" required>
        <option value="" selected>เลือกสถานะของรถ </option>";
        <option value="1" >อยู่ระหว่างการใช้งาน</option>
        <option value="2" >ว่าง</option>
        <option value="3" >อยู่ระหว่างการซ่อมแซม</option>
    </select><br>


    <label for="car_img">รูปภาพรถ:</label>
    <input type="file" id="car_img" name="car_img" size="50" value = "<?=$data['car_img']?>" required><br><br>


    <div>
        <input type="submit" name="Submit" value="บันทึกข้อมูล" style="cursor:hand">
        <input type="reset" name="Reset" value="ยกเลิก" style="cursor:hand">
    </div>

</form>
</body>
</html>
<?php
//เชื่อมต่อฐานข้อมูล
    require('../connect.php');

    $sql = "SELECT * FROM tb_car";
    $result = mysqli_query($conn,$sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Car</title>
</head>
<body>

<center><h1>แสดงผลข้อมูลรถ</h1></center>

    <table border = 1 style="width:100%">
        <tr>
            <th><h3>car_id</h3></th>
            <th><h3>car_name</h3></th>
            <th><h3>car_reg</h3></th>
            <th><h3>car_color</h3></th>
            <th><h3>car_price</h3></th>
            <th><h3>car_type</h3></th>
            <th><h3>car_status</h3></th>
            <th><h3>car_img</h3></th>
            <th><h3>EDIT</h3></th>
            <th><h3>DELETE</h3></th>
        </tr>
        <?php 
            foreach($result as $data){ ?> 
            <!-- ดึงข้อมูลจาก db เข้าตาราง -->
            <tr>
                <?php
                    $type = "";
                            switch ($data['car_type']) {
                        case "1":
                            $type = "รถมอเตอร์ไซค์";
                            break;
                        case "2":
                            $type = "รถเก๋ง";
                            break;
                        case "3":
                            $type = "รถกระบะ";
                            break;
                        case "4":
                            $type = "รถตู้";
                            break;
                        case "5":
                            $type = "รถบรรทุก";
                            break;
                    }
                    
                    $status = "";
                    switch ($data['car_status']) {
                        case "1":
                            $status = "อยู่ระหว่างการใช้งาน";
                            break;
                        case "2":
                            $status = "ว่าง";
                            break;
                        case "3":
                            $status = "อยู่ระหว่างการซ่อมแซม";
                            break;
                    }
                ?>

                <th><?=$data['car_id']?></th>
                <th><?=$data['car_name']?></th>
                <th><?=$data['car_reg']?></th>
                <th><?=$data['car_color']?></th>
                <th><?=$data['car_price']?></th>
                <th><?=$type?></th>
                <th><?=$status?></th>

                <!-- ค้นหารูป -->
                <?php
                    $Path = "../assets/images/"; //ระบุ path ของไฟล์รูปภาพที่จัดเก็บไว้ใน server
                    $image = "<img src=$Path$data[car_img] valign=middle align = center width=\"120\" height = \"100\">";
                ?>
                <!-- ใส่รูปในตาราง -->
                <th><?=$image?></th> 

                <th><a href="edit_car.php?id=<?=$data['car_id']?>">Edit data</a></th> 
                <th><a href="delete_car.php?id=<?=$data['car_id']?>" onclick="return confirm(' ยืนยันการลบข้อมูลรถ <?=$data['car_id']?> ')">delete data</a></th> 
            </tr>
        <?php } 
        ?>
    </table>
    <center><a href="form_car.php">กลับหน้า form_car.php</a></center>
    
</body>
</html>
<?php

require('../connect.php');



if ($_POST['rent_start'] != "" and $_POST['rent_end'] != "") {
    $user_id = "ว่าง";  //$user_id = $_SESSION['id'];
    $car_id = $_POST['car_id'];
    $rent_start = $_POST['rent_start'];
    $rent_end = $_POST['rent_end'];

    $date_format = 'Y/m/d';

    $date1 = DateTime::createFromFormat($date_format, $rent_start);
    $date2 = DateTime::createFromFormat($date_format, $rent_end);

    if (($date1 && $date1->format($date_format) === $rent_start) && ($date2 && $date2->format($date_format) === $rent_end)) {

        $rent_status = 1; //กำลังเช่า

        $sql = "INSERT INTO tb_rent
            (car_id, user_id, rent_start, rent_end, rent_status)
            VALUES
            ('$car_id', '$user_id', '$rent_start', '$rent_end', '$rent_status')";
              
        mysqli_query($conn, $sql)or die("insert ลงตาราง tb_car มีข้อผิดพลาดเกิดขึ้น" .mysqli_error($conn));
    
        //เปลี่ยนสถานะรถใน tb_car
        $sql_edit = "UPDATE tb_car SET  car_status='1'
                     WHERE car_id = '$car_id'";
         mysqli_query($conn,$sql_edit);

        echo "<script>alert('ทำการจองเสร็จสิ้น'); window.location.replace('../components/bill_rent.php?id=$car_id');</script>"; 
        
    } else {
        echo "<script>alert('รูปแบบวันที่ไม่ถูกต้อง'); window.location.replace('../pages/admin.php?p=rent_page');</script>";


    }
} else {
    echo "<script>alert('กรุณากรอกข้อมูลให้ครบถ้วน'); window.location.replace('../pages/admin.php?p=rent_page');</script>";


}

?>
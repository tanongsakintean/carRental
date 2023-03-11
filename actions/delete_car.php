<?php
    require('../connect.php');
    $id = $_REQUEST['id'];
    $sql = "DELETE FROM tb_car WHERE car_id = '$id' ";
    mysqli_query($conn, $sql) or die ( "DELETE จาตาราง book มีข้อผิดพลาดเกิดขึ้น".mysqli_error($conn));
    mysqli_close ( $conn );
    header("Location:list_car.php");
?>
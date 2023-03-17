<?php
//เชื่อมต่อฐานข้อมูล
require('../connect.php');

//ตรวจสอบสถานะของรถ ให้เปลี่ยนไปตามสถานะเช่า
// function checkstatus(){
//     require('../connect.php');
//     // echo "eiei";
//     $sql_check = "SELECT car_id FROM tb_rent WHERE rent_status = 2 OR rent_status = 3";
//     $res = mysqli_query($conn, $sql_check);
//     // mysqli_fetch_array($res);

//     // ตัวแปร array ที่ใช้เก็บผลลัพธ์
//     $data = array();

//     // ดึงข้อมูลจากผลลัพธ์ใส่ลงใน array
//     while($row = mysqli_fetch_array($res)) {
//         array_push($data, $row['car_id']);
//     }

    
//     // แปลง array เป็นสตริงที่เหมาะสมสำหรับ SQL
//     $id_string = implode(",", $data);

//     // echo $id_string;

//     $sql_edit = "UPDATE tb_car SET car_status = 2
//                      WHERE car_id IN (" . $id_string . ")";
//     mysqli_query($conn,$sql_edit);

// }

// checkstatus();


$sql = "SELECT * FROM tb_car";
$result = mysqli_query($conn, $sql);

?>
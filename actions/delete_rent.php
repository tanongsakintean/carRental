<?php
    require('../connect.php');
    $id = $_REQUEST['id'];


    function checkstatus(){
        require('../connect.php');
        $id = $_REQUEST['id'];
        echo $id;
        $sql_check = "SELECT car_id FROM tb_rent WHERE rent_id = '$id'";
        $res = mysqli_query($conn, $sql_check);
    
        // ดึงข้อมูลจากผลลัพธ์ใส่ลงใน array
        while($row = mysqli_fetch_array($res)) {
            $carid = $row['car_id'];
        }

    
        $sql_edit = "UPDATE tb_car SET car_status = 2
                     WHERE car_id = '$carid'";
        mysqli_query($conn,$sql_edit);
    
    }
    checkstatus();


    $sql = "DELETE FROM tb_rent WHERE rent_id = '$id' ";
    mysqli_query($conn, $sql) or die ( "DELETE จาตาราง rent มีข้อผิดพลาดเกิดขึ้น".mysqli_error($conn));
    mysqli_close ( $conn );


    header("Location:../pages/admin.php?p=list_rent");
?>
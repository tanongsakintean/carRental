<?php
    require('../connect.php');
    $id = $_REQUEST['id'];

    $sql = "DELETE FROM tb_user WHERE user_id = '$id' ";
    mysqli_query($conn, $sql) or die("DELETE จากตารางมีข้อผิดพลาดเกิดขึ้น" .mysqli_error($conn));
    mysqli_close($conn);
    header("Location:../pages/admin.php?p=list_member");
?>
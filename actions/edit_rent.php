<?php

    require('../connect.php');

    $rent_id = $_POST['rent_id'];
    $rent_status = $_POST['rent_status'];

    $sql_edit = "UPDATE tb_rent SET rent_status ='$rent_status'
                     WHERE rent_id = '$rent_id'";
    $result = mysqli_query($conn, $sql_edit);
    header("Location:../pages/admin.php?p=list_rent");

?>
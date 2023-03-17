<?php

    require('../connect.php');
    $sql = "SELECT * FROM tb_user";
    $result = mysqli_query($conn, $sql);

?>
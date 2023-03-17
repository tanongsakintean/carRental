<?php

    require('../connect.php');
    $sql = "SELECT * FROM tb_rent";
    $result = mysqli_query($conn, $sql);

?>
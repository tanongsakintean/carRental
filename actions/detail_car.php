<?php
    require('../connect.php');

    // session_start();
    // Retrieve the value from the session variable
    if(isset($_SESSION['idcar'])) {
        $idcar = $_SESSION['idcar'];
    }
    
    $sql = "SELECT * FROM tb_car WHERE car_id = '$idcar'";
    $result = mysqli_query($conn,$sql);
    $data = mysqli_fetch_array($result);


?>



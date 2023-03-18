<?php
require('../connect.php');
session_start();
if (isset($_REQUEST) && !empty($_REQUEST)) {
    $user_id = $_REQUEST["user_id"];
    $user_email = $_REQUEST["user_email"];
    $user_password = $_REQUEST["user_password"];
    $user_title = $_REQUEST["user_title"];
    $user_fname = $_REQUEST["user_fname"];
    $user_lname = $_REQUEST["user_lname"];
    $user_gender = $_REQUEST["user_gender"];
    $user_tel = $_REQUEST["user_tel"];
    $user_address = $_REQUEST["user_address"];
    $user_age = $_REQUEST["user_age"];

    $profile_img = $_FILES["profile_img"]["name"];
    $picture = "";

    if ($_FILES['profile_img']['name'] == "") {
        echo '<b><li>คุณไม่ได้เลือกรูปภาพ</li></b><br>';
    } else {
        move_uploaded_file($_FILES["profile_img"]["tmp_name"], "../assets/images/" . $_FILES["profile_img"]["name"]);
        $picture = $_FILES['profile_img']['name'];
    }



    $sql = "UPDATE tb_user SET user_fname = '" . $user_fname . "', user_lname =  '" . $user_lname . "', user_title =  '" . $user_title . "',
    user_gender =  '" . $user_gender . "',    user_email =  '" . $user_email . "' ,    user_tel =  '" . $user_tel . "',    user_address =  '" . $user_address . "', profile_img = '" . $profile_img . "', user_age = '" . $user_age . "'
    WHERE user_id = '" . $user_id . "'
     ";
    $statement = $conn->query($sql);

    if ($statement) {
        $statement = $conn->query("SELECT * FROM tb_user WHERE user_id = '" . $user_id . "'");
        $_SESSION['ses_user'] = $statement->fetch_object();
    }


    echo "<script>window.location.replace('../pages/user.php?p=profile')</script>";
}

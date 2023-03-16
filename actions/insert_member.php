<?php
require('../connect.php');
if (isset($_POST) && !empty($_POST)) {
    $user_email = $_POST["user_email"];
    $user_password = $_POST["user_password"];
    $user_title = $_POST["user_title"];
    $user_fname = $_POST["user_fname"];
    $user_lname = $_POST["user_lname"];
    $user_gender = $_POST["user_gender"];
    $user_tel = $_POST["user_tel"];
    $user_address = $_POST["user_address"];
    $user_age = $_POST["user_age"];
    $user_status = $_POST["user_status"];

    $profile_img = $_FILES["profile_img"]["name"];

    if ($_FILES['profile_img']['name'] == "") {
        echo '<b><li>คุณไม่ได้เลือกรูปภาพ</li></b><br>';
    } else {
        move_uploaded_file($_FILES["profile_img"]["tmp_name"], "../assets/images/" . $_FILES["profile_img"]["name"]);
        $profile_img = $_FILES['profile_img']['name'];
    }

    $sql = "INSERT INTO tb_user 
            (profile_img, user_email, user_password, user_title, user_fname, user_lname, user_gender, user_tel, user_address, user_age, user_status)
            VALUES ('$profile_img', '$user_email', '$user_password', '$user_title', '$user_fname', '$user_lname', '$user_gender', '$user_tel', '$user_address', '$user_age', '$user_status')";

    mysqli_query($conn, $sql) or die("insert ลงตาราง tb_user มีข้อผิดพลาดเกิดขึ้น" . mysqli_error($conn));
    echo "<script>window.location.replace('../pages/admin.php?p=list_member')</script>";
    mysqli_close($conn);
}
?>
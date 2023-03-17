<?php
require('../connect.php');

$id = $_REQUEST['id'];
$sql = "SELECT * FROM tb_user WHERE user_id = '$id'";
$result = mysqli_query($conn, $sql);
$data = mysqli_fetch_array($result);

if (isset($_POST) && !empty($_POST)) {
    $user_id = $_POST["user_id"];
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
        move_uploaded_file($_FILES["proflie_img"]["tmp_name"], "../assets/images/" . $_FILES["profile_img"]["name"]);
        $car_img = $_FILES['profile_img']['name'];
    }

    $sql_ed = "UPDATE tb_user SET user_email='$user_email', user_password='$user_password',
         user_title='$user_title', user_fname='$user_fname', user_lname='$user_lname',
          user_gender='$user_gender', user_tel='$user_tel', user_address='$user_address',
           user_age='$user_age', user_status='$user_status' WHERE user_id = '$id'";
    $queue_edit = mysqli_query($conn, $sql_ed);

    header("Location:../pages/admin.php?p=list_member");
}
?>


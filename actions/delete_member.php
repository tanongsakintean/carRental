<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Delete</title>
</head>

<body>
    <?php
    require('../connect.php');
    $id = $_REQUEST['id'];
    $sql = "DELETE FROM tb_user WHERE user_id = '$id' ";
    mysqli_query($conn, $sql) or die("DELETE จากตารางมีข้อผิดพลาดเกิดขึ้น" . mysqli_error($conn));
    mysqli_close($conn);
    header("Location:list_member.php");
    ?>
</body>
</head>
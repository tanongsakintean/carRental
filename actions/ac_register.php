<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>

</body>

</html>
<?php
session_start();
require_once "../connect.php";
if (isset($_REQUEST['ac'])) {
    switch ($_REQUEST['ac']) {
        case 'reg':

            if ($_REQUEST['password'] != $_REQUEST['rePassword']) {
                echo "<script>
                Swal.fire(
                    {
                    icon:'error',
                    title:'รหัสผ่านไม่ตรงกัน!',
                    timer:1500,
                    showConfirmButton:false,
                } ) .then(()=>{
                    window.location.replace('../pages/register.php')
                  })
                  </script>";
            } else {
                $sql = "SELECT * FROM tb_user WHERE user_email = '" . $_REQUEST['email'] . "'";
                $statement = $conn->query($sql);
                if ($statement->num_rows > 0) {
                    echo "<script>
                    Swal.fire(
                        {
                        icon:'error',
                        title:'อีเมลล์ซ้ำ!',
                        timer:1500,
                        showConfirmButton:false,
                    } ) .then(()=>{
                        window.location.replace('../pages/register.php')
                      })
                      </script>";
                } else {
                    $sql = "INSERT INTO `tb_user`(`user_email`, `user_password`, `user_title`, `user_fname`, `user_lname`, `user_gender`, `user_tel`, `user_address`, `user_age`, `user_status`) VALUES
                     ('" . $_REQUEST['email'] . "','" . $_REQUEST['password'] . "','" . $_REQUEST['title'] . "','" . $_REQUEST['fname'] . "','" . $_REQUEST['lname'] . "','" . $_REQUEST['gender'] . "','" . $_REQUEST['tel'] . "','" . $_REQUEST['address'] . "','" . $_REQUEST['age'] . "',1)";

                    $statement = $conn->query($sql);

                    if ($statement) {
                        echo "<script>
                    Swal.fire(
                        {
                        icon:'success',
                        title:'สมัครสมาชิกสำเร็จ!',
                        timer:1500,
                        showConfirmButton:false,
                    } ) .then(()=>{
                        window.location.replace('../pages/login.php')
                      })
                      </script>";
                    }
                }
            }
            break;
    }
}

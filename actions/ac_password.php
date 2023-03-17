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
        case 'password':
            $sql = "SELECT * FROM tb_user WHERE user_email = '" . $_REQUEST['email'] . "'";
            $statement = $conn->query($sql);
            if ($statement->num_rows > 0) {
                $_SESSION['userPassId'] = $statement->fetch_object()->user_id;
                echo "<script>
                Swal.fire(
                    {
                    icon:'success',
                    title:'ยืนยันตัวตนสำเร็จ!',
                    timer:1500,
                    showConfirmButton:false,
                } ) .then(()=>{
                    window.location.replace('../pages/newPassword.php')
                  })
                  </script>";
            } else {
                echo "<script>
                Swal.fire(
                    {
                    icon:'error',
                    title:'ไม่พบอีเมลล์ในระบบ!',
                    timer:1500,
                    showConfirmButton:false,
                } ) .then(()=>{
                    window.location.replace('../pages/resetPassword.php')
                  })
                  </script>";
            }
            break;
    }
}

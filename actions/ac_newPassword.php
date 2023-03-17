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
        case 'new':
            if ($_REQUEST['newPassword'] == $_REQUEST['password']) {
                $sql = "UPDATE tb_user SET user_password = '" . $_REQUEST['password'] . "' WHERE user_id = '" . $_SESSION['userPassId'] . "'";
                $statement = $conn->query($sql);
                if ($statement) {
                    echo "<script>
                    Swal.fire(
                        {
                        icon:'success',
                        title:'เปลี่ยนรหัสผ่านสำเร็จ!',
                        timer:1500,
                        showConfirmButton:false,
                    } ) .then(()=>{
                        window.location.replace('../pages/login.php')
                      })
                      </script>";
                } else {
                    echo "<script>
                    Swal.fire(
                        {
                        icon:'error',
                        title:'เกิดข้อผิดพลาดโปรดลองอีกครั้ง!',
                        timer:1500,
                        showConfirmButton:false,
                    } ) .then(()=>{
                        window.location.replace('../pages/newPassword.php')
                      })
                      </script>";
                }
            } else {
                echo "<script>
                Swal.fire(
                    {
                    icon:'error',
                    title:'รหัสผ่านไม่ตรงกัน!',
                    timer:1500,
                    showConfirmButton:false,
                } ) .then(()=>{
                    window.location.replace('../pages/newPassword.php')
                  })
                  </script>";
            }
            break;
    }
}

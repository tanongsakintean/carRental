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
        case 'login':
            $sql = "SELECT * FROM tb_user WHERE user_email = '" . $_REQUEST['email'] . "'  AND user_password = '" . $_REQUEST['password'] . "'";
            $statement = $conn->query($sql);
            if ($statement->num_rows > 0) {
                $_SESSION['ses_user'] = $statement->fetch_object();
                $_SESSION['ses_id'] = session_id();
                echo "<script>
                Swal.fire(
                    {
                    icon:'success',
                    title:'ยินดีต้อนรับเข้าสู่ระบบ!',
                    timer:1500,
                    showConfirmButton:false,
                } ) .then(()=>{
                    window.location.replace('../index.php')
                  })
                  </script>";
            } else {
            }
            break;
    }
}

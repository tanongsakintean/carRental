<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Edite</title>
</head>

<body>
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

        header('Location:list_member.php');
    }
    ?>

    <h1>แบบฟอร์มแก้ไขข้อมูลสมาชิก</h1>
    <form enctype="multipart/form-data" action="" method="post">

    <label for="user_id">ไอดีผู้ใช้งาน:</label>
        <input type="text" id="user_id" name="user_id" required><br>

        <label for="user_email">อีเมลล์:</label>
        <input type="text" id="user_email" name="user_email" required><br>

        <label for="user_password">รหัสผ่าน:</label>
        <input type="text" id="user_password" name="user_password" required><br>

        <label for="user_title">คำนำหน้าชื่อ:</label>
        <select id="user_title" name="user_title" required>
            <option value="" selected>เลือกคำหน้าชื่อ: </option>";
            <option value="1">นาย</option>
            <option value="2">นางสาว</option>
            <option value="3">นาง</option>
        </select><br>

        <label for="user_fname">ชื่อ:</label>
        <input type="text" id="user_fname" name="user_fname" required><br>

        <label for="user_lname">นามสกุล:</label>
        <input type="text" id="user_lname" name="user_lname" required><br>

        <label for="user_gender">เพศ:</label>
        <input type="text" id="user_gender" name="user_gender" required><br>

        <label for="user_tel">เบอร์โทรศัพท์:</label>
        <input type="text" id="user_tel" name="user_tel" required><br>

        <label for="user_address">ที่อยู่:</label>
        <input type="text" id="	user_address" name="user_address" required><br>

        <label for="user_age">อายุ:</label>
        <input type="text" id="user_age" name="user_age" required><br>

        <label for="user_status">สถานะผู้ใช้งาน:</label>
        <select id="user_status" name="user_status" required>
            <option value="" selected>เลือกสถานะผู้ใช้งาน </option>";
            <option value="1">บุคคลทั่วไป</option>
            <option value="2">สมาชิก</option>
            <option value="3">แอดมิน</option>
        </select><br>

        <label for="profile_img">เลือกรูปโปรไฟล์:</label>
        <input type="file" id="profile_img" name="profile_img" size="50" required><br><br>

        <div>
            <input type="submit" name="Submit" value="บันทึกข้อมูล" style="cursor:hand">
            <input type="reset" name="Reset" value="ยกเลิก" style="cursor:hand">
        </div>

    </form>
</body>
</head>
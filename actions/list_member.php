<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Member</title>
</head>

<body>
    <?php
    //เชื่อมต่อฐานข้อมูล
    require('../connect.php');
    $sql = "SELECT * FROM tb_user";
    $result = mysqli_query($conn, $sql);

    ?>
    <center>
        <h1>แสดงผลข้อมูลสมาชิก</h1>
    </center>
    <table border=1 style="width:100%">
        <tr>
            <th>
                <h3>id</h3>
            </th>
            <th>
                <h3>Profile_img</h3>
            </th>
            <th>
                <h3>User_Email</h3>
            </th>
            <th>
                <h3>Password</h3>
            </th>
            <th>
                <h3>title</h3>
            </th>
            <th>
                <h3>FristName</h3>
            </th>
            <th>
                <h3>LastName</h3>
            </th>
            <th>
                <h3>Gender</h3>
            </th>
            <th>
                <h3>Telephone</h3>
            </th>
            <th>
                <h3>User_Address</h3>
            </th>
            <th>
                <h3>Age</h3>
            </th>
            <th>
                <h3>UserStatus</h3>
            </th>
            <th>
                <h3>Edit</h3>
            </th>
            <th>
                <h3>Delete</h3>
            </th>
        </tr>
        <?php
        foreach ($result as $data) { ?>
            <tr>
                <?php
                $type = "";
                switch ($data['user_title']) {
                    case "1":
                        $type = "นาย";
                        break;
                    case "2":
                        $type = "นางสาว";
                        break;
                    case "3":
                        $type = "นาง";
                        break;
                }

                $status = "";
                switch ($data['user_status']) {
                    case "1":
                        $status = "บุคคลทั่วไป";
                        break;
                    case "2":
                        $status = "สมาชิก";
                        break;
                    case "3":
                        $status = "แอดมิน";
                        break;
                }
                ?>
                <?php
                $Path = "../assets/images/"; //ระบุ path ของไฟล์รูปภาพที่จัดเก็บไว้ใน server
                $image = "<img src=$Path$data[profile_img] valign=middle align = center width=\"120\" height = \"100\">";
                ?>
                <th>
                    <?= $data['user_id'] ?>
                </th>
                <th>
                    <?= $image ?>
                </th>
                <th>
                    <?= $data['user_email'] ?>
                </th>
                <th>
                    <?= $data['user_password'] ?>
                </th>
                <th>
                    <?= $type ?>
                </th>
                <th>
                    <?= $data['user_fname'] ?>
                </th>
                <th>
                    <?= $data['user_lname'] ?>
                </th>
                <th>
                    <?= $data['user_gender'] ?>
                </th>
                <th>
                    <?= $data['user_tel'] ?>
                </th>
                <th>
                    <?= $data['user_address'] ?>
                </th>
                <th>
                    <?= $data['user_age'] ?>
                </th>
                <th>
                    <?= $status ?>
                </th>
                <th><a href="edit_member.php?id=<?= $data['user_id'] ?>">Edit</a></th>
                <th><a href="delete_member.php?id=<?= $data['user_id'] ?>"
                        onclick="return confirm(' ยืนยันการลบข้อมูลสมาชิก <?= $data['user_id'] ?> ')">delete</a></th>
            </tr>
        <?php } ?>
    </table>
    <center><a href="form_member.php">กลับหน้าหลัก</a></center>

</body>

</html>
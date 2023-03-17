<?php
require('../connect.php');
$sql = "SELECT * FROM tb_user";
$result = mysqli_query($conn, $sql);
?>

<?php
require("../layouts/head.php");
?>

<div class="card">
    <div class="card-header">
        <h3 class="card-title">จัดการสมาชิก</h3>
    </div>

    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th style="text-align:center;"><h5>ลำดับ</h5></th>
                    <th style="text-align:center;"><h5>รูปภาพ</h5></th>
                    <th style="text-align:center;"><h5>อีเมล</h5></th>
                    <th style="text-align:center;"><h5>รหัสผ่าน</h5></th>
                    <th style="text-align:center;"><h5>คำนำหน้าชื่อ</h5></th>
                    <th style="text-align:center;"><h5>ชื่อ</h5></th>
                    <th style="text-align:center;"><h5>นามสกุล</h5></th>
                    <th style="text-align:center;"><h5>เพศ</h5></th>
                    <th style="text-align:center;"><h5>เบอร์โทรศัพท์</h5></th>
                    <th style="text-align:center;"><h5>ที่อยู่</h5></th>
                    <th style="text-align:center;"><h5>อายุ</h5></th>
                    <th style="text-align:center;"><h5>สถานะ</h5></th>
                    <th style="text-align:center;"><h5>แก้ไขข้อมูล</h5></th>
                    <th style="text-align:center;"><h5>ลบข้อมูล</h5></th>
                </tr>
            </thead>
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
                    $image = "<img src=$Path$data[profile_img] valign=middle align = center width=\"150\" height = \"100\">";
                    ?>
                    
                    <td style="text-align:center;"><?= $data['user_id'] ?></td>
                    <td style="text-align:center;"><?= $image ?></td>
                    <td style="text-align:center;"><?= $data['user_email'] ?></td>
                    <td style="text-align:center;"><?= $data['user_password'] ?></td>
                    <td style="text-align:center;"><?= $type ?></td>
                    <td style="text-align:center;"><?= $data['user_fname'] ?></td>
                    <td style="text-align:center;"><?= $data['user_lname'] ?></td>
                    <td style="text-align:center;"><?= $data['user_gender'] ?></td>
                    <td style="text-align:center;"><?= $data['user_tel'] ?></td>
                    <td style="text-align:center;"><?= $data['user_address'] ?></td>
                    <td style="text-align:center;"><?= $data['user_age'] ?></td>
                    <td style="text-align:center;"><?= $status ?></td>
                    <td style="text-align:center;"><button type="button" class="btn btn-warning"><a href="?p=edit_member.php?id=<?= $data['user_id'] ?>"style="color:black;">Edit</a></button></td>
                    <td style="text-align:center;"><button type="button" class="btn btn-danger"><a href="../actions/delete_member.php?id=<?= $data['user_id'] ?>"onclick="return confirm(' ยืนยันการลบข้อมูลสมาชิก <?= $data['user_id'] ?> ')" style="color:white;">delete</a></td>
                </tr>
            <?php } ?>
            </tbody>

        </table>
    </div>
    <!-- /.card-body -->
</div>
<!-- /.card -->


<?php
require("../layouts/js.php");
?>
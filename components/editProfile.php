<?php
require('../connect.php');
$id = $_REQUEST['id'];
$sql = "SELECT * FROM tb_user WHERE user_id = '$id'";
$result = mysqli_query($conn, $sql);
$data = mysqli_fetch_array($result);
?>

<br><br>
<section class="content">
    <div class="container-sm">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">แก้ไขสมาชิก</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form enctype="multipart/form-data" action="../actions/ac_editProfile.php?user_id=<?php echo $id; ?>" method="post">
                <div class="card-body">
                    <div class="form-group">
                        <label for="user_email">อีเมลล์:</label>
                        <input type="text" value="<?= $data['user_email'] ?>" class="form-control" id="user_email" name="user_email" required>
                    </div>

                    <div class="form-group">
                        <label for="user_password">รหัสผ่าน:</label>
                        <input type="text" value="<?= $data['user_password'] ?>" class="form-control" id="user_password" name="user_password" required>
                    </div>

                    <div class="form-group">
                        <label>คำนำหน้าชื่อ:</label>
                        <select value="<?= $data['user_title'] ?>" class="form-control" id="user_title" name="user_title" required>
                            <option value="" selected>เลือกคำหน้าชื่อ: </option>";
                            <option value="1" <?php echo ($data['user_title'] == 1) ? "selected" : "" ?>>นาย</option>
                            <option value="2" <?php echo ($data['user_title'] == 2) ? "selected" : "" ?>>นางสาว</option>
                            <option value="3" <?php echo ($data['user_title'] == 3) ? "selected" : "" ?>>นาง</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="user_fname">ชื่อ:</label>
                        <input type="text" value="<?= $data['user_fname'] ?>" class="form-control" id="user_fname" name="user_fname" required>
                    </div>
                    <div class="form-group">
                        <label for="user_lname">นามสกุล:</label>
                        <input type="text" value="<?= $data['user_lname'] ?>" class="form-control" id="user_lname" name="user_lname" required>
                    </div>
                    <div class="form-group">
                        <label for="user_gender">เพศ:</label>
                        <select class="form-control" id="user_title" name="user_gender" required>
                            <option value="" selected>เลือกเพศ: </option>";
                            <option value="1" <?php echo ($data['user_gender'] == 1) ? "selected" : "" ?>>ชาย</option>
                            <option value="2" <?php echo ($data['user_gender'] == 2) ? "selected" : "" ?>>หญิง</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="user_tel">เบอร์โทรศัพท์:</label>
                        <input type="text" maxlength="10" value="<?= $data['user_tel'] ?>" class="form-control" id="user_tel" name="user_tel" required>
                    </div>
                    <div class="form-group">
                        <label for="user_address">ที่อยู่:</label>
                        <textarea type="text" class="form-control" id="user_address" name="user_address" required><?= $data['user_address'] ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="user_age">อายุ:</label>
                        <input type="number" value="<?= $data['user_age'] ?>" class="form-control" id="user_age" name="user_age" required>
                    </div>



                    <div class="form-group">
                        <label for="profile_img">เลือกรูปโปรไฟล์:</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="profile_img" name="profile_img" size="100" required>
                                <label class="custom-file-label" for="profile_img">Choose file</label>
                            </div>
                            <div class="input-group-append">
                                <span class="input-group-text">Upload</span>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer  d-flex justify-content-end">
            <button type="submit" class="btn btn-warning">แก้ไขข้อมูล</button>
        </div>
        <br>
        </form>
    </div>
    </div>
</section>
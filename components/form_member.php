<br><br>
<section class="content">
    <div class="container-sm">
        <div class="card card-primary">
            <div class="card-header">
                <h1 class="card-title">แบบฟอร์มเพิ่มสมาชิก</h1>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form enctype="multipart/form-data" action="../actions/insert_member.php" method="post">
                <div class="card-body"></div>
                <div class="form-group">
                    <label for="user_email">อีเมลล์:</label>
                    <input type="text" id="user_email" name="user_email" required><br>
                </div>

                <div class="form-group">
                    <label for="user_password">รหัสผ่าน:</label>
                    <input type="text" id="user_password" name="user_password" required><br>
                </div>

                <div class="form-group">
                    <label>คำนำหน้าชื่อ:</label>
                    <select id="user_title" name="user_title" required>
                        <option value="" selected>เลือกคำหน้าชื่อ: </option>";
                        <option value="1">นาย</option>
                        <option value="2">นางสาว</option>
                        <option value="3">นาง</option>
                    </select><br>
                </div>

                <div class="form-group">
                    <label for="user_fname">ชื่อ:</label>
                    <input type="text" id="user_fname" name="user_fname" required><br>
                </div>
                <div class="form-group">
                    <label for="user_lname">นามสกุล:</label>
                    <input type="text" id="user_lname" name="user_lname" required><br>
                </div>
                <div class="form-group">
                    <label for="user_gender">เพศ:</label>
                    <input type="text" id="user_gender" name="user_gender" required><br>
                </div>
                <div class="form-group">
                    <label for="user_tel">เบอร์โทรศัพท์:</label>
                    <input type="text" id="user_tel" name="user_tel" required><br>
                </div>
                <div class="form-group">
                    <label for="user_address">ที่อยู่:</label>
                    <input type="text" id="	user_address" name="user_address" required><br>
                </div>
                <div class="form-group">
                    <label for="user_age">อายุ:</label>
                    <input type="text" id="user_age" name="user_age" required><br>
                </div>

                <div class="form-group">
                    <label>สถานะผู้ใช้งาน:</label>
                    <select id="user_status" name="user_status" required>
                        <option value="" selected>เลือกสถานะผู้ใช้งาน </option>";
                        <option value="1">บุคคลทั่วไป</option>
                        <option value="2">สมาชิก</option>
                        <option value="3">แอดมิน</option>
                    </select><br>
                </div>

                <div class="form-group">
                    <label for="profile_img">เลือกรูปโปรไฟล์:</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" id="profile_img" name="profile_img" size="100" required><br><br>
                            <label class="custom-file-label" for="profile_img">Choose file</label>
                        </div>
                        <div class="input-group-append">
                            <span class="input-group-text">Upload</span>
                        </div>
                    </div>
                </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <input type="submit" name="Submit" value="บันทึกข้อมูล" style="cursor:hand">
            <input type="reset" name="Reset" value="ยกเลิก" style="cursor:hand">
        </div>
        </form>
    </div>

    <!-- /.card -->

    <!-- /.row -->
    </div><!-- /.container-fluid -->
</section>
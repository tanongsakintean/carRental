<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ระบบเช่ารถยนต์</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../dist/css/adminlte.min.css">
</head>

<body class="hold-transition register-page">
    <div class="register-box">
        <div class="register-logo">
            <a href="#"><b>ระบบเช่ารถยนต์</b></a>
        </div>

        <div class="card">
            <div class="card-body register-card-body">
                <p class="login-box-msg">สมัครสมาชิกเข้าใช้งาน</p>

                <form action="../actions/ac_register.php" method="post">
                    <div class="input-group mb-3">
                        <select class="form-control" placeholder="คำนำหน้า" name="title" required>
                            <option selected disabled>เลือกคำนำหน้า</option>
                            <option value="1">นาย</option>
                            <option value="2">นาง</option>
                            <option value="3">นางสาว</option>
                        </select>
                        <div class="input-group-append">
                            <div class="input-group-text">
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="fname" placeholder="ชื่อจริง">
                        <div class="input-group-append">
                            <div class="input-group-text">
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="lname" placeholder="นามสกุล">
                        <div class="input-group-append">
                            <div class="input-group-text">
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <select class="form-control" name="gender" required>
                            <option selected disabled>เลือกเพศ</option>
                            <option value="1">ชาย</option>
                            <option value="2">หญิง</option>
                        </select>
                        <div class="input-group-append">
                            <div class="input-group-text">
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input name="tel" type="text" maxlength="10" class="form-control" placeholder="เบอร์โทร">
                        <div class="input-group-append">
                            <div class="input-group-text">
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <textarea name="address" placeholder="ที่อยู่" class="form-control" id="" cols="30" rows="2"></textarea>
                        <div class="input-group-append">
                            <div class="input-group-text">
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="email" name="email" class="form-control" placeholder="อีเมลล์">
                        <div class="input-group-append">
                            <div class="input-group-text">
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input id="newPassword" type="password" name="password" class="form-control" placeholder="รหัสผ่านใหม่">
                        <div class="input-group-append">
                            <div class="input-group-text">
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input id="retypePassword" type="password" class="form-control" placeholder="ยืนยันรหัสผ่าน">
                        <div class="input-group-append">
                            <div class="input-group-text">
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <!-- /.col -->
                        <div class="">
                            <button type="submit" class="btn btn-primary btn-block">สมัครสมาชิก</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>
                <br>
                <a href="./login.php" class="text-center">มี ชื่อผู้ใช้งานแล้ว ? </a>
            </div>
            <!-- /.form-box -->
        </div><!-- /.card -->
    </div>
    <!-- /.register-box -->

    <!-- jQuery -->
    <script src="../plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../dist/js/adminlte.min.js"></script>
</body>

</html>


<script>
    function checkPassword() {
        let password = document.getElementById('#Password').value;
        let newPassword = document.getElementById('#newPassword').value;
    }
</script>
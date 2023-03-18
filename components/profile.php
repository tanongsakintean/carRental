<?php session_start(); ?>
<div class="container">
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid d-flex justify-content-center">
            <a class="navbar-brand " style="font-size:3rem" href="#">ข้อมูลส่วนตัว</a>
        </div>
    </nav>
    <div class="row">
        <div class="col-md-4">
            <div class="card text-center sidebar" style="height: auto;padding:10px 5px">
                <div class="card-boby">
                    <img src="../assets/images/<?php echo $_SESSION['ses_user']->profile_img; ?>" class="rounded-circle" width="150">
                </div>
            </div>
            <a href="?p=editProfile&id=<?php echo $_SESSION['ses_user']->user_id; ?>" class=" btn btn-primary">แก้ไขข้อมูลส่วนตัว</a>
        </div>
        <div class="col-md-8 mt-1">
            <div class="card mb-3 content">
                <h4 class="m-3 pt-3">รายละเอียดข้อมูลส่วนตัว</h4>
                <div class="card-body">
                    <div class="col-md-3">
                        <h5>ชื่อจริง</h5>
                    </div>
                    <div class="col-md-9 text-secondary">
                        <?php if ($_SESSION['ses_user']->user_title == 1) { ?>
                            นาย
                        <?php } else if ($_SESSION['ses_user']->user_title == 2) { ?>
                            นางสาว
                        <?php } else { ?>
                            นาง
                        <?php } ?>
                        <?php echo " " . $_SESSION['ses_user']->user_fname . " " . $_SESSION['ses_user']->user_lname; ?>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-3 m-lg-2">
                        <h5>อีเมล</h5>
                    </div>
                    <div class="col-md-5 text-secondary m-lg-3">
                        <?php echo $_SESSION['ses_user']->user_email; ?>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-3 m-lg-2">
                        <h5>เพศ</h5>
                    </div>
                    <div class="col-md-5 text-secondary m-lg-2">
                        <?php if ($_SESSION['ses_user']->user_gender == 1) { ?>
                            ชาย
                        <?php } else { ?>
                            หญิง
                        <?php } ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 m-lg-2">
                        <h5>อายุ</h5>
                    </div>
                    <div class="col-md-5 text-secondary m-lg-2">
                        <?php echo $_SESSION['ses_user']->user_age; ?> ปี
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 m-lg-2">
                        <h5>ทีอยู่</h5>
                    </div>
                    <div class="col-md-5 text-secondary m-lg-2">
                        <p> <?php echo $_SESSION['ses_user']->user_address; ?></p>
                    </div>
                    <div class="row">
                        <div class="col-md-3 m-lg-2">
                            <h5>เบอร์โทรศัพท์</h5>
                        </div>
                        <div class="col-md-5 text-secondary m-lg-2">
                            <?php echo $_SESSION['ses_user']->user_tel; ?>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>
<!-- </body>

</html> -->

<!-- <htm1>
<head>
<link rel="stylesheet” type="text/css" href="bootstrap-4.5.3-dist/css/bootstrap.min.css">
<link rel="stylesheet” href="profile.css">

</head>
<body>
    <div class="container">
        <div class="main">
            <div class="topbar">
            <a href="">logout</a>
            <a href="">Support</a>
            <a href="">work</a>
            <a href="">Home</a>
        </div>
        <div class="row">
            <div class="col-md-4 mt-1">
                <div class="card text-center sidebar">
                    <div class ="card-boby">
                        <img src="image.jpg" class="rounded-circle" width="150">
                        <div class="mt-3">
                            <h3>Burk Macklin</h3>
                            <a href="">Home</a>
                            <a href="">work</a>
                            <a href="">Support</a>
                            <a href="">Setting</a>
                            <a href="">Signout</a>
                        </div>
                    </div>
                </div> 
            </div>
            <div class="col-md-8 mt-1">
                <div class="card mb-3 content">
                    <h1 class="m-3 pt-3">About</h1>
                    <div class="card-body">
                        <div class="col-md-3">
                            <h5>Full Name</h5>
                        </div>
                        <div class="col-md-9 text-secondary">
                            Burt Macklin
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-3">
                            <h5>Email</h5>
                        </div>
                        <div class="col-md-9 text-secondary">
                            abc@gmail.com
                        </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-3">
                                <h5>Phone</h5>    
                            </div>
                            <div class="col-md-9 text-secondary">
                                00923469874656
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <h5>Address</h5>
                            </div>
                            <div class="col-md-9 text-secondary">
                                street no.  4m xyz
                            </div>
                        </div>
                    </div>    
                </div>
                <div class="card mb-3 content">
                    <h1 class="m-3">Recent Projects</h1>
                    <div class"card-body">
                        <div class="row">
                            <div class="col-md-3">
                                <h5>Project name</h5>
                            </div>
                            <div class="col-md-3 text-secondary">
                                Project Description
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html> -->
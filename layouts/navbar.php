<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">


        <li class="nav-item">
            <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                <i class="fas fa-expand-arrows-alt"></i>
            </a>
        </li>
        <li class="nav-item dropdown">
            <?php
            if (isset($_SESSION['ses_user'])) {
            ?>
                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                    <?php echo  "คุณ " . $_SESSION['ses_user']->user_fname . " " . $_SESSION['ses_user']->user_lname ?>
                </a>
            <?php } else {  ?>
                <a class="nav-link " href="../pages/login.php" role="button">
                    เข้าสู่ระบบ
                </a>
            <?php } ?>
            <div class="dropdown-menu">
                <a class="dropdown-item text-center" href="?p=profile"><i class="fas fa-user"></i> โปรไฟล์</a>
                <a class="nav-link d-flex justify-content-center" href="../pages/logout.php" role="button">
                    <span>ออกจากระบบ</span> <i class="fas fa-right-from-bracket mt-2 ml-2"></i>
                </a>
            </div>
        </li>
    </ul>
</nav>
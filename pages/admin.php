<?php
require("../layouts/head.php");
?>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="../dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
        </div>

        <!-- Navbar -->
        <?php
        require("../layouts/navbar.php");
        ?>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <?php
        require("../layouts/sidebar.php");
        ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <?php
            if (isset($_REQUEST['p'])) {
                require("../components/" . $_REQUEST['p'] . ".php");
            } else {
                require("../components/dashboard.php");
            }
            ?>
        </div>
        <!-- /.content-wrapper -->
        <?php
        require("../layouts/footer.php");
        ?>
        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->
    <?php
    require("../layouts/js.php");
    ?>
<?php
session_start();
session_destroy();
// echo  $_SESSION['ses_user'];
echo "<script>window.location.replace('../index.php')</script>";

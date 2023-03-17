<?php
session_start();
require_once "./connect.php";


if (isset($_SESSION['ses_id']) && $_SESSION['ses_id'] == session_id()) {
    if ($_SESSION['ses_user']->user_status == 3) {
        header("Location: ./pages/admin.php");
    } else {
        header("Location: ./pages/user.php");
    }
} else {
    header("Location: ./pages/login.php");
}

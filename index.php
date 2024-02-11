<?php
session_start();

if (isset($_SESSION['user'])) {
    $user = $_SESSION['user'];

    if ($user['type'] == 1) {
        header('location: admin/index.php');
    } else {
        include_once 'views/user.php';
    }
} else {
    header('location: pages/login.php');
}

?>
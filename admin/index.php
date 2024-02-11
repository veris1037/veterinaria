<?php
include_once '../class/config.php';
session_start();

if (isset($_SESSION['user'])) {
    $user = $_SESSION['user'];

    if ($user['type'] == 1) {
        
        if (isset($_GET['view'])) {
            $view = $_GET['view'];

            switch($view) {
                case 'contact';
                    include_once 'views/contact.php';
                    break;
                
                case 'event';
                    include_once 'views/event.php';
                    break;
                
                case 'users';
                    include_once 'views/users.php';
                    break;

                default:
                    include_once 'views/admin.php';
                    break;
            }
        } else {
            include_once 'views/admin.php';
        }

    } else {
        header('location: ../pages/login.php');
    }
} else {
    header('location: ../pages/login.php');
}

?>
<?php
include_once '../class/user.php';
session_start();

function register() {
    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];

    $userObj = new User();
    $result = $userObj->createUser([
        'name' => $name,
        'lastname' => $lastname,
        'email' => $email,
        'phone' => $phone,
        'password' => $password
    ]);

    header('Content-Type: application/json');
    echo json_encode([ 'status' => 200, 'message' => 'ok' ]);
}

function login() {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $userObj = new User();
    $result = $userObj->login($email, $password);

    header('Content-Type: application/json');
    if ($result) {
        $_SESSION['user'] = $result;
        echo json_encode([ 'status' => 200, 'message' => 'ok' ]);

    } else {
        echo json_encode([ 'status' => 403, 'message' => 'Usuario o contraseña incorrectos' ]);
    }
}

if ($_POST['action']) {
    $action = $_POST['action'];
    switch($action) {
        case 'login':
            login();
            break;
        case 'register':
            register();
            break;
    }
}

?>

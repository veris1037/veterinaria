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

function getAll() {
    $userObj = new User();
    $result = $userObj->getAll();

    if ($result) {
        echo json_encode([ 'status' => 200, 'message' => 'ok', 'data' => $result ]);
    } else {
        echo json_encode([ 'status' => 403, 'message' => 'Error al obtener usuario' ]);
    }
}

function deleteUser() {
    if (!isset($_GET['id_user']) || $_GET['id_user'] != '') {
        echo json_encode([ 'status' => 403, 'message' => 'ID invalido' ]);
        return false;
    }

    $userObj = new User();
    $id_user = $_GET['id_user'];

    if ($id_user) {
        $result = $userObj->delete($id_user);
        if ($result) {
            echo json_encode([ 'status' => 200, 'message' => 'ok']);
            return true;
        } else {
            echo json_encode([ 'status' => 403, 'message' => 'Error al eliminar usuario' ]);
            return false;
        }
    } else {
        echo json_encode([ 'status' => 403, 'message' => 'ID invalido' ]);
        return false;
    }

}

function updateUser() {
    if (isset($_POST['id']) || $_POST['id'] != '') {
        echo json_encode([ 'status' => 403, 'message' => 'Id invalido' ]);
    }

    $id = $_POST['id'];
    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];

    $userObj = new User();
    $result = $userObj->updateUser([
        'id' => $id,
        'name' => $name,
        'lastname' => $lastname,
        'email' => $email,
        'phone' => $phone,
        'password' => $password
    ]);

    if ($result) {
        echo json_encode([ 'status' => 200, 'message' => 'ok' ]);
    } else {
        echo json_encode([ 'status' => 403, 'message' => 'Error al actualizar usuario' ]);
    }
}

if (isset($_POST['action']) && $_POST['action'] != '') {
    $action = $_POST['action'];
    switch($action) {
        case 'login':
            login();
            break;
        case 'register':
            register();
            break;
        case 'update':
            updateUser();
            break;
    }
}

if (isset($_GET['action']) && $_GET['action'] != '') {
    $action = $_GET['action'];
    switch($action) {
        case 'get-all':
            getAll();
            break;
        case 'delete':
            deleteUser();
            break;
    }
}

?>

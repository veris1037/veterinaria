<?php
include_once '../class/contact.php';

function create() {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $comment = $_POST["comment"];

    $contactObj = new Contact();
    $result = $contactObj->create([
        'name' => $name,
        'email' => $email,
        'comment' => $comment,
    ]);

    if($result) {
        header('Content-Type: application/json');
        echo json_encode([ 'status' => 200, 'message' => 'ok' ]);
    } else {
        header('Content-Type: application/json');
        echo json_encode([ 'status' => 400, 'message' => 'error' ]);
    }
}

function show() {
    $contactObj = new Contact();
    $contacts = $contactObj->getAll();

    if($contacts) {
        header('Content-Type: application/json');
        echo json_encode([ 'status' => 200, 'message' => 'ok', 'data' => $contacts ]);
    } else {
        header('Content-Type: application/json');
        echo json_encode([ 'status' => 400, 'message' => 'error' ]);
    }
}

function delete() {
    $id = $_GET['id'];

    $contactObj = new Contact();
    $result = $contactObj->delete($id);

    if($result) {
        header('Content-Type: application/json');
        echo json_encode([ 'status' => 200, 'message' => 'ok' ]);
    } else {
        header('Content-Type: application/json');
        echo json_encode([ 'status' => 400, 'message' => 'error' ]);
    }
}

if (isset($_POST['action'])) {
    $action = $_POST['action'];
    switch($action) {
        case 'create':
            create();
            break;
    }
}

if (isset($_GET['action'])) {
    $action = $_GET['action'];
    switch($action) {
        case 'getall':
            show();
            break;
        case 'delete':
            delete();
            break;
    }
}

?>
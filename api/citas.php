<?php
include_once '../class/citas.php';

function create() {
    $id_user = $_POST["id_user"];
    $date = $_POST["date"];
    $detail = $_POST["detail"];

    $citaObj = new Cita();
    $result = $citaObj->create([
        'id_user' => $id_user,
        'date' => $date,
        'detail' => $detail,
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
    $citaObj = new Cita();
    $events = $citaObj->getAll();

    if($events) {
        header('Content-Type: application/json');
        echo json_encode([ 'status' => 200, 'message' => 'ok', 'data' => $events ]);
    } else {
        header('Content-Type: application/json');
        echo json_encode([ 'status' => 400, 'message' => 'error' ]);
    }
}

function delete() {
    $id = $_GET['id'];

    $citaObj = new Cita();
    $result = $citaObj->delete($id);

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
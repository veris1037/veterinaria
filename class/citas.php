<?php
include_once 'db.php';

class Cita extends DB {
    public function create($data) {
        $id_user = $data["id_user"];
        $date = $data["date"];
        $detail = $data["detail"];

        $query = $this->connect()->prepare('INSERT INTO event (id_user, date, detail) VALUES (:id_user, :date, :detail)');
        $success = $query->execute([
            'id_user' => $id_user,
            'date'    => $date,
            'detail'  => $detail
        ]);

        if ($success) {
            return true;
        } else {
            return false;
        }
    }

    public function getAll() {
        $query = $this->connect()->prepare('SELECT * FROM event');
        $query->execute();

        if($query->rowCount()) {
            $items = [];
            while($row = $query->fetch(PDO::FETCH_ASSOC)){
                $item = [
                        'id'        => $row['id'],
                        'id_user'   => $row['id_user'],
                        'date'      => $row['date'],
                        'detail'    => $row['detail'],
                        ];
                array_push($items, $item);
            }
            return $items;
        } else {
            return false;
        }
    }

    public function delete($id) {
        if(!isset($id)) {
            return false;
        }

        $query = $this->connect()->prepare('DELETE FROM event WHERE id = :id');
        $result = $query->excute(['id' => $id]);

        if ($result) {
            return true;
        } else {
            return false;
        }
    }
}

?>
<?php
include_once 'db.php';

class Contact extends DB{
    public function create($data) {
        $name = $data["name"];
        $email = $data["email"];
        $comment = $data["comment"];

        $query = $this->connect()->prepare('INSERT INTO contact (name, email, comment) VALUES (:name, :email, :comment)');
        $success = $query->execute([
            'name'     => $name,
            'email'    => $email,
            'comment'  => $comment
        ]);

        if ($success) {
            return true;
        } else {
            return false;
        }
    }

    public function getAll() {
        $query = $this->connect()->prepare('SELECT * FROM contact');
        $query->execute();

        if($query->rowCount()) {
            $items = [];
            while($row = $query->fetch(PDO::FETCH_ASSOC)){
                $item = [
                    'id'        => $row['id'],
                    'name'      => $row['name'],
                    'email'      => $row['email'],
                    'comment'    => $row['comment'],
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

        $query = $this->connect()->prepare('DELETE FROM contact WHERE id = :id');
        $result = $query->execute(['id' => $id]);

        if ($result) {
            return true;
        } else {
            return false;
        }
    }
}

?>
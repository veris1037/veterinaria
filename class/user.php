<?php
include 'db.php';

class User extends DB{
    private $nombre;
    private $username;

    public function login($user, $user_pass){
        $query = $this->connect()->prepare('SELECT * FROM user WHERE email = :email');
        $query->execute(['email' => $user]);

        if($query->rowCount()){
            $row = $query->fetch();

            if (password_verify($user_pass, $row['password'])) {
                return [
                    'id'        => $row['id'],
                    'name'    => $row['name'],
                    'lastname'    => $row['lastname'],
                    'email' => $row['email'],
                    'phone' => $row['phone'],
                    'type'    => $row['type']
                ];
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    public function getAll() {
        $query = $this->connect()->prepare('SELECT * FROM user');
        $query->execute();

        if($query->rowCount()) {
            $items = [];
            while($row = $query->fetch(PDO::FETCH_ASSOC)){
                $item = [
                        'name'        => $row['name'],
                        'lastname'   => $row['lastname'],
                        'email'      => $row['email'],
                        'phone'    => $row['phone'],
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

        $query = $this->connect()->prepare('DELETE FROM user WHERE id = :id');
        $result = $query->excute(['id' => $id]);

        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    function createUser($info_user){
        $cre_nombre = $info_user['name'];
        $cre_apellido = $info_user['lastname'];
        $cre_correo = $info_user['email'];
        $cre_phone = $info_user['phone'];
        $cre_clave = $info_user['password'];

        $cre_pass = password_hash($cre_clave, PASSWORD_DEFAULT, ['cost' => 5]);

        $query = $this->connect()->prepare('INSERT INTO user (id, email, name, lastname, password, phone, type) VALUES (NULL, :email, :name, :lastname, :password, :phone, :type)');
        $query->execute([
            'email' => $cre_correo,
            'name' => $cre_nombre,
            'lastname' => $cre_apellido,
            'password' => $cre_pass,
            'phone' => $cre_phone,
            'type' => 2
        ]);

        return true;
    }
}

?>
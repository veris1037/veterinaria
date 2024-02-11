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
                        'id' => $row['id'],
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
        $result = $query->execute(['id' => $id]);

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

    function updateUser($info_user) {
        $sql = "UPDATE usuarios SET";
        $params = [];

        if (isset($info_user['name']) && $info_user['name'] != '') {
            $sql .= " name = :name,";
            $params += ["name" => $info_user['name']];
        }

        if (isset($info_user['lastname']) && $info_user['lastname'] != '') {
            $sql .= " lastname = :lastname,";
            $params += ["lastname" => $info_user['lastname']];
        }

        if (isset($info_user['email']) && $info_user['email'] != '') {
            $sql .= " email = :email,";
            $params += ["email" => $info_user['email']];
        }

        if (isset($info_user['phone']) && $info_user['phone'] != '') {
            $sql .= " phone = :phone,";
            $params += ["phone" => $info_user['phone']];
        }

        if (isset($info_user['type']) && $info_user['type'] != '') {
            $sql .= " type = :type,";
            $params += ["type" => $info_user['type']];
        }

        if (isset($info_user['password']) && $info_user['password'] != '') {
            $sql .= " password = :password,";
            $params += ["password" => $info_user['password']];
        }

        if (substr($sql, -1) === ',') {
            $sql = rtrim($sql, ',');
        }

        $sql .= " WHERE id=:id";
        $params += ["id" => $info_user['id']];

        $query = $this->connect()->prepare($sql);
        $result = $query->execute($params);

        if ($result) {
            return true;
        } else {
            return false;
        }
    }
}

?>
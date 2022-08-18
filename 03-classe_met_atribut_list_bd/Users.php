<?php

/**
 * Description of Users
 *
 * @author Windows 10
 */
require './Conn.php';

class Users {

    public $connect;

    public function list() {
        $conn = new Conn();

        $this->connect = $conn->conectar();

        $query_users = "SELECT id, nome, email FROM users ORDER BY id ASC LIMIT 40";

        $result_users = $this->connect->prepare($query_users);
        $result_users->execute();
        return $result_users->fetchAll();
    }

}

<?php

/**
 * Description of Conn
 *
 * @author Windows 10
 */
class Conn {

    public $host = "localhost";
    public $user = "root";
    public $pass = "";
    public $dbname = "cursocelke";
    public $port = "3306";
    public $connect = null;

    public function conectar() {
        try {
            $this->connect = new PDO('mysql:host='. $this->host . ';port=' . $this->port . ';dbname=' . $this->dbname, $this->user, $this->pass);
            //echo "Conexão com banco de dados realizzada com sucesso!!";
            return $this->connect;
        } catch (Exception $ex) {
            //echo "Conexão Não realizada com Sucesso!! " . $ex;
            return false;
        }
    }
}

<?php
class Dbconf {
    protected $db_con;
    public function __construct() {
        try{
            $this->db_con = new PDO("mysql:host=localhost;dbname=db_webhr","root","");
            $this->db_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        } catch (PDOException $ex) {
            echo 'Connection error occure'.$ex;
        }
    }
}

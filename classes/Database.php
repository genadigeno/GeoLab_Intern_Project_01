<?php
/**
 * Created by PhpStorm.
 * User: GENO
 * Date: 5/13/2018
 * Time: 09:59
 */

class Database
{
    private $host;
    private $username;
    private $password;
    private $dbName;

    public function connect(){
        $this->host = "localhost";
        $this->username = "root";
        $this->password = "";
        $this->dbName = "car_service";

        $connection = new mysqli($this->host, $this->username, $this->password, $this->dbName);

        return $connection;
    }


}
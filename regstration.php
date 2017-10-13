<?php

include './form_regestration.php';

class db {

    public $host = '127.0.0.1';
    public $user = 'root';
    public $pass = '';
    public $db_name = 'oop';
    public $link;
    public $query;
    public $query_drop;

    private function conn() {
        $this->link = mysqli_connect($this->host, $this->user, $this->pass, $this->db_name);
    }

    function __construct() {
        $this->conn();
    }

    function insert($query) {
        $result = $this->link->query($query);
        if ($result) {
            echo '<br><h2><center>regestration successful</center></h2>';
        } else {
            echo '<h2><center>regestration faild</center></h2>';
        }
    }

    function drop($query_drop) {
        $result = $this->link->query($query_drop);
        if ($result) {
            echo '<center><h2>drop user successful</h2></center>';
        } else {
            echo '<center><h2>drop user faild</h2></center>';
        }
    }

}

$db = new db();

if (isset($_POST['send'])) {
    $name = $_POST['Name'];
    $email = $_POST['Email'];
    $pass = $_POST['Pass'];
    $query = "INSERT INTO `users` (`ID`,`USER_NAME`, `UESR_EMAIL`, `USER_PASS`)"
            . " VALUES (NULL,'$name', '$email', '$pass')";
    $db->insert($query);
}


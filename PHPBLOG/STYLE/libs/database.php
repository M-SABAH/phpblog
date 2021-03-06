<?php

class database {

    public $host = DB_HOST;
    public $user = DB_USER;
    public $pass = DB_PASS;
    public $db_name = DB_NAME;
    public $link;

    public function __construct() {

        $this->connect();
    }

    private function connect() {

        $this->link = new mysqli($this->host, $this->user, $this->pass, $this->db_name);
    }

    public function select($query) {

        $result = $this->link->query($query);


        if ($result->num_rows>0) {
            return $result;
        } else {
            return FALSE;
        }
    }

    public function insert($query) {

        $insert = $this->link->query($query);

        if ($insert) {

            header('location: index.php?insert= post inserted...');
        } else {
            echo 'post did not insert...';
        }
    }

    public function update($query) {

        $update = $this->link->query($query);

        if ($update) {

            header('location: index.php?update= post updated...');
        } else {
            echo 'post did not update...';
        }
    }

    public function delete($query) {

        $delete = $this->link->query($query);

        if ($delete) {

            header('location: index.php?delete= post deleted...');
        } else {
            echo 'post did not delete...';
        }
    }

}

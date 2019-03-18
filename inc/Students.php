<?php
//Created by Arek

class Students{
    protected $con;

    public function __construct(){
        //Create connect
        $this->con = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

        //Check connection if is correct and set charset
        if($this->con->connect_error)
            die("Connection failed: " . $this->con->connect_error);
        else
          $this->con->set_charset('utf8');
    }


    public function get_class_list_as_HTML(){
        $sql = "SELECT id_klasy, klasa FROM klasy";

        if ($result = $this->con->query($sql)) {

            /* fetch object array */
            while ($row = $result->fetch_row()) {
                echo "<a href=\"?page=studentsClass&class={$row[0]}\">{$row[1]}</a><br>";
            }

        }else{
            $err = 'Brak klas';
            $this->error($err);
        }
    }
}

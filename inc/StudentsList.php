<?php
//Creted by Arek

class StudentsList{
    protected $con;
    private $id_klasy;
    private $nazwa_klasy;

    public function __construct(){
        //Create connect
        $this->con = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

        //Check connection if is correct
        if($this->con->connect_error){
            die("Connection failed: "  . $this->con->connect_error);
        }
        $this->nazwa_klasy = $_GET['class'];
    }

    public function get_class_name(){
        return $this->nazwa_klasy;
    }

    public function students_as_HTML(){
        $sql = "SELECT * FROM uczniowie WHERE `id_klasy` = {$this->nazwa_klasy}";

        if($result = $this->con->query($sql)){
            // fetch object array
            while($row = $result->fetch_row()){
                echo " {$row[0]} - {$row[1]} {$row[2]}<br>";
            }

        }
    }

}

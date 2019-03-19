<?php
//Creted by Arek

class StudentsList{
    protected $con;
    private $id_klasy;
    private $nazwa_klasy;

    public function __construct(){
        //Create connect
        $this->con = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

        //Check connection if is correct and set charset
        if($this->con->connect_error)
            die("Connection failed: " . $this->con->connect_error);
        else
          $this->con->set_charset('utf8');

        if(isset($_GET['class'])){
          $this->id_klasy = $_GET['class'];
          $this->nazwa_klasy = $this->get_class_name_db();
        }
    }

    public function get_class_name(){
        return $this->nazwa_klasy;
    }

    public function get_class_id(){
      if($this->id_klasy)
        return $this->id_klasy;
      elseif(isset($_GET['class']))
        return $_GET['class'];
      else
        die("Błąd pobierania wartości id klasy");
    }

    public function get_class_name_db(){
        $sql = "SELECT klasa FROM klasy WHERE id_klasy = {$this->id_klasy}";

        $query = $this->con->query($sql);

        if($query->num_rows){
          $result = $query->fetch_assoc();
          return $result['klasa'];
        }
    }

    public function students_as_HTML(){
        $sql = "SELECT * FROM uczniowie WHERE `id_klasy` = {$this->id_klasy}";

        if($result = $this->con->query($sql)){
            // fetch object array
            while($row = $result->fetch_row()){
                echo " {$row[0]} - {$row[1]} {$row[2]}<br>";
            }

        }
    }

}

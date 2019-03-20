<?php
//Created by Arek

class Students{
    protected $con;
    private $student_id;
    private $student_name;
    private $student_surname;
    private $student_image;
    private $student_id_klasy;

    public function __construct($student_id){
      //Create connect
      $this->con = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

      //Check connection if is correct and set charset
      if($this->con->connect_error)
          die("Connection failed: " . $this->con->connect_error);
      else
        $this->con->set_charset('utf8');

      //Set
      $this->student_id = $student_id;

      $this->get_db_student_personality();
    }

    public function get_db_student_personality(){

      $sql = "SELECT * FROM uczniowie WHERE id_ucznia = {$this->student_id}";

      $query = $this->con->query($sql);

      if($query->num_rows){
        $result = $query->fetch_assoc();
          $this->student_name = $result['imie'];
          $this->student_surname = $result['nazwisko'];
          $this->student_id_klasy = $result['id_klasy'];
          $this->student_image = $result['zdjecie_ucznia'];
      }
    }

    public function get_id(){
      return $this->student_id;
    }

    public function get_name(){
      return $this->student_name;
    }

    public function get_surname(){
      return $this->student_surname;
    }

    public function get_id_klasy(){
      return $this->student_id_klasy;
    }

    public function get_image(){
      return $this->student_image;
    }
}

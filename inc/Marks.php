<?php
//Created by Arek

class Marks{
    protected $con;
    private $student_id;
    private $id_oceny;
    private $id_przedmiotu;
    private $ocena;
    private $komentarz;

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
    }

    public function set_mark(){

      if(empty($mark = $_POST['mark']) || empty($subject = $_POST['subject'])){
        Communicats::display_error("Wybierz ocenę oraz przedmiot");
        return 0;
      }

      $comment = $_POST['comment'];

      $sql = "INSERT INTO oceny VALUES('', $mark, '$comment', $subject, {$this->student_id});";

      $query = $this->con->query($sql);

      if($this->con->error)
        Communicats::display_error($this->con->error);
      else
        Communicats::display_success('Dodano ocenę pomyślnie');

    }
    /*
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
    */
}

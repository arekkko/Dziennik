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
}

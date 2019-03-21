<?php
//Created by Arek

class Class{
    protected $con;
    private $klasa_id;
    private $nazwa_klasy;
    private $rok_szkolny_id;

    public function __construct($klasa_id){
      //Create connect
      $this->con = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

      //Check connection if is correct and set charset
      if($this->con->connect_error)
          die("Connection failed: " . $this->con->connect_error);
      else
        $this->con->set_charset('utf8');

      //Set
      $this->klasa_id = $klasa_id;

      $this->get_db_class();
    }

    public function get_db_class(){

      $sql = "SELECT * FROM klasy";

      $query = $this->con->query($sql);

      if($query->num_rows){
        $result = $query->fetch_all();
          $this->klasa_id = $result['id_klasy'];
          $this->nazwa_klasy = $result['klasa'];
      }
    }


    public function get_klasa_id(){
      return $this->klasa_id;
    }

    public function get_rok_szkolny_id(){
      return $this->rok_szkolny_id;
    }
}

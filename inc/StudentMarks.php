<?php
//Created by Arek
class StudentMarks extends Authorization{
    protected $con;

    public function __construct(){
        //Create connect
        $this->con = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

        //Check connection if is correct
        if($this->con->connect_error){
            die("Connection failed: " . $this->con->connect_error);
        }
    }

    public function get_students_table_mark_as_HTML(){

        $user_id = Authorization::get_user_logged_id();

        $sql = "SELECT ocena, komentarz, id_przedmiotu FROM oceny WHERE id_ucznia = ${user_id}";
echo $sql; 
        if($result = $this->con->query($sql)){
            while($row = $result->fetch_row()){
              $this->print_array($row);
               echo "${row['id_przedmiotu']} - ${row['komentarz']}";
            }
        }
    }


    public function print_array($array){
        echo "<pre>";
        print_r($array);
        echo "</pre>";
    }
}

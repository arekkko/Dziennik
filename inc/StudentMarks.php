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

        $sql = "SELECT DISTINCT(id_przedmiotu) FROM oceny WHERE id_ucznia = ${user_id}";

        $array = [];
        $array['id_przedmiotu'] = [];

        if($result = $this->con->query($sql)){
            while($row = $result->fetch_assoc()){
                $this->pa($row);
                array_push($array['id_przedmiotu'], $row['id_przedmiotu']);

                if($query = $this->con->query("SELECT ocena, komentarz FROM oceny WHERE id_ucznia = ${user_id} AND id_przedmiotu = ${row['id_przedmiotu']}")){
                  $i = 0;
                  $query_result = $query->fetch_assoc();
                  foreach($query_result as $result){
                    $this->pa($result);
                    array_push($array['id_przedmiotu'][$i], $query_result['ocena']);
                    $i++;
                  }
                }
            }
        }
         $this->pa($array);
    }


    public function pa($array){
        echo "<pre>";
        print_r($array);
        echo "</pre>";
    }
}

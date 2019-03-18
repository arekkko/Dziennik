<?php
//Created by Arek
class StudentMarks extends Authorization{
    protected $con;
    private $student_marks;

    public function __construct(){
        //Create connect
        $this->con = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

        //Check connection if is correct and set charset
        if($this->con->connect_error)
            die("Connection failed: " . $this->con->connect_error);
        else{
          $this->con->set_charset('utf8');

          //Generate students marks array and save it
          $this->generate_students_marks_array();
        }
    }


    public function get_students_table_mark_as_HTML(){
      echo "<table class=\"dziennik-table table\">
            <thead class=\"thead-dark\">
              <tr>
                <th scope=\"col\">Przedmiot</td>
                <th scope=\"col\">Oceny</td>
              </tr>
            </thead>
            <tbody>";

      $marks_array = $this->get_student_marks_array();

      foreach($marks_array as $key_marks => $subject){
        foreach($subject as $key_subject => $oceny){
          $przedmiot = $this->get_class_name_by_id($key_marks);
          echo "<tr>";
          echo "<td>${przedmiot}</td><td class=\"row\">";
          foreach($oceny as $ocena){
            echo "<div class=\"col-1\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Komentarz: {$ocena['comment']}\">{$ocena['value']}</div>";
          }
          echo "</td></tr>";
        }
      }
          echo "</tbody>
            </table>";

      //  $this->pa($this->get_student_marks_array());

    }

    public function get_student_marks_array(){
      return $this->student_marks;
    }

    //Generate students marks array
    public function generate_students_marks_array(){

      $user_id = Authorization::get_user_logged_id();

      $sql_subjects = "SELECT DISTINCT(id_przedmiotu) FROM oceny WHERE id_ucznia = ${user_id}";

      $arrayMarks = [];

      if($result_subjects = $this->con->query($sql_subjects)){
          while($row_subjects = $result_subjects->fetch_assoc()){

              if($result_marks = $this->con->query("SELECT id_oceny, ocena, komentarz FROM oceny WHERE id_ucznia = ${user_id} AND id_przedmiotu = ${row_subjects['id_przedmiotu']}")){

                while($row_marks = $result_marks->fetch_assoc()){
                  $arrayMarks[$row_subjects['id_przedmiotu']]['oceny'][$row_marks['id_oceny']]['value'] = $row_marks['ocena'];
                  $arrayMarks[$row_subjects['id_przedmiotu']]['oceny'][$row_marks['id_oceny']]['comment'] = $row_marks['komentarz'];
                }
              }
          }
      }
      $this->student_marks = $arrayMarks;
      ///$this->pa($arrayMarks); 
    }


    public function pa($array){
        echo "<pre>";
        print_r($array);
        echo "</pre>";
    }

    public function get_class_name_by_id($id){
      $sql = "SELECT przedmiot FROM przedmioty WHERE id_przedmiotu = ${id}";

      $query = $this->con->query($sql);

      if($query->num_rows){
        $result = $query->fetch_assoc();
        return $result['przedmiot'];
      }
    }
}

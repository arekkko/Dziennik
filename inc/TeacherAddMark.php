<?php
include 'Subjects.php';

//created by Arek
class TeacherAddMark extends StudentsList{
  protected $con;
  public $subjects;

  public function __construct(){
    //Create connect
    $this->con = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

    //Check connection if is correct and set charset
    if($this->con->connect_error)
        die("Connection failed: " . $this->con->connect_error);
    else
      $this->con->set_charset('utf8');
  }

  public function students_as_HTML(){
      $sql = "SELECT * FROM uczniowie WHERE `id_klasy` = ". StudentsList::get_class_id();

      if($result = $this->con->query($sql)){

        echo "<table class=\"dziennik-table table\">
              <thead class=\"thead-dark\">
                <tr>
                  <th scope=\"col\">ID</td>
                  <th scope=\"col\">Imię</td>
                  <th scope=\"col\">Nazwisko</td>
                  <th scope=\"col\">Akcja</td>
                </tr>
              </thead>
              <tbody>";

          while($row = $result->fetch_row()){
                  echo "<tr>
                        <td>{$row[0]}</td>
                        <td>{$row[1]}</td>
                        <td>{$row[2]}</td>
                        <td><a href=\"?page=teacherAddMark&subpage=addMark&studentId={$row[0]}\" class=\"btn\">Dodaj</a></td>
                        </tr>";
          }
          echo "</tbody>
            </table>";
      }
  }

  private function get_subjects_db(){
    $sql = "SELECT * FROM przedmioty";

    $query = $this->con->query($sql);

    $possible_subject = [];

    if($query->num_rows){
      while($result = $query->fetch_assoc()){
        array_push($possible_subject, new Subjects($result['id_przedmiotu'], $result['przedmiot']));
      }
    }
    $this->subjects = $possible_subject;
  }

  public function get_subjects(){
    if(!$this->subjects)
      $this->get_subjects_db();

    return $this->subjects;
  }

}

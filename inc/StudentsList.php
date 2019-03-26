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

    public function get_class_list_as_HTML(){

        $sql = "SELECT id_klasy, klasa FROM klasy WHERE id_rok_szkolny = " . ACTUAL_YEAR;

        if ($result = $this->con->query($sql)) {

            /* fetch object array */
            while ($row = $result->fetch_row()) {

              if(isset($_GET['page']) && $_GET['page'] == 'studentsClass')
                $goTo = "studentsClass&class={$row[0]}";
              elseif(isset($_GET['page']) && $_GET['page'] == 'teacherAddMark')
                $goTo = "teacherAddMark&subpage=addToClass&class={$row[0]}";
              else
                $goTo = "studentsClass&class={$row[0]}";

              echo "<a href=\"?page=${goTo}\">{$row[1]}</a><br>";

              //  echo "<a href=\"?page=studentsClass&class={$row[0]}\">{$row[1]}</a><br>";
            }

        }else{
            $err = 'Brak klas';
            $this->error($err);
        }
    }

    public function get_class_array($param){

        $sql = "SELECT id_klasy, klasa FROM klasy WHERE id_rok_szkolny = " . ACTUAL_YEAR;

        if ($result = $this->con->query($sql)) {
            $classes = [];
            /* fetch object array */
            while ($row = $result->fetch_row()) {
              if($param == 'id')
                array_push($classes, $row[0]);
              elseif($param == 'name')
                array_push($classes, $row[1]);
            }
        }

        return $classes;
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

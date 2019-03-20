<?php
include 'inc/Authorization.php';
include 'inc/StudentsList.php';
include 'inc/communicats.php';
include 'inc/Students.php';
include 'inc/config.php';



//if(isset($user)){
  session_start();
  $user = new Authorization();
  //$student = new Students();
  $studentsList = new StudentsList();
//}

if(isset($_GET['logout']) && $_GET['logout'] == true ){
    $user->logout_process();
    include 'template/login.php';
    exit();
}

if(isset($_GET['login'])){
    include 'template/login.php';
}

if(isset($_GET['loginProcess'])){

    $auth = $user->login_process($_POST['login'], $_POST['password']);

    if($auth){
        header("Location: ./");
        //include 'template/mainPage.php';
        exit();
    }else{
        include 'template/login.php';
    }
}

if(!$user->get_session()){
  include 'template/login.php';
  exit();
}else{
  //Tworzy obiekt z Id aktualne zalogowanego usera
  //$student = new Students(Authorization::get_user_logged_id());
}

if(isset($_GET['page'])){

    if($_GET['page'] == 'studentsClass'){
        include 'template/studentsClassPage.php';
        exit();
    }
    elseif($_GET['page'] == 'studentMarks'){
        include 'inc/studentMarks.php';
        $student = new StudentMarks();

        include 'template/studentMarks.php';
        exit();
    }
    elseif($_GET['page'] == 'teacherAddMark'){
      include 'inc/TeacherAddMark.php';

      $teacherAddMark = new TeacherAddMark();

      if(isset($_GET['subpage']) && $_GET['subpage'] == 'addToClass'){
          include 'template/teacherAddMark.php';
          exit();
      }elseif(isset($_GET['subpage']) && $_GET['subpage'] == 'addMark'){
          include 'inc/BuildForms.php';
          $buildForms = new BuildForms('addStudentMark');
          $student = new Students($_GET['studentId']);

          include 'template/addMark.php';
          exit();
      }else{
        include 'template/mainPage.php';
        exit();
      }

      include 'template/teacherAddMark.php';
      exit(); 
    }
}

if(isset($_GET['action'])){
  if($_GET['action'] == 'doAddMark'){
    include 'inc/Marks.php';

    $mark = new Marks($_GET['studentId']);
    $mark->set_mark();

  }
}
include 'template/mainPage.php';
exit();
?>

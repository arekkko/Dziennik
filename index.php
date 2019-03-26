<?php
include 'inc/Authorization.php';
include 'inc/StudentsList.php';
include 'inc/Communicats.php';
include 'inc/Students.php';
include 'inc/config.php';



//if(isset($user)){
  session_start();
  $user = new Authorization();
  //$student = new Students();
  $studentsList = new StudentsList();
//}

if(isset($_GET['logout']) && $_GET['logout'] == true ){

    if(isset($_GET['passwordChanged']) && $_GET['passwordChanged'] == 'true')
      Communicats::display_success('Hasło zostało zmienione pomyślnie. Zaloguj się.');

    $user->logout_process();
    include 'template/login.php';
    exit();
}

if(isset($_GET['login'])){
    include 'template/login.php';
    exit();
}

if(isset($_GET['loginProcess'])){

    $auth = $user->login_process($_POST['login'], $_POST['password']);

    if($auth){
        //header("Location: ./");
        include 'template/mainPage.php';
        exit();
    }else{
        include 'template/login.php';
    }
}

if(!$user->get_session()){
  include 'template/login.php';
  exit();
}

if(isset($_GET['page'])){

    $page = $_GET['page'];

    if($page == 'studentsClass'){
        include 'template/studentsClassPage.php';
        exit();
    }
    elseif($page == 'classList'){
      include 'template/classList.php';
      exit();
    }
    elseif($page == 'studentMarks'){
        include 'inc/StudentMarks.php';
        $student = new StudentMarks();

        include 'template/studentMarks.php';
        exit();
    }
    elseif($page == 'teacherAddMark'){
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
        include 'template/selectClassTeacher.php';
        exit();
      }
    }elseif($page == 'addStudent'){
        //Include class
        include 'inc/BuildForms.php';
        $buildForms = new BuildForms('addStudentMark');


        //Load template
        include 'template/addStudent.php';
        exit();
    }elseif($page == 'profile'){
        include 'inc/BuildForms.php';
        $buildForms = new BuildForms('changePassword');

        include 'template/profile.php';
        exit();
    }
}

if(isset($_GET['action'])){

  $action = $_GET['action'];

  if($action == 'doAddMark'){
    include 'inc/Marks.php';
    $mark = new Marks($_GET['studentId']);
    $mark->set_mark();
  }
  elseif($action == 'changePassword'){
    $user->change_password();
    //header('Location: ' . $_SERVER['HTTP_REFERER']);
  }
  elseif($action == 'doAddStudent'){
    $student = new Students();
    $student->add_student();
    
    //Load tempalte
    include 'template/addStudent.php';
    exit();
  }
}
include 'template/mainPage.php';
exit();
?>

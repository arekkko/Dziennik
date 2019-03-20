
<!-- http://www.w3programmers.com/login-registration-using-oop/ -->

<!-- w tabeli uczniowie i tabeli nauczyciele trzeba zmienić nazwę komuny z id na id_osoby (tak aby tu i tu byla jednakowa) -->

<?php
include 'inc/Authorization.php';
include 'inc/Students.php';
include 'inc/config.php';

//if(isset($user)){
  session_start();
  $user = new Authorization();
  $student = new Students();
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
}

if(isset($_GET['page'])){
    include 'inc/StudentsList.php';
    $studentsList = new StudentsList();

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
      }elseif(isset($_GET['subpage']) && $_GET['subpage'] == 'addMark'){
          include 'inc/BuildForms.php';
          $buildForms = new BuildForms('addStudentMark');

          include 'template/addMark.php';
          exit();
      }
      else
        include 'template/mainPage.php';
      exit();
    }
}
include 'template/mainPage.php';
exit();
?>

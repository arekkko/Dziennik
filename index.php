
<!-- http://www.w3programmers.com/login-registration-using-oop/ -->   
    
<!-- w tabeli uczniowie i tabeli nauczyciele trzeba zmienić nazwę komuny z id na id_osoby (tak aby tu i tu byla jednakowa) --> 
    
<?php 
include 'inc/Authorization.php'; 
include 'inc/Students.php'; 
include 'inc/config.php'; 

session_start();
$user = new Authorization(); 
    
if(isset($_GET['logout']) && $_GET['logout'] == true ){
    $user->logout_process(); 
    header("Location: ./");
}
    
if(isset($_GET['login'])){
    include 'login.php'; 
}
    
if(isset($_GET['loginProcess'])){ 
    
    $auth = $user->login_process($_POST['login'], $_POST['password']);
    
    if($auth){
        include 'template/mainPage.php'; 
        exit(); 
    }else{
        include 'login.php'; 
    }
}

if(isset($_GET['page'])){
    if($_GET['page'] == 'studentsClass'){

        include 'inc/StudentsList.php'; 
        
        $studentsList = new StudentsList(); 
        
        include 'template/studentsClassPage.php'; 
        exit(); 
    }
}
    
if($user->get_session()){ 
    include 'template/mainPage.php'; 
    exit(); 
}else{    
    include 'login.php'; 
}

?>

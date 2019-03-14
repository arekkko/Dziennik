<?php 
//Created by Arek 

class Authorization {
    protected $con; 
    private $userRole; //1 - uczen , 2 - nauczyciel
    
    public function __construct(){
        
        //Create connect 
        $this->con = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE); 
        
        //Check connection if is correct 
        if($this->con->connect_error){
            die("Connection failed: " . $this->con->connect_error); 
        }
        
    }
    
    public function __destruct(){
        
        mysqli_close($this->con); 
    }
    
    //Registration process
    public function register_user($login, $password){
        
        //$password = md5($password); 
        $sql = "SELECT id_osoby FROM nauczyciele WHERE login='${login}' UNION SELECT id_osoby FROM uczniowie WHERE login='${login}''"; 
        
        //check if user is in database
        $check = $this->con->query($sql); 
        
        if($check->num_rows){
            
        }else{
            $err = 'Dany użytkownik już istnieje'; 
            $this->error($err);
        }
        
    }
    
    //Login Process
    public function login_process($login, $password){
        //$password = md5($password); 
        
        $sql = "SELECT id_login FROM logowanie WHERE login='${login}' AND haslo='${password}'"; 

        //check if user is in database
        $query = mysqli_query($this->con, $sql);
        
        //get data of query
        $result = mysqli_fetch_assoc($query); 

        if($query->num_rows){
            //Login process - success
            $this->display_success('Witaj, zalogowałeś się poprawnie'); 
            //session_start();
            $_SESSION['login']   = true; 
            $_SESSION['id_login'] = $result['id_login'];
            
            $userTable =  $this->get_logged_user_parametr('nazwa_tabeli'); 
            if($userTable == 'uczniowie'){
                $this->userRole = 1; 
            }elseif($userTable == 'nauczyciele'){
                $this->userRole = 2; 
            }
            
            $_SESSION['userRole'] = $this->userRole;
            
            return true;
            
        }else{
            $err = 'Zły login lub hasło. Sprobuj ponownie.'; 
            $this->display_error($err);
            
            return false; 
        }
    }
    
    //in table logowanie
    public function get_user_logged_id(){
        return $_SESSION['id_login']; 
    }
    
    public function get_logged_user_parametr($parametr){
        if($parametr == 'id_uzytkownika')
            $sql = "SELECT id_uzytkownika FROM logowanie WHERE id_login={$this->get_user_logged_id()}"; 
        elseif($parametr == 'nazwa_tabeli')
            $sql = "SELECT nazwa_tabeli FROM logowanie WHERE id_login={$this->get_user_logged_id()}"; 
        if($result = $this->con->query($sql)){
            $return = $result->fetch_row(); 
        }
        return $return[0]; 
    }
        
    //Start session
    public function get_session(){
        if(!empty($_SESSION) && $_SESSION['login']){
            return true;
        }else{
            return false; 
        } 
    }
    
    //Get user role
    public function get_user_role(){
        //return $this->userRole;
        return $_SESSION['userRole']; 
    }
    
    //Verify if is teacher
    public function is_teacher(){
        if($this->get_user_role() == 2)
            return true; 
        else
            return false; 
    }
    
    //Verify if is student
    public function is_student(){
        if($this->get_user_role() == 1)
            return true; 
        else 
            return false; 
    }
        
    //Logout process
    public function logout_process(){
        $_SESSION['login'] = false; 
        session_destroy(); 
    }
    
    //Get user name
    public function get_user_name(){
        $sql = "SELECT nazwa_tabeli FROM logowanie WHERE id_login={$this->get_user_logged_id()}"; 
        
        if($result = $this->con->query($sql)){
            $return = $result->fetch_row(); 
            
            if($return[0] == 'uczniowie'){
                $sql = "SELECT imie, nazwisko FROM uczniowie WHERE id_ucznia = {$this->get_logged_user_parametr('id_uzytkownika')}"; 
                if($result = $this->con->query($sql)){
                    $return = $result->fetch_row(); 
                }
            }elseif($return[0] == 'nauczyciele'){
                $sql = "SELECT imie, nazwisko FROM nauczyciele WHERE id_nauczyciela = {$this->get_logged_user_parametr('id_uzytkownika')}";
                if($result = $this->con->query($sql)){
                    $return = $result->fetch_row();
                }
            }
        }
        $return = $return[0] . ' ' . $return[1];
        return $return; 
    }
    
    public function display_error($error){
        die("<p class=\"error\">Wystąpił błąd: <strong>${error}</strong>.</p>"); 
        return 0; 
    }
    
    public function display_success($communicat){
        echo "<span class=\"znikanie\">{$communicat}</span>"; 
    }
}
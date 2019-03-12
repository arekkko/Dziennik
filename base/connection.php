<?php 

class ConnectDatabase{
    public $db; 
    
    public function __construct(){
        include 'config.php'; 
        
        //Create connect 
        $con = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE); 

        //Check connection if is correct 
        if($con->connect_error){
            die("Connection failed: " . $con->connect_error); 
        }

    }
}




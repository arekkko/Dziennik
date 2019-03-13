<?php 
//Created by Arek
class StudentMarks{
    protected $con; 
    
    public function __construct(){
        //Create connect
        $this->con = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE); 
        
        //Check connection if is correct
        if($this->con->connect_error){
            die("Connection failed: " . $this->con->connect_error); 
        }
    }

}

<?php

//Created by Arek
class Subjects{
  private $subject_id;
  public $subject_name;

  public function __construct($subject_id, $subject_name){

    $this->subject_id = $subject_id;
    $this->subject_name = $subject_name;

  }

  public function get_subject_id(){
    return $this->subject_id;
  }
  public function get_subject_name(){
    return $this->subject_name;
  }
}

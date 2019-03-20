<?php
//Created by Arek
class BuildForms{
  private $form_name;

  public function __construct($form_name){
    $this->form_name = $form_name;
  }

  /*
  ** Przyjmuje trzy argumenty
  ** - możliwe opcje wyboru
  ** - możliwe opcje wyboru - zapis do bazy
  ** - nazwa opcji
  */
  public function select_filed($options, $options_to_db, $label = 'Wybierz'){
    if(gettype($options) != 'array'){
        return 0;
    }
    $select_form = '<div class="select_field">';
    $select_form .= '<span class="label">'. $label .'</span>';
    $select_form .= '<select>';

    foreach(array_combine($options_to_db, $options)  as $option_db => $option){
      $select_form .= '<option value="'. strtolower($option_db) .'">'.$option.'</option>';
    }

    $select_form .= '</select>';
    $select_form .= '</div>';

    echo $select_form;
  }

  /*
  ** Przyjmuje jeden argument
  ** - wartosc
  */
  public function submit_button($value){
    $submit_button = '<input type="submit" value="'.$value.'" class="btn"/>';
    echo $submit_button; 
  }

  public function get_form_name(){
    return $this->form_name;
  }

}

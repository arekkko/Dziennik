<?php
//Created by Arek
class BuildForms{
  private $form_name;

  public function __construct($form_name){
    $this->form_name = $form_name;
  }

  /*
  ** Przyjmuje cztery argumenty
  ** - nazwa atrybutu name dla selecta
  ** - możliwe opcje wyboru
  ** - możliwe opcje wyboru - zapis do bazy
  ** - nazwa opcji
  */
  public function select_field($name, $options, $options_to_db, $label = 'Wybierz'){
    if(gettype($options) != 'array'){
        return 0;
    }
    $select_form = '<div class="form-group select_field">';
    $select_form .= '<span class="label">'. $label .'</span>';
    $select_form .= '<select name="'. $name .'" class="form-control">';

    foreach(array_combine($options_to_db, $options)  as $option_db => $option){
      $select_form .= '<option value="'. strtolower($option_db) .'">'.$option.'</option>';
    }

    $select_form .= '</select>';
    $select_form .= '</div>';

    echo $select_form;
  }

  /*
  ** Przyjmuje 2 argumenty
  ** - nazwa atrybutu name dla selecta
  ** - placeholder
  */
  public function text_field($name, $placeholder){
    $text_field = '<div class="form-group text_field">';
    $text_field .= '<input type="text" class="form-control" name="'. $name .'" placeholder="'. $placeholder .'"/>';
    $text_field .= '</div>';

    echo $text_field;
  }

  /*
  ** Przyjmuje 1 argument
  ** - nazwa atrybutu name dla selecta
  ** - label
  */
  public function password_field($name, $placeholder){
    $text_field = '<div class="form-group password_field">';
    $text_field .= '<input type="password" name="'. $name .'" placeholder="'. $placeholder .'" class="form-control"/>';
    $text_field .= '</div>';

    echo $text_field;
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

<?php
//Created by Arek
class BuildForms{
  private $form_name;

  public function __construct($form_name){
    $this->form_name = $form_name;
  }

  /*
  ** Przyjmuje dwa argumenty
  ** - możliwe opcje wyboru
  ** - nazwa opcji
  */
  public function select_filed($options, $label = 'Wybierz'){
    if(gettype($options) != 'array'){
        return 0;
    }
    $select_form = '<div class="select_field">';
    $select_form .= '<span class="label">'. $label .'</span>';
    $select_form .= '<select>';

    foreach($options as $option){
      $select_form .= '<option value="'. $this->get_form_name() .'_'. strtolower($option) .'">'.$option.'</option>';
    }

    $select_form .= '</select>';
    $select_form .= '</div>';

    echo $select_form;
  }

  public function get_form_name(){
    return $this->form_name;
  }

}

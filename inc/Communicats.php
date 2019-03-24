<?php

//Created by Arek
class Communicats{

  static public function display_success($communicat){
      echo  "<span class=\"badge-alert alert alert-success\">{$communicat}</span>";
      return 0; 
  }

  static public function display_error($error){
      echo "<p class=\"badge-alert alert alert-danger\">Wystąpił błąd: <strong>${error}</strong>.</p>";
      return 0;
  }
}

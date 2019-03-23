<?php

//Created by Arek
class Communicats{
  public $communicat;

  public function display_success($communicat){
      echo  "<span class=\"badge-alert alert alert-success\">{$communicat}</span>";
  }

  public function display_error($error){
      echo "<p class=\"badge-alert alert alert-danger\">Wystąpił błąd: <strong>${error}</strong>.</p>";
  }
}

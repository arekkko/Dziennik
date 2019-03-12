<?php 
include 'header.php'; 
?>

<h1 class="page-title">Strona głowna</h1>

<h2 class="page-subtitle">Lista klas</h2>
<?php 

$students = new Students(); 

$students->get_class_list_as_HTML(); 

$students->get_students_by_class_as_HTML(1); 
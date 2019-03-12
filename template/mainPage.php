<?php 
include 'header.php'; 
?>

<h1 class="page-title">Strona głowna</h1>

<h2 class="page-subtitle">Lista klas</h2>
<?php 

$classes = new Students(); 

$classes->get_class_list_as_HTML(); 
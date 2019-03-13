<?php 
include 'header.php'; 
?>

<h1 class="page-title">Strona głowna</h1>

<?php 

$students = new Students(); 
if($user->get_user_role() == 2): ?>
<h2 class="page-subtitle">Lista klas</h2>
<?php
$students->get_class_list_as_HTML();  
  //$students->get_students_by_class_as_HTML(1); ?> 
<?php endif; ?>



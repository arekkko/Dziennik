<?php 
    include 'sections/head.php';
?>
<?php 
include 'sections/header.php'; 
?>

<h1 class="page-title">Strona głowna</h1>

<?php 
$students = new Students(); 
        
if($user->is_teacher()):?>
        <h2 class="page-subtitle">Lista klas</h2>
        <?php $students->get_class_list_as_HTML();   ?> 
<?php endif; ?>

    </body>
</html>

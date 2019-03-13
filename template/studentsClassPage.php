<html>
<head>
    <?php 
    include 'sections/head.php';
    ?>
</head>
    <body>
<?php 
include 'sections/header.php'; 
?>

<h1 class="page-title">Klasa <?php echo $studentsList->get_class_name(); ?></h1>

<?php

if($user->is_teacher()): ?>
        <h2 class="page-subtitle">Lista klas</h2>
        <?php $studentsList->students_as_HTML();   ?> 
<?php endif; ?>

    </body>
</html>

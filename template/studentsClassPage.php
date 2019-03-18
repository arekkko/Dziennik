<?php
    include 'sections/head.php';
    include 'sections/header.php';
?>
<div class="container">
<h1 class="page-title">Klasa <?php echo $studentsList->get_class_name(); ?></h1>

<?php
if($user->is_teacher()): ?>
        <h2 class="page-subtitle">Lista uczniów klasy <?php echo $studentsList->get_class_name(); ?></h2>
        <?php $studentsList->students_as_HTML();   ?>
<?php endif; ?>
</div>
<?php include 'sections/footer.php'; ?>

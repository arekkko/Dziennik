<?php
    include 'sections/head.php';
    include 'sections/header.php';
?>
<div class="container">
<h1 class="page-title">Dodawnie oceny</h1>

<h2 class="page-subpage">Wybierz klasę do której dodać ocenę </h2>
<?php
if($user->is_teacher()):?>
        <h2 class="page-subtitle">Lista klas</h2>
        <?php $studentsList->get_class_list_as_HTML();
?>
<?php endif; ?>
</div>
<?php include 'sections/footer.php'; ?>

<?php
    include 'sections/head.php';
    include 'sections/header.php';
?>
<div class="container">
<h1 class="page-title">Strona głowna</h1>

<?php
$students = new Students();

if($user->is_teacher()):?>
        <h2 class="page-subtitle">Lista klas</h2>
        <?php $students->get_class_list_as_HTML();   ?>
<?php endif; ?>
</div>
<?php include 'sections/footer.php'; ?>

<?php
    include 'sections/head.php';
    include 'sections/header.php';
?>
<div class="container text-center">
<h1 class="page-title">Lista klas</h1>
<?php
  if($user->is_teacher()):?>
        <?php $studentsList->get_class_list_as_HTML();
?>
<?php endif; ?>
</div>
<?php include 'sections/footer.php'; ?>

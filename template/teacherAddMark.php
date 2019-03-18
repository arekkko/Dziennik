<?php
    include 'sections/head.php';
    include 'sections/header.php';
?>
<div class="container">
  <h1 class="page-title">Dodawanie oceny</h1>

  <h2 class="page-subtitle">Wstaw ocenę do klasy <?php echo $studentsList->get_class_name(); ?></h2>

  <?php $teacherAddMark->students_as_HTML(); ?>

</div>
<?php include 'sections/footer.php'; ?>

<?php
    include 'sections/head.php';
?>

<?php
include 'sections/header.php';
?>
  <div class="container">
    <h1 class="page-title mt-4">Oceny</h1>
    <h2 class="page-subtitle mb-5">Uczeń <?php echo $user->get_user_name() ?></h2>
    <?php $student->get_students_table_mark_as_HTML(); ?>
  </div>
<?php include 'sections/footer.php'; ?>

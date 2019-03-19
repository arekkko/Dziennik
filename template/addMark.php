<?php
    include 'sections/head.php';
    include 'sections/header.php';
?>
  <div class="container">
    <h1 class="page-title mt-4">Dodawanie oceny</h1>
    <h2 class="page-subtitle mb-5">Uczeń <?php echo $user->get_user_name() ?></h2>
    <?php
      $possible_marks = ['1', '2','3', '4', '5', '6'];
      $buildForms->select_filed($possible_marks, 'Wybierz ocenę');
      $possible_subjects = ;
    ?>
  </div>
<?php include 'sections/footer.php'; ?>

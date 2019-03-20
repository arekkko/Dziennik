<?php
    include 'sections/head.php';
    include 'sections/header.php';
?>
  <div class="container">
    <h1 class="page-title mt-4">Dodawanie oceny</h1>
    <h2 class="page-subtitle mb-5">Uczeń <?php echo $user->get_user_name() ?></h2>

    <form method="post" action="doAddMark">
    <?php
      //Create select for mark
      $possible_marks = ['1', '2','3', '4', '5', '6'];
      $buildForms->select_filed($possible_marks, $possible_marks, 'Wybierz ocenę');

      //Create select for subjects
      $possible_subject_ids = [];
      $possible_subject_names = [];
      foreach($teacherAddMark->get_subjects() as $subject){
        array_push($possible_subject_ids, $subject->get_subject_id());
        array_push($possible_subject_names, $subject->get_subject_name());
      }
      $buildForms->select_filed($possible_subject_names, $possible_subject_ids, 'Wybierz przedmiot');

      //Create input submit
      $buildForms->submit_button('Dodaj ocenę');
    ?>
    </form>
  </div>
<?php include 'sections/footer.php'; ?>

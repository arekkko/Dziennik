<?php
    include 'sections/head.php';
    include 'sections/header.php';
?>
  <div class="container">
    <h1 class="page-title mt-4">Dodawanie ucznia</h1>

    <form method="post" action="?action=doAddStudent">
    <?php
      //Create imie field
      $buildForms->text_field('imie', 'Imię');

      //Create nazwisko field
      $buildForms->text_field('nazwisko', 'Nazwisko');

      echo $studentsList->get_class_list_as_HTML();

      $buildForms->submit_button('Dodaj ucznia');
      /*
      $possible_marks = ['1', '2','3', '4', '5', '6'];
      $buildForms->select_field('mark', $possible_marks, $possible_marks, 'Wybierz ocenę');

      //Create select for subjects
      $possible_subject_ids = [];
      $possible_subject_names = [];
      foreach($teacherAddMark->get_subjects() as $subject){
        array_push($possible_subject_ids, $subject->get_subject_id());
        array_push($possible_subject_names, $subject->get_subject_name());
      }
      $buildForms->select_field('subject', $possible_subject_names, $possible_subject_ids, 'Wybierz przedmiot');

      //Create text for comment
      $buildForms->text_field('comment', 'Dodaj komentarz');

      //Create input submit
      $buildForms->submit_button('Dodaj ocenę');
      */
    ?>
    </form>
  </div>
<?php include 'sections/footer.php'; ?>

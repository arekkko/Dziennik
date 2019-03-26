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

      //Create login field
      $buildForms->text_field('login', 'Login');

      //Select class
      $buildForms->select_field('class', $studentsList->get_class_array('name'), $studentsList->get_class_array('id'), 'Wybierz klasę');

      //password
      $buildForms->password_field('password', 'Hasło ucznia');

      //password confirm
      $buildForms->password_field('password_confirm', 'Potwierdź hasło ucznia');

      $buildForms->submit_button('Dodaj ucznia');
    ?>
    </form>
  </div>
<?php include 'sections/footer.php'; ?>

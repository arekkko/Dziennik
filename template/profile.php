<?php
    include 'sections/head.php';
    include 'sections/header.php';
?>
  <div class="container">
    <h1 class="page-title mt-4">Twój profil</h1>
    <h2 class="page-subtitle text-center mb-5"><?php echo $user->get_user_name(); ?></h2>

    <div class="pt-4 pb-4">
      <span>Zmiana hasła</span>

      <form method="post" action="?action=changePassword">
        <?php
        //Password filed
        $buildForms->password_field('new_password', 'Nowe hasło');

        //Second password field
        $buildForms->password_field('new_password_confirm', 'Potwierdź nowe hasło');

        //Submit
        $buildForms->submit_button('Zmień hasło'); 
        ?>
      </form>
    </div>

  </div>
<?php include 'sections/footer.php'; ?>

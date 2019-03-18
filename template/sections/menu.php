
<nav class="navbar navbar-expand-lg navbar-light bg-light nav-height">
  <a class="navbar-brand" href="./">GreatBook</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <?php if($user->is_teacher()): ?><li class="nav-item"><a class="nav-link" href="./">Klasy</a></li><?php endif; ?>
      <?php if($user->is_student()): ?><li class="nav-item"><a class="nav-link" href="?page=studentMarks">Oceny</a></li><?php endif; ?>
      <?php if($user->is_teacher()):  ?>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Wykonaj akcję
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">

          <a class="dropdown-item" href="?page=teacherAddMark">Wstaw ocenę</a>
          <div class="dropdown-divider"></div>
        </div>
      </li>
      <?php endif; ?>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>
    </ul>
      <div class="pt-0">
      <?php
        if(isset($_SESSION) && $_SESSION['login'] == 1){
            echo "<small class='mt-5'>Jesteś zalogowany jako {$user->get_user_name()}</small>";

        }
    ?></div>
      <a class="btn btn-outline-success my-2 m-sm-2" href="?logout=true">Wyloguj się</a>

  </div>
</nav>

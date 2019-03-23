<?php
    include 'sections/head.php';
    include 'sections/header.php';
?>
<div class="container">
<h1 class="page-title"><i>Witaj w Dzienniku Elektronicznym GreatBook!</i></h1>

<h2 class="page-subtitle">Sprawdź funkcjonalności dziennika</h2>
<div class="container m-t-25 m-b-25">
  <div class="row">
<?php
  if($user->is_teacher()):?>
    <div class="col-sm-6">
      <h3>Dla nauczyciela</h3>
      <ul>
        <li><strong>Lista klas</strong><br>
        <p>Przejdź do zakładki Lista klas aby sprawdzić listę klas w aktualnym roku szkolnym</p></li>
        <li><strong>Dodawanie oceny</strong><br>
        <p>Przejdź do zakładki Wykonaj akcję -> wstaw ocenę aby dodać ocenę uczniowi z danej klasy z danego przedmiotu.</p></li>
      </ul>
    </div>
<?php elseif ($user->is_student()): ?>
  <div class="col-sm-6">
    <h3>Dla ucznia</h3>
    <ul>
      <li><strong>Podgląd ocen</strong><br>
      <p>Przejdź do zakładki oceny aby sprawdzić swoje oceny, najedź na ocenę aby sprawdzić komentarz</p></li>
    </ul>
  </div>
<?php endif; ?>
    <div class="col-sm-6">
      <h3>Dla ucznia i nauczyciela</h3>
      <li><strong>Autoryzacja</strong>
      <p>Twój login i hasło przechowywane są w bazie danych, specjalny kod odpowiada za sprawdzenie czy naprawdę jesteś naszym użytkownikiem i Twoją autoryzację przez prawidłowy login i hasło.</li>
      <li><strong>Zmiana hasła</strong>
      <p>Możesz zmienić swoje hasło przechodząć do zakładki Mój profil.</p></li>
    </div>
  </div>
  </div>
</div>
<?php include 'sections/footer.php'; ?>

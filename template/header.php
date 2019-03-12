<nav>
    <?php          
        if(isset($_SESSION) && $_SESSION['login'] == 1){
            echo "<p>Jesteś zalogowany jako {$_SESSION['id_osoby']}</p>"; 
            echo '<a href="?logout=true">Wyloguj się</a>';    
        }
    ?>
</nav>
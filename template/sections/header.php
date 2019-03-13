
    <?php          
        if(isset($_SESSION) && $_SESSION['login'] == 1){
            echo "<p>Jesteś zalogowany jako {$user->get_user_name()}</p>"; 
            echo '<a href="?logout=true">Wyloguj się</a>';    
        }
    ?>

<?php include 'menu.php'; ?>
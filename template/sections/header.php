
    <?php          
        if(isset($_SESSION) && $_SESSION['login'] == 1){
            echo "<p>Jesteś zalogowany jako {$user->get_user_name()}</p>"; 
            
        }
    ?>

<?php include 'menu.php'; ?>
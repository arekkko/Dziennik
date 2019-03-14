<div class="znikanie mx-auto" style="width: 350px;">
 <?php          
        if(isset($_SESSION) && $_SESSION['login'] == 1){
            echo "<p>Jesteś zalogowany jako {$user->get_user_name()}!</p>"; 
            
        }
        ?>

  
</div>
<?php include 'menu.php'; ?>
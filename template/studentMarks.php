<?php 
    include 'sections/head.php';
?>

<?php 
include 'sections/header.php'; 
?>

<h1 class="page-title">Oceny</h1>
<?php 

?>
<h2 class="page-subtitle">Uczeń <?php echo $user->get_user_name() ?></h2>

<?php 
    
$student->get_students_table_as_HTML(); 
    
    ?>
    </body>
</html>

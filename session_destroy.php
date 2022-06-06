<?php 
	

	$servername = "localhost";
	$username = "root";
	$password = "";

	$connect = mysqli_connect($servername, $username, $password, "my_users");
           
            mysqli_select_db($connect,'id19045007_my_users');
            
            if(isset($_POST['logout']))
               {session_destroy();
// or...
unset($_SESSION['username']);

header('Location: index.php');}
?>

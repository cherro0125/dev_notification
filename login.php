<?php
include 'functions/functions.php';
db_connect();


if(!$_SESSION['admin']) {
    
    if(isset($_POST['login'])) {
        
        $_POST['username'] = clear($_POST['username']);
 	    $_POST['password'] = md5(clear($_POST['password']));

      
        $result = mysql_query("SELECT * FROM `user_admin` WHERE `username` = '{$_POST['username']}' AND `password` = '{$_POST['password']}' LIMIT 1");
		$row = mysql_fetch_assoc($result);
		
         if((mysql_num_rows($result) > 0) ) {
           
            $_SESSION['admin'] = true;
            $_SESSION['user_id'] = $row['id'];
             $_SESSION['username'] = $row['username'];
             $_SESSION['department'] = $row['wydzial'];
            header('Location: panel.php');
                       
        } else {
			header('Location: panel.php');

        }
		}
    }
  else {
header('Location: index.php');
}
 
db_close();
?>
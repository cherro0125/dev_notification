<?php
session_start();
 if(!isset($_SESSION['admin'])) {
 $komunikat = "Nie byłeś zalogowany!";
}

 else{
 unset($_SESSION['admin']);
 $komunikat = "Wylogowanie prawidłowe!";

  header("Location: index.php");
  die();
}

session_destroy();


?>
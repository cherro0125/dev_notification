<?php
/**
 * Created by PhpStorm.
 * User: Dominik
 * Date: 26.11.2016
 * Time: 12:02
 */

include 'functions/functions.php';
db_connect();

if(isset($_SESSION['department'])|| $_SESSION['department']=="Admin")
{
    ?>
    <!doctype HTML>
    <html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <title>Law Enforcement Notification System - PANEL</title>
    </head>
    <body>
    <div class="container">
        <div class="header">

        </div>
        <div class="content">
        <form id="register" method="post" action="">
            <hr>
            <h1>
                Rejestracja użytkownika
            </h1>
            <hr>
            <label for="login">Login:</label></br>
            <input type="text" id="login" class="input" name="login" placeholder="Login" required></br>
             <label for="password">Hasło:</label></br>
            <input type="password" id="password" class="input" name="password" placeholder="Hasło" required></br>
            <label for="wydzial">Wydział:</label><br><br>
            <select id="wydzial" name="department" required>
            <option value="Los Santos Police Department">Los Santos Police Department</option>
            <option value="RCSD">Red County Sheriff's Department</option>
            <option value="Federal Bureau of Investigation">Federal Bureau of Investigation</option>



            </select><br><br>
            <input type="submit" class="submit" name="submit" value="Zarejestruj">
            <a href="panel.php" class="submit">Wróć do panelu</a>





        </form>
           </div> </div>

    <script>
        register.valid();


    </script>
    </body>
    </html>


<?php

    if(!empty($_POST['login']) || !empty($_POST['password']))
    {
        $login = clear($_POST['login']);
        $password = md5(clear($_POST['password']));
        $d = clear($_POST['department']);
		
		$query = "SELECT * FROM user_admin WHERE username='$login'";
		$wynik = mysql_query($query) or die ('Nie dodano rekordu, błąd :'. mysql_error());
		
		if(mysql_num_rows($wynik)>=1)
		{
			?>
			<script>
			alert("Taki użytkownik już istnieje!");
			
			</script>
			
			<?php
		}
		else
		{
			
		

        $query = "INSERT INTO user_admin VALUES (NULL,'$login','$password','$d')";

        $wynik = mysql_query($query) or die ('Nie dodano rekordu, błąd :'. mysql_error());

        if($wynik)
        {

            ?>

            <script>
                alert("Zarejestrowano!");
            </script>

<?php
        }


    }

}

}


?>

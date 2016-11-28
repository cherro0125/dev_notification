<?php
include 'functions/functions.php';
db_connect();
admin_login();
$userdata = get_user_data();
?>
<!doctype HTML>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>Law Enforcement Notification System</title>
</head>
<body>
<div class="container">
	<div class="header">
	</div><!-- KONIEC HEADER -->
	</br><div class="box">
	<?php
	$id = clear($_GET['id']);
	 $zapytanie = mysql_query("select * from wpisy
where id={$_GET['id']}") or die("nie ma danych");
	$r = mysql_fetch_assoc($zapytanie);
	if($r['wydzial']=="RCSD")
{
	$r['wydzial']= "Red County Sherrif's Department";
}
	echo "<h1><a href=".$r['global'].">".$r['name']."</h1></a>";
	echo "<form method='post'>";
	echo "<input type='submit' name='usun' value='USUN'>";
	echo "<input type='submit' name='przeczytano' value='ZMIEŃ STATUS'>";
    echo "<input type='submit' name='wydzial' value='ZMIEŃ WYDZIAŁ'>";
	echo "<input type='submit' name='wroc' value='WRÓĆ'>";
	echo "</form>";
	echo "<hr>";
	echo "<b>STATUS:</b><b> ".$r['status'].' '.$r['edit']."</b></br>";
	
	echo "<b>WYDZIAŁ:</b> ".$r['wydzial']."</br>";
	echo "<hr>";
	echo "<b>IP:</b>  ".$r['ip']."</br>";
	echo "<b>HOST:</b> ".$r['host']."</br>";
	echo "<hr>";
	echo "<b>Data dodania:</b> ".$r['data']."</br>";
	echo "<b>Telefon:</b> ".$r['phone']."</br>";
	echo "<b>Wiek:</b> ".$r['age']."</br>";
	echo "<b>Kolor oczu:</b> ".$r['eye']."</br>";
	echo "<b>Kolor włosów:</b> ".$r['hair']."</br>";
	echo "<b>Adres zamieszkania:</b> ".$r['adres']."</br>";
	echo "<b>Praca oraz stanowisko:</b> ".$r['job']."</br>";
	echo "<hr>";
	echo "<b>Treść:</b> ".$r['description']."</br>";
	
	if(isset($_POST['wroc'])){
		header('Location: panel.php');
	}
	
		if(isset($_POST['przeczytano'])){
			
		echo '<form method="post">';
  		echo '<select name="statusy">';
		echo '<option value="<font color=#04B404><b>ROZPATRZONY POZYTYWNIE</b></font>">ROZPATRZONY POZYTYWNIE</option>';
    	echo '<option value="<font color=#DF013A><b>ROZPATRZONY NEGATYWNIE</b></font>">ROZPATRZONY NEGATYWNIE</option>';
   	    echo ' <option value="<font color=#FFBF00><b>W TRAKCIE REALIZACJI</b></font>">W TRAKCIE REALIZACJI</option>';
		echo ' <option value="<font color=#000><b>OCZEKUJE</b></font>">OCZEKUJE</option>';
		echo ' <option value="<font color=#000>ARCHIWUM</font>">ARCHIWUM</option>';
  	    echo '</select>';
  		echo '<input type="submit" name="zatwierdz" value="Zatwierdz">';
		echo '</form>';

	}

if(isset($_POST['zatwierdz'])){
		$statusy = $_POST['statusy'];
		$id = clear($_GET['id']);
		$user = $userdata['username'];
		$zapytanie = "UPDATE `wpisy` SET `status` = '$statusy', `edit` = '[$user]' WHERE id=$id";
		$idzapytania = mysql_query($zapytanie);
		header('Refresh: 0.1');
		}
	
	if(isset($_POST['usun'])){
		$zapytanie = "DELETE FROM `wpisy` WHERE id=$id";
		$idzapytania = mysql_query($zapytanie);
		header('Location: panel.php');
	}

if(isset($_POST['wydzial'])){
    ?>
			
		 <form method="post">
  		 <select name="wydzialy">
		 <option value="RCSD">Red County Sheriff's Department</option>
                 <option value="Los Santos Police Department">Los Santos Police Department</option>
    	 <option value="Federal Bureau of Investigation">Federal Bureau of Investigation</option>
  	     </select>
  		 <input type="submit" name="zatwierdz_wydzial" value="Zatwierdz">
		</form>

	<?php
}

if(isset($_POST['zatwierdz_wydzial'])){
		$wydzialy = $_POST['wydzialy'];
		$id = clear($_GET['id']);
		$zapytanie = "UPDATE `wpisy` SET `wydzial` = '$wydzialy' WHERE id=$id";
		$idzapytania = mysql_query($zapytanie);
		header('Refresh: 0.1');
		}
?>
	</div></br></br>
</div><!-- KONIEC CONTAINER -->
</body>
</html>

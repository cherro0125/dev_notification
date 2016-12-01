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
	<title>Law Enforcement Notification System - blokowanie IP</title>
</head>
<body>
<div class="container">
	<div class="header">
	</div><!-- KONIEC HEADER -->
	</br><div class="box">
	<h1>
		Lista zablokowanych ip
		<hr>
	</h1>
	
	<form method="post">
		<input type="submit" name="dodaj" value="DODAJ">
		<input type="submit" name="usun" value="USUN">
		<input type="submit" name="wroc" value="WRÓC">
	</form>
	<?php
	if(isset($_POST['dodaj'])){
		echo '<br><form method="post">';
		echo '<input type="text" name="ip" placeholder="IP">';
		echo '<input type="text" name="description" placeholder="Powód">';
		echo '<input type="submit" name="zablokuj" value="Zablokuj">';
	}

	if(isset($_POST['zablokuj'])){
		$ip = clear($_POST['ip']);
		$host = gethostbyaddr($ip);
		$description = clear($_POST['description']);
		$data = date("Y-m-d H:i:s");
		if((empty($ip)) OR (empty($host)) OR (empty($description))) {
			echo '<script language="javascript">';
			echo 'alert("Nie uzupełniono wszystkich pól!")';
			echo '</script>';
		} else {
			$zapytanko2 = "SELECT * FROM blockip WHERE ip='$ip'";
			$wynik2 = mysql_query($zapytanko2);
			
			if (mysql_query($zapytanko2) >= 1) {
	//	$zapytanie = "INSERT INTO blockip values ('NULL','".$ip."','".$description."','".$host."','".$data."')";
 		$zapytanie = "INSERT INTO blockip (`id`, `ip`, `host`, `description`, `data`) VALUES (NULL,'$ip','$host','$description','$data')";	
	$wynik = mysql_query($zapytanie) or die ('Nie dodano rekordu, błąd :'. mysql_error());
		} else {
							echo '<script language="javascript">';
			echo 'alert("Wpis już istnieje!")';
			echo '</script>';
			}
	}
	}
	if(isset($_POST['usun'])){
		echo '<br><form method="post">';
		echo '<input type="text" name="id" placeholder="ID wpisu">';
		echo '<input type="submit" name="odblokuj" value="Odblokuj">';
	}
 if(isset($_POST['wroc'])){
	 header('Location: panel.php');
 }

	if(isset($_POST['odblokuj'])) {
				$id = clear($_POST['id']);
				if(empty($id)) {
				echo '<script language="javascript">';
				echo 'alert("Nie uzupełniono wszystkich pól!")';
				echo '</script>';
				} else {
				$zapytanie = "DELETE FROM blockip WHERE id='$id'";
				$wynik = mysql_query($zapytanie) or die ('Nie dodano rekordu, błąd :'. mysql_error());
				}
	}
	$id = clear($_GET['id']);
$wynik = mysql_query("SELECT * FROM blockip") or die('Błąd zapytania'); 

if(mysql_num_rows($wynik) > 0) { 

    echo "<table cellpadding=\"2\">"; 
echo "</br></br><div class='tabela'><tr bgcolor='#000'><td width='10'><font color='#fff'>ID</font></td><td width='220'><font color='#fff'>IP</font></td><td width='220'><font color='#fff'>HOST</font></td><td width='400'><font color='#fff'>OPIS</font></td><td width='180'><font color='#fff'>DATA</font></td></tr>"; 
    while($r = mysql_fetch_assoc($wynik)) { 
		echo '<center><div class="table">';
        echo "<tr>"; 
        echo "<td width='10'>".$r['id']."</td>"; 
	echo "<td width='220'>".$r['ip']."</td>"; 
	echo "<td width='220'>".$r['host']."</td>"; 
	echo "<td width='400'>".$r['description']."</td>";
	echo "<td width='180'>".$r['data']."</td>"; 
    } 
    echo "</table></div></center></div>"; 
} 
	
	if(isset($_POST['wroc'])){
		header('Location: panel.php');
	}
?>
	</div></br></br>
</div><!-- KONIEC CONTAINER -->
</body>
</html>

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
	<title>Law Enforcement Notification System - PANEL</title>
</head>
<body>
<div class="container">
	<div class="header">
	</div>
	<div class="content">
		<a href="ip.php" class="ip_button">BLOKOWANIE IP</a>
		<a href="archiwum.php" class="ip_button">ARCHIWUM</a>
		<a href="logout.php" class="ip_button">WYLOGUJ SIĘ</a>
		<?php
		if($_SESSION['department']=="Admin")
		{
			echo '<a href="register.php" class="ip_button">DODAJ UŻYTKOWNIKA</a>';
		}
		if(!empty($_SESSION['username']))
		{
		echo "<br><br><fieldset><center>";		
		echo "<span><b>Zalogowano jako</b><i> ".$_SESSION['username']."</i> </span>";
			if($_SESSION['department']!="RCSD")
			{
			echo "<span><b> Wydział:</b>  ".$_SESSION['department']."</span>";
			}
			else
			{
			echo "<span><b>Wydział:</b> Red Country Sherrif's Department</span>";
			}
			echo "</center></fieldset>";
		}

		?>

		
	<?php
	if($_SESSION['department']!="Admin")
	{
	
	$department = "AND wydzial ='" . $_SESSION['department'] ."' ";
	}
	else
	{
		$department= "";
	}

	$wynik = mysql_query("SELECT * FROM wpisy WHERE status<>'<font color=#000>ARCHIWUM</font>'".$department." ORDER BY data DESC") or die('Błąd zapytania');

if(mysql_num_rows($wynik) > 0) { 

    echo "<table cellpadding=\"2\">"; 
echo "</br></br><div class='tabela'><tr bgcolor='#000'><td width='150'><font color='#fff'>IMIE I NAZWISKO</font></td><td width='220'><font color='#fff'>DODANO</font></td><td width='250'><font color='#fff'>STATUS</font></td><td width='350'><font color='#fff'>WYDZIAŁ</font></td><td width='50'><font color='#fff'>AKCJA</font></td></tr>"; 
    while($r = mysql_fetch_assoc($wynik)) { 
		echo '<center><div class="table">';
        echo "<tr>"; 
        echo "<td width='150'>".$r['name']."</td>"; 
	echo "<td width='220'>".$r['data']."</td>"; 
	echo "<td width='250'>".$r['status']."</td>"; 
	if($r['wydzial']!="RCSD")
	{
	echo "<td width='350'>".$r['wydzial']."</td>"; 
	}
	else
	{
	echo "<td width='350'>Red County Sherrif's Department</td>";
	}
	echo "<td width='50' bgcolor='#000'><a href='view.php?id=".$r['id']."'><div class='table_button'>WYSWIETL</div></a></td>"; 
    } 
    echo "</table></div></center></div>"; 
} 
	
	?>
	</div>
	
</div><!-- KONIEC CONTAINER -->
</body>
</html>

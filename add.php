
<!doctype HTML>
<head>
<meta charset='UTF-8'>
<link rel="stylesheet" href="css/style.css">
<title>Law Enforcement Notification System</title>
</head>

<?php

include 'functions/functions.php';
db_connect();

$name = clear($_POST['name']);
$phone = clear($_POST['phone']);
$age = clear($_POST['age']);
$eye = clear($_POST['eye']);
$hair = clear($_POST['hair']);
$adres = clear($_POST['adres']);
$job = clear($_POST['job']);
$description = clear($_POST['description']);
$global = clear($_POST['global']);
$data = date("Y-m-d H:i:s");
$departament = clear($_POST['departament']);

if((empty($name)) OR (empty($phone)) OR (empty($age)) OR (empty($eye)) OR (empty($hair)) 
  OR (empty($job)) OR (empty($description)) OR (empty($global)) OR(empty($departament))) {


echo '<script language="javascript">';
echo 'alert("Nie uzupełniono wszystkich pól!")';
echo '</script>';
header('Refresh: 0.1; url=index.php');
}
else {
	$ip = $_SERVER['REMOTE_ADDR'];
	$host = gethostbyaddr($ip);
	 $zapytanie = "INSERT INTO wpisy SET name='$name', ip='$ip', host='$host', phone='$phone', age='$age', eye='$eye', hair='$hair', adres='$adres', job='$job', description='$description', global='$global', status='<font color=#000>OCZEKUJE</font>', wydzial='".$departament."', data='$data'";
 $wynik = mysql_query($zapytanie) or die ('Nie dodano rekordu, błąd :'. mysql_error());
	echo '<script language="javascript">';
echo 'alert("Wysłano zgłoszenie!")';
echo '</script>';
header('Refresh: 0.1; url=index.php');


}

?>
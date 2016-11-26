<?php
error_reporting(0);

define('DBHOST', 'mysql.hostinger.pl');
define('DBUSER', 'u584640449_soig');
define('DBPASS', 'CcfRNb4bEfJjOTP');
define('DBNAME', 'u584640449_soig');

function db_connect() {
   
    mysql_connect(DBHOST, DBUSER, DBPASS) or die('Brak połączenia z bazą danych.');
    mysql_select_db(DBNAME) or die('Problem z wybraniem bazy danych w MySQL');
}
function db_close() {
    mysql_close();
}

function sprawdz_ban(){
	$ip = $_SERVER['REMOTE_ADDR'];
	$host = gethostbyaddr($ip);
	$wynik = mysql_query("SELECT * FROM blockip WHERE ip='$ip'");
	$row = mysql_fetch_assoc($wynik);	
	$ipk = $row['ip'];
	if(($ipk)==($ip)){
		echo "masz bana phah";
		die();
	}
	
	$wynik = mysql_query("SELECT * FROM blockip WHERE host='$host'");
	$row = mysql_fetch_assoc($wynik);	
	$hostk = $row['host'];
	if(($hostk)==($host)){
		echo "masz bana phah";
		die();
	}
}


function refresh($time = 5, $url = '') {
 header('refresh: ' . $time . ($url == '' ? '' : '; url=' . $url));
}
 
function clear($text) {
    if(get_magic_quotes_gpc()) {
        $text = stripslashes($text);
    }
    $text = trim($text); 
    $text = mysql_real_escape_string($text); 
    $text = htmlspecialchars($text); 
    return $text;
}
function admin_login() {
    if(!$_SESSION['admin']) {
  ?>
﻿<?php
db_connect();
?>
<!doctype HTML>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/login.css">
	<title>Santos Clinic</title>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.2.6/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
	$(".username").focus(function() {
		$(".user-icon").css("left","-48px");
	});
	$(".username").blur(function() {
		$(".user-icon").css("left","0px");
	});
	
	$(".password").focus(function() {
		$(".pass-icon").css("left","-48px");
	});
	$(".password").blur(function() {
		$(".pass-icon").css("left","0px");
	});
});
</script>
</head>
<body>
<div class="container">
<div id="wrapper">


    <div class="user-icon"></div>
    <div class="pass-icon"></div>

<form name="login-form" class="login-form" action="login.php" method="post">

    <div class="header">
    <!--TITLE--><h1>Zaloguj się</h1><!--END TITLE-->
    <!--DESCRIPTION--><span>Zaloguj się korzystając z danych podanych przez administratora.</span><!--END DESCRIPTION-->
    </div>
    <!--END HEADER-->
	
	<!--CONTENT-->
    <div class="content">
	<!--USERNAME--><input  name="username" type="text" class="input username" value="Username" onfocus="this.value=''" /><!--END USERNAME-->
    <!--PASSWORD--><input name="password" type="password" class="input password" value="Password" onfocus="this.value=''" /><!--END PASSWORD-->
    </div>
    <!--END CONTENT-->
    
    <!--FOOTER-->
    <div class="footer_input">
  <input type="submit" name="login" value="Login" class="button" />
	<a href="index.php" class="button">Wróć</a>
    </div>
   

</form>


</div>

	
	<div class="gradient"></div>
	
</div><!-- KONIEC CONTAINER -->

</body>
</html>
<?php		
		die();

    }

}


function get_user_data($user_id = -1) {
   
    if($user_id == -1) {
        $user_id = $_SESSION['user_id'];
    }
    $result = mysql_query("SELECT * FROM `user_admin` WHERE `id` = '{$user_id}' LIMIT 1");
    if(mysql_num_rows($result) == 0) {
        return false;
    }
    return mysql_fetch_assoc($result);
}


session_start();
if(!isset($_SESSION['logged'])) {
    $_SESSION['logged'] = false;
    $_SESSION['user_id'] = -1;
}

if(!isset($_SESSION['admin'])) {
    $_SESSION['admin'] = false;
}
?>
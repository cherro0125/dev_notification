<?php 
include 'functions/functions.php';
db_connect();
sprawdz_ban();
?>
<!DOCTYPE HTML>
<head>
<meta charset='UTF-8'>
<link rel="stylesheet" href="css/style.css">
<title>Law Enforcement Notification System</title>

<script type="text/javascript">

function zliczaj(nr_f, nr_l, nr_t) {
  with(document.forms[0]) {
   var tekst = elements[nr_t].value; 
   var dl_tresc = elements[nr_t+1].value.length; 
   var maxlen = 2048;
   var prawdziwa = 0; 
   var entery = 0;
    for (i=0; i<dl_tresc; i++) {
       if (tekst.charAt(i) == "\n")  {
         prawdziwa++;
         entery++;
           if (navigator.appName != "Netscape") i++;
       }
      prawdziwa++;
    } // koniec for i
   elements[nr_l+1].value= maxlen - prawdziwa;
	document.getElementById("licznik").innerHTML = maxlen - prawdziwa; // wyświetl komunikat o licznie znaków
    if (prawdziwa>maxlen) {
       if (navigator.appName != "Netscape")
         elements[nr_t].value = elements[nr_t].value.substring(0,maxlen);
       else
         elements[nr_t].value = elements[nr_t].value.substring(0,maxlen-entery);
      elements[nr_l].value = 3 - maxlen;
      alert("Maksymalna długość to " + maxlen +"!");
   }
  }   // koniec with

}
</script>

</head>
<body>
	<div class="container">
		<div class="header"></div><hr>
		<div class="content">
			<h2>
			Prosimy o korzystanie z tej strony w sposób uprzednio przemyślany, gdyż każdy, kto nieumiejętnie posługuje się elektronicznym systemem zgłoszeń przestępstw, włączając w to celowe operowanie fałszywymi informacjami, podlega karze grzywny wynoszącej od $2000 do $8000 (art. 1 §6 kk).

Zgłaszając występki, podejrzenia o złamaniu prawa lub inne formy naruszeń ładu publicznego, bądź jeżeli byli państwo bezpośrednimi świadkami przestępstwa, prosimy o wysłanie zgłoszenia odpowiedniemu organowi ścigania, sugerując się hierarchicznością i wagą zaistniałej sytuacji. W formularzu należy umieścić prawdziwe dane, aby funkcjonariusze publiczni mogli zająć się zgłoszeniem oraz rozpocząć procedury związane ze sprawą.
    
    </br></br><b>*Za pomocne i trafne informacje FBI, LSPD oraz RCSD jest w stanie wypłacić wysokie nagrody pieniężne.</b>
			</h2>
			
			<form method="post" action="add.php">
			<hr>
			<h1>
				Wybierz rozdzaj zgłoszenia
			</h1>
			<hr>
			<label for="select">Departament:</label></br>
				<select id="select" class="text" name="departament" >
				<option value="Federal Bureau of Investigation">Federal Bureau of Investigation</option>
				<option value="Los Santos Police Department">Los Santos Police Department</option>
				<option value="RCSD">Red Country Sherrif's Department</option>
				
				
                </select>
			
			<hr>
			<h1>
				Informacje In Character
			</h1>
			<hr>
				<label for="text">Imię i nazwisko:</label></br>
				<input type="text" id="text" class="input" name="name" placeholder="Podaj Twoje Imię i Nazwisko"></br>
				<label for="text">Numer telefonu:</label></br>
				<input type="text" id="text" class="input" name="phone"  placeholder="Podaj Twój numer telefonu"></br>
				<label for="text">Wiek:</label></br>
				<input type="text" id="text" class="input" name="age"  placeholder="Podaj Twój wiek"></br>
				<label for="text">Kolor oczu:</label></br>
				<input type="text" id="text" class="input" name="eye"  placeholder="Podaj Twój kolor oczu"></br>
				<label for="text">Kolor włosów:</label></br>
				<input type="text" id="text" class="input" name="hair" placeholder="Podaj Twój kolor włosu"></br>
				<label for="text">Adres zamieszkania:</label></br>
				<input type="text" id="text" class="input" name="adres"  placeholder="Dla przykładu, Los Santos, Ganton 18"></br>
				<label for="text">Aktualna praca oraz stanowisko:</label></br>
				<input type="text" id="text" class="input" name="job"  placeholder="Twoja aktualna praca"></br>
				<label for="text">Opis zdarzenia [POZOSTAŁO <span id="licznik"> 2048</span> znaków] <input type="text" size="3" name="licznik" disabled hidden /> </label></br>
	
				<textarea id="text" class="text_area" onkeyup="zliczaj(0,7,8)" name="description" placeholder="Opis zdarzenia"  ></textarea></br>
				<h1>
				Informacje Out of Character
			</h1><hr>
				<label for="text">Link do twojego konta globalnego:</label></br>
				<input type="text" id="text" class="input" name="global" placeholder="Link do twojego konta globalnego"></br>
				<input type="submit" class="submit" name="submit" value="Prześlij">
			</form>
		</div>
		<p>Notification System Created by Cherro</p>
	</div>
</body>
</html>

# dev_notification


Instalacja:

1. Stwórz nową baze danych w MySQL (najlepiej o nazwie dev_notification).
2. Zaimportuj tabele do bazy z pliku "dev_notification.sql" znajdującego się w katalogu "importbazy".
3. Zmień dane logowania do bazy danych MySQL w pliku "functions\functions.php" :



define('DBHOST', 'localhost'); // host bazy danych MySQL

define('DBUSER', 'root'); // nazwa użytkownika do logowania do bazy MySQL

define('DBPASS', ''); // hasło do logowania do bazy MySQL

define('DBNAME', 'dev_notification'); // nazwa bazy, domyślnie "dev_notification"

4. Umieść gotowe pliki na hostingu bądź na swoim VPS'ie w odpowiednim katalogu.


Panel admina znajduje się pod adresem: http://alias.twojadomena/panel.php

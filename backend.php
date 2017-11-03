<html>
  <head>
	  <meta charset="UTF-8" />
	  <title>Testseite</title> 
  </head>
    <?php
      include('inc/Header.inc.php');
    ?>

    <?php
      $user = $_POST["user"];
      $passwort = sha1($_POST["passwort"]);
    
      if($user == "AndreasReichert" and $passwort == "d88ecd1b5b74025f000811118537c9fce4148279")
      {
        echo "<h1>Eingeloggt!</h1>";
	echo "<p>Hey $user, Du bist drin. :)</p>";
	
      }
      else
      {
        echo "<h1>Kein Einlass</h1>";
	echo "<p>Sorry, die Eingabe war falsch. :(</p>";
      }
    ?>
    
    <?php
      include('inc/Footer.inc.php');
    ?>

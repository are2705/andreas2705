<html>
  <head>
	  <meta charset="UTF-8" />
	  <title>Testseite</title> 
  </head>
  <body>

    <?php
      $user = $_POST["user"];
      $passwort = sha1($_POST["passwort"]);
    
      if($user == "AndreasReichert" and $passwort == "d88ecd1b5b74025f000811118537c9fce4148279")
      {
        echo "<h1>Eingeloggt!</h1>";
	echo "<p>Hey, es hat geklappt! :)</p>";
      }
      else
      {
        echo "<h1>Draussen</h1>";
	echo "<p>Sorry, die Eingabe war falsch. :(</p>";
      }
    ?>
    
    <p><a href="index.php">Zurück</a></p>
    
    <?php
      echo "<p>Es ist ".date("H:i")." Uhr.</p>"
    ?>
  </body>
</html>

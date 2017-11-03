<html>
  <head>
	  <meta charset="UTF-8" />
	  <title>Testseite</title> 
  </head>
  <body>
    <h1>Test</h1>
    
    <?php
      $user = $_POST["user"];
      $passwort = sha1($_POST["passwort"]);
    
      if($user == "AndreasReichert" and $passwort == "d88ecd1b5b74025f000811118537c9fce4148279")
      {
        echo "Hey, es hat geklappt! :)";
      }
      else
      {
        echo "Sorry, die Eingabe war falsch.";
      }
    ?>
    
    <p><a href="index.php">Zurück</a></p>
    
    <?php
      echo "<p>Es ist ".date("H:i")." Uhr.</p>"
    ?>
  </body>
</html>

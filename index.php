<html>
  <head>
	  <meta charset="UTF-8" />
	  <title>Testseite</title> 
  </head>
  <body>
    <h1>Hey</h1>
    
    <form action="backend.php" method="post">
      <p>Benutzer:<br /><input type="Text" name="user" /></p>
      <p>Passwort:<br /><input type="Password" name="passwort" /></p>
      <p><input type="Submit" value="Absenden" /></p>
    </form>
    
    <?php
      echo "<p>Es ist ".date("H:i")." Uhr.</p>"
    ?>
  </body>
</html>

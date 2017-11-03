<html>
  <head>
	  <meta charset="UTF-8" />
	  <title>Testseite</title> 
  </head>
    <?php
      include ("//inc//Header.inc.php");
    ?>
	
    <h1>Kleiner Test</h1>
    
    <form action="backend.php" method="post">
      <p>Benutzer:<br /><input type="Text" name="user" /></p>
      <p>Passwort:<br /><input type="Password" name="passwort" /></p>
      <p><input type="Submit" value="Absenden" /></p>
    </form>
	  
    <?php
      include ("//inc//footer.inc.php");
    ?>

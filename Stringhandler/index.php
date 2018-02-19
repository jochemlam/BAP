<!DOCTYPE html>
<html lang="nl">
	 <head>
		<meta charset="utf-8">
		<meta name="description" content="scripting GD">
		<meta name="author" content="Jochem Lammertsma">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="css/css.css">
		<title>PHP Stringhandler</title>
	</head>
	 <body>
		 <?php
		 if ( !empty($_GET)) {
				 $input1 =  $_GET['input1']; // input uit html
				 $input2 =  $_GET['input2']; // input uit html
			 }
			else{
				 $input1 = ""; //lege string
				 $input2 = ""; //lege string

			 }
       $trimmedinput1 = trim($input1);
       $trimmedinput2 = trim($input2);
       $input3 = $input1 . $input2;
			// "schrijf hier de benodigde code"
		  ?>
		<div class="wrapper">
			<form method="GET" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
				<fieldset>
				 <legend>Jochem Lammertsma <strong>GD1A</strong></legend>
				 <input type = "text" name = "input1"  value="<?php echo htmlentities($input1); ?>"><br>
				 <input type = "text" name = "input2"  value="<?php echo htmlentities($input2); ?>"><br>
				 <input type = "submit"  id = "submit" name = "submit" value = "submit">
			 </fieldset>
			</form>
			<hr>
			<ul>
					<li class="showSpaces">Ingevoerde string 1:  <?php  echo $input1;  ?> </li>
					<li class="showSpaces">Ingevoerde string 2:  <?php  echo $input2;  ?> </li>
					<li>String 1 getrimd trim():  <?php echo $trimmedinput1;   ?> </li>
          <li>String 2 getrimd trim():  <?php echo $trimmedinput2;   ?> </li>
          <li>String 3 geconcateneert:  <?php echo $input3;   ?> </li>
          <li>String 3 heeft zoveel characters: <?php echo strlen($input3); ?></li>
          <li>Zoeken naar " " . Er zit een " " op positie: <?php echo strpos($input3, " "); ?></li>
          <li>Zoeken naar "." . Er zit een "." op positie: <?php echo strpos($input3, "."); ?></li>
          <li>Zoeken naar "@" . Er zit een "@" op positie: <?php echo strpos($input3, "@"); ?></li>
          <li>De input kan een valide email zijn: <?php
          if (strpos($input3, '@') !== false) {
          echo 'true';
          }
          else {
            echo 'false';
          }?></li>
					<?php
					if (strpos($input3, 'php') !== false) {
          echo '<li>Check of de text het word PHP bevat zoja hier is de vervanger: '; echo str_replace("php", "Node.js", $input3);
          }
          ?>
				</ul>
				<hr>
				<ol>
				<li>Opdracht:<br> Stringhandler. Maak de PHP code voor <a href="http://schw.hosts.ma-cloud.nl/stringhandler/stringhandler.php">Stringhander<a>
				<li>Hoe moet jij inleveren?: <br>
						1) Link naar de werkende code in jouw portfoliomap bij Ma-cloud<br>
						2) Link naar jouw code bij GITHUB</li>
				<li>Bonus opdracht: maak PHP code waarmee jij controleert of een input een geldig e-mail adres zou kunnen zijn. Met JS controleren is niet toegestaan.</li>
				<li>Bonus opdracht: na submitten form, schrijf de eerder ingevoerde strings terug met PHP in de formulier invoer velden</li>
				<li>Bonus opdracht: zorg dat als het woord php in de input voorkomt, dat dit dan wordt vervangen met Node.js</li>
				</ol>
			</div>
	 </body>
</html>

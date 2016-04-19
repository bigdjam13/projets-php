<!DOCTYPE html>

<html>
<meta charset="utf-8">
 <head>
  <title>Test PHP</title>
 </head>
 <body>
 	
	<?php 
 	 
 	 $xml = simplexml_load_file("classe-simploniens.xml");

foreach ($xml as $simploniens) {

	echo "<tr><td>".$simploniens->prenom." ".$simploniens->nom."</td><td>".$simploniens->date_naissance."</td></tr>";
	}


?>
 </body>
</html>


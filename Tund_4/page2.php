<?php
  //echo "Siin on minu esimene PHP!";
  $name="Tundmatu";
  $surname= "inimene";
  $todayDate= date("m");
  
  //var_dump($_POST);
  if (isset($_POST["firstName"])){
	$name=$_POST["firstName"];
  }
	if (isset($_POST["SurName"])){
	$surname=$_POST["SurName"];    
  }
 
 if (isset($_POST["birthMonth"])){
	$name=$_POST["birthMonth"];
  }
 
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>
  <?php
  echo $name;
  echo " ";
  echo$surname;
  ?>
  , õppetöö</title>
</head>
<body>
  <h1>
  <?php
  echo $name ." " .$surname;
  ?>
  </h1>
  <p>Siin on minu <a href ="http://www.tlu.ee" target="_blank"> TLÜ </a> õppetöö raames valminud veebilehed. Need ei oma mingit sügavat sisu ja nende kopeerimine ei oma mõtet.</p>
  <P><u>See lehekülg on ainult harjutamiseks.</u></p>
  <hr>
  
  <form method="POST">
  <label>Eesnimi:</label>
  <input name="firstName" type="text" value="">
  <label>Perekonnanimi:</label>
  <input name="SurName" type="text" value="">
  <label>Sünniaasta</label>
  <input name="birthYear" type="number" min="1924" max="2003" value="1998"
  
  <label>Sünnikuu:</label>
  <select name="birthMonth">
  <option value="1">jaanuar</option>
  <option value="2">veebruar</option>
  <option value="3">märts</option>
  <option value="4">aprill</option>
  <option value="5">mai</option>
  <option value="6">juuni</option>
  <option value="7">juuli</option>
  <option value="8">august</option>
  <option value="9">september</option>
  <option value="10">oktoober</option>
  <option value="11">november</option>
  <option value="12">detsember</option>
  
  <option value="9" selected>september</option>
</select>


  <br>
  <input name="submitUserData" type="submit" value="Saada andmed">
  </form>
  
  <?php
     if (isset($_POST["firstName"])){
		echo "<br><p>Olete elanud järgnevatel aastatel:</p>"; 
		 echo "<ul> \n";
		 for ($i = $_POST["birthYear"]; $i <= date("Y"); $i++) {
		  echo "<li>" .$i ." </li> \n";
		 }
		 echo "</ul> \n";
	 }
	    
  ?>
  


</body>
</html>
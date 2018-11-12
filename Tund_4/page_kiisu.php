<?php
  //echo "Siin on minu esimene PHP!";
  $tablename= "kiisu";
  $catname="kassinimi";
  $catcolor="kassivärv";
  $cattaillength="kassisabapikkus";
  
  //var_dump($_POST);
  if (isset($_POST[""])){
	  $catname=$_POST["kassinimi"];
  }
  if (isset($_POST["kassivärv"])){
	  $catcolor=$_POST["kassivärv"];
  }
  if (isset($_POST["kassisabapikkus"])){
	  $cattaillength=$_POST["kassisabapikkus"];
  }
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>
  <?php
  echo $tablename;
  ?>
  , õppetöö</title>
</head>
<body>
  <h1>
  <?php
  echo $tablename;
  ?>
  </h1>
  <p>Siin on minu <a href ="http://www.tlu.ee" target="_blank"> TLÜ </a> õppetöö raames valminud veebilehed. Need ei oma mingit sügavat sisu ja nende kopeerimine ei oma mõtet.</p>
  <P><u>See lehekülg on ainult harjutamiseks.</u></p>
  <hr>
  
  <form method="POST">
  <label>kassinimi:</label>
  <input name="catname" type="text" value="">
  <label>kassivärv:</label>
  <input name="catcolor" type="text" value="">
  <label>kassisabapikkus</label>
  <input name="cattaillength" type="number" min="1" max="40" value=""

  <br>
  <input name="submitUserData" type="submit" value="Saada andmed">
  </form>
  
  

</body>
</html>
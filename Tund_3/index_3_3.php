<?php
  //echo "Siin on minu esimene PHP!";
  $name="Daria";
  $surname= "Kreydina";
  $todayDate= date("d.m.Y");
  $weekDayNow = date("N");
  echo $weekDayNow;
  $weekDayNamesET = ["esmaspäev", "teisipäev", "kolmapäev", "neljapäev", "reede", "laupäev", "pühapäev"];
  var_dump ($weekDayNamesET);
  echo $weekDayNamesET[0];
  $hourNow = date("H");
  //echo $hourNow;
  $partOfDay="";
  if ($hourNow <8) {
	  $partOfDay="varajane hommik";  
  }
  if ($hourNow >=8 and $hourNow <16){
	  $partOfDay="kooliaeg";
  }
  if ($hourNow >=16){
	   $partOfDay = "õhtuneaeg";
  }
  
  //loosime juhusliku pildi
  $picNum = mt_rand(2, 43);//random
  //echo $picNum;
  $picURL= "http://www.cs.tlu.ee/~rinde/media/fotod/TLU_600x400/tlu_";
  $picEXT= ".jpg";
  $picFileName = $picURL .$picNum .$picEXT;
  //echo $picFileName;
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
  
  <?php
 
  echo "<p>Täna on: " .$weekDayNamesET[$weekDayNow - 1] .", " .$todayDate ."</p> \n";
  echo "<p>Lehe avamise hetkel oli kell " .date("H:i:s") .", käes on " .$partOfDay .".</p> \n";
 
  ?>
  <!--<img src="http://greeny.cs.tlu.ee/~rinde/veebiprogrammeerimine2018s/tlu_terra_600x400_1.jpg" alt="TLÜ Terra õppehoone">-->
  
<img src="../../../~rinde/veebiprogrammeerimine2018s/tlu_terra_600x400_1.jpg" alt="TLÜ Terra õppehoone">
<p> Mul on sõber, kes ka teeb <a href="../../../../~merivor" target="_blank">veebi</a>.</p>

<img src="<?php echo $picFileName; ?>" alt ="juhuslik pilt Tallinna Ülikoolist"

</body>
</html>
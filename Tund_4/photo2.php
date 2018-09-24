<?php
  //echo "Siin on minu esimene PHP!";
  $name="Daria";
  $surname= "Kreydina";
  
$dirToRead = "../../pics/";
  $allFiles = scandir ($dirToRead);
  
  $allFiles = array_slice(scandir($dirToRead), 2);
  //var_dump($allFiles);
  
 //loosime juhusliku pildi
  $picNum = mt_rand(1, 3);//random
  //echo $picNum;
  $allFiles = array_slice(scandir($dirToRead), 2);
  $picEXT= ".jpg";
  $picFileName = $allFiles .$picNum .$picEXT;
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
  

<img src="<?php echo $picFileName; ?>" alt ="juhuslik pilt Tallinna Ülikoolist"

</body>
</html>
<?php
  class Photoupload {
	 private $tempName;
	 private $imageFileType;
	 private $myTempImage;
	 private $myImage;
	  
	 function __construct($tmpPic, $type){
		 $this->tempName = $tmpPic;
		 $this->imageFileType = $type;
		 $this->createImageFromFile();
 
	  }
	  
	  //destructor, mis käivitub klassi eemaldamisel
	 function __destruct(){
		imagedestroy($this->myTempImage);
		imagedestroy($this->myImage);
	  }
	  
	 private function createImageFromFile(){
		 if($this->imageFileType == "jpg" or $this->imageFileType == "jpeg"){
			$this->myTempImage = imagecreatefromjpeg($this->tempName);
			}
		 if($this->imageFileType == "png"){
					$this->myTempImage = imagecreatefrompng($this->tempName);
			}
		 if($this->imageFileType == "gif"){
					$this->myTempImage = imagecreatefromgif($this->tempName);
			}
	  }
	  
	  public function resizeImage($width, $height){
		  //vaatame pildi originaalsuuruse
		  $imageWidth = imagesx($this->myTempImage);
		  $imageHeight = imagesy($this->myTempImage);
		 //leian vajaliku suurendusfaktori
	      if($imageWidth > $imageHeight){
		  $sizeRatio = $imageWidth / $width;
		  }else {
		  $sizeRatio = $imageHeight / $height;
		  }
		  
		  $newWidth = round($imageWidth / $sizeRatio);
		  $newHeight = round($imageWidth / $sizeRatio);
		  $this->myImage = $this->changePicSize($this->myTempImage, $imageWidth, $imageHeight, $newWidth, $newHeight);
	  }
	  
	  private function changePicSize($image, $ow, $oh, $w, $h){ //ow-original width
		$newImage = imagecreatetruecolor($w, $h);
		imagecopyresampled($newImage, $image, 0, 0, 0, 0, $w, $h, $ow, $oh);
		return $newImage;
	}
	 
	 
	 public function addWatermark(){
		 //lisame vesimärgi
		 $waterMark = imagecreatefrompng("../vp_picfiles/vp_logo_color_w100_overlay.png");
		 $waterMarkWidth = imagesx($waterMark);
		 $waterMarkHeight = imagesy($waterMark);
		 $waterMarkPosX = $newWidth - $waterMarkWidth - 10;
		 $waterMarkPosY = $newHeight - $waterMarkHeight - 10;
		 //kopeerin vesimärgi pikslid pildile
		 imagecopy($myImage, $waterMark, $waterMarkPosX, $waterMarkPosY, 0, 0, $waterMarkWidth, $waterMarkHeight);
	 }
	 
	 public function addtext(){
		 //lisame ka teksti
		$textToImage = "Veebiprogrammeerimine";
		$textColor = imagecolorallocatealpha($this->myImage, 255, 255, 255, 60);
		imagettftext($myImage, 20, 0, 10, 25, $textColor, "../vp_picfiles/ARIALNI.TTF", $textToImage); //ttf - true time font
	 }
	 
	 public function savePhoto($targetDir){
		 $notice = "";
		  //muudetud suurusega pilt kirjutatakse pildifailiks
		if($this->imageFileType == "jpg" or $this->imageFileType == "jpeg"){
		  if(imagejpeg($this->myImage, $target_file, 90)){
			  $notice = 1;
		  //kui pilt salvestati, siis lisame andmebaasi
		  //addPhotoData($target_file_name, $_POST["altText"], $_POST["privacy"]);
			} else {
			  $notice = 0;
			}
	  }
	 }
	 if($this->imageFileType == "gif"){
		  if(imagejpeg($this->myImage, $target_file, 90)){
			  $notice = 1;
		  //kui pilt salvestati, siis lisame andmebaasi
		  //addPhotoData($target_file_name, $_POST["altText"], $_POST["privacy"]);
			} else {
			  $notice = 0;
			}
	  }
  }//class lõppeb
?>
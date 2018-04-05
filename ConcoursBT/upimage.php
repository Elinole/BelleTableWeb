<?php

include_once "bdd.php";
  $bdd = connexion_base();


//Variables
 $nom = $_POST['nom'];
 $about = $_POST['about'];
 $file = $_FILES['fichier']['name'];
 $temp = $_FILES['fichier']['tmp_name'];
 $type = strrchr($_FILES['fichier']['name'], '.'); 

if ($type == ".jpg") {
	move_uploaded_file($temp,"assets/oeuvres/image/".$file);
	$upload = uploadimg ($bdd, $nom, $file, $about);
	echo '<SCRIPT LANGUAGE="JavaScript">
		window.location.replace("upload.php?Acces=Déposé");
	</SCRIPT>';
}
elseif ($type == ".png") {
	move_uploaded_file($temp,"assets/oeuvres/image/".$file);
	$upload = uploadimg ($bdd, $nom, $file, $about);
	echo '<SCRIPT LANGUAGE="JavaScript">
		window.location.replace("upload.php?Acces=Déposé");
	</SCRIPT>';
}
else{
	echo '<SCRIPT LANGUAGE="JavaScript">
		window.location.replace("upload.php?Acces=Nondéposé");
	</SCRIPT>';
}

?>
<?php
require_once('verifier_access.php'); 
require_once("../classes/Categorie.php");
$cat = new Categorie($bdd);

$cat->_id = $_REQUEST['id'];
$cat->supprimer();
header("Location: categorie_liste.php");
?>
<?php
include('verifier_access.php'); 
include("../classes/Categorie.php");
$cat = new Categorie($bdd);

$cat->_id = $_REQUEST['id'];
$cat->supprimer();
header("Location: categorie_liste.php");
?>
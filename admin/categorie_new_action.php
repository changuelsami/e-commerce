<?php
include("../classes/Categorie.php");
include("../classes/Util.php");

@$libelle = $_POST['libelle'];
@$description = $_POST['description'];
@$id = $_POST['id'];

if( !empty($libelle) && !empty($description) ) 
{
	$cat = new Categorie();
	$util = new Util();
	$cat->_libelle = $libelle;
	$cat->_description = $description;
	$cat->_logo = $util->upload('logo', "../upload/");
	
	// Ajout
	if( empty($id) ) 
	{
		$id = $cat->ajouter();
		header("Location: categorie_liste.php");
	}

	// Modification
	elseif( !empty($id) ) 
	{
		$cat->_id = $id;
		$cat->modifier();
		header("Location: categorie_liste.php");
	}
	else exit('tous les champs sont obligatoires ! ');
} else exit('tous les champs sont obligatoires !!');
?>
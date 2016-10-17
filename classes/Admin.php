<?php
class Admin
{	
	private $_bdd;
	public function __construct($bdd) {$this->_bdd = $bdd;}
	/**
	Retourn le nombre de tous users inscrit dans la BD
	*/
	public function nombre_d_inscrit()
	{
		$q = "SELECT COUNT(*) AS nbr FROM joueur";
		$res = $this->_bdd->requete($q);
		$array = mysqli_fetch_array($res);
		echo $array['nbr'];
	}
	/**
	Retourn le nombre de tous les users inscrit dans un jeu passé en paramaitre.
	*/
	public function nombre_de_participation($id_categorie)
	{
		$q = "SELECT COUNT(*) AS nbr FROM joueur WHERE id_categorie = $id_categorie";
		$res = $this->_bdd->requete($q);
		$array = mysqli_fetch_array($res);
		echo $array['nbr'];
	}
	
	public function export()
	{
		$q = "SELECT * FROM joueur ORDER BY id_categorie";
		$res = $this->_bdd->requete($q);
		
		// Titre des colonnes de votre fichier .CSV ou .XLS
		$fichier = "ID;Email;Nom;Prenom;Score;ID Categorie";
		$fichier .= "\n";
		 
		$nomfichier = "participants";

		// Enregistrement des résultats ligne par ligne
		while($row = mysqli_fetch_object($res))
		{
		   $fichier .= "".$row->id.";".$row->email.";".$row->nom.";".$row->prenom.";".$row->score.";".$row->id_categorie."\n";
		}

		// Déclaration du type de contenu
		header("Content-type: application/vnd.ms-excel");
		header("Content-disposition: attachment; filename=$nomfichier.csv"); // Remplacer .csv par .xls pour exporter en .XLS
		print $fichier;
	}

}
?>
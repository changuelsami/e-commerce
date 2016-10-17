<?php
include("Mysql.php");
class Categorie extends Mysql
{
	// Les attributs privés
	private $_id;
	private $_libelle;
	private $_description;
	private $_logo;

	// Méthode magique pour les setters & getters
	public function __get($attribut) {
		if (property_exists($this, $attribut)) 
                return htmlentities( $this->$attribut );           
    }

    public function __set($attribut, $value) {
        if (property_exists($this, $attribut)) {
            $this->$attribut = (mysqli_real_escape_string($this->get_cnx(), $value)) ;
            //$this->$attribut = $value ;
        }
        else
        	exit("Prop inexistante");
    }

	public function details()
	{
		$q = "SELECT * FROM categorie WHERE id ='$this->_id'";
		$res = $this->requete($q);
		$row = mysqli_fetch_array( $res); 
		$cat = new Categorie();
		
		$cat->_id 			= $row['id'];
		$cat->_libelle 		= $row['libelle'];
		$cat->_logo 		= $row['logo'];
		$cat->_description	= $row['description'];
	
		return $cat;
	}


	public function liste()
	{
		$q = "SELECT * FROM categorie ORDER BY libelle";
		$list_cat = array(); // Tableau VIDE
		$res = $this->requete($q);
		while($row = mysqli_fetch_array( $res)){
			$cat = new Categorie();

			$cat->_id 			= $row['id'];
			$cat->_libelle 		= $row['libelle'];
			$cat->_logo 		= $row['logo'];
			$cat->_description	= $row['description'];
		
			$list_cat[]=$cat;
		}
		
		return $list_cat;
	}
	
	public function ajouter()
	{
	    $q = "INSERT INTO categorie(id, libelle, logo, description) VALUES 
	  		(  null				, '$this->_libelle'		,
			  '$this->_logo'	, '$this->_description'	
			)";
		$res = $this->requete($q);
		return mysqli_insert_id($this->get_cnx());
	}
	
	public function modifier(){
		$q = "UPDATE categorie SET
			  libelle 	= '$this->_libelle',
			  logo = IF('$this->_logo' = '', logo, '$this->_logo') ,
			  description = '$this->_description'

			  WHERE id = '$this->_id' ";
	  
		$res = $this->requete($q);
		return $res;
	}

	public function supprimer(){
		$q = "DELETE FROM categorie WHERE id = '$this->_id'";
		$res = $this->requete($q);
		return $res;
	}	 
}
?>
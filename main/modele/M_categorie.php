<?php
require_once "M_generique.php";
require_once "metiers/Categorie.php";

class M_categorie extends M_generique
{
    public function GetListe()
    {
        $resultat=array();
        $this->connexion();
        $req="select * from categorie";
        $res=mysqli_query($this->GetCnx(),$req);
        $ligne=mysqli_fetch_assoc($res);
        while ($ligne)
        {
            $cat=new Categorie($ligne["cat_id"],$ligne["cat_libelle"]);
            $resultat[]=$cat;
            $ligne=mysqli_fetch_assoc($res);
        }
        $this->deconnexion();
        return $resultat;
    }
    public function GetCategorie($id)
    {
        $resultat=null;
        $this->connexion();
        $req="select * from categorie where cat_id='".$id."'";
        $res=mysqli_query($this->GetCnx(),$req);
        $ligne=mysqli_fetch_assoc($res);
        if($ligne)
        {
            $categorie=new Categorie($ligne["cat_id"],$ligne["cat_libelle"]);
            $resultat=$categorie;
        }
        $this->deconnexion();
        return $resultat;
    }
}
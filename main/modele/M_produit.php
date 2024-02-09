<?php
require_once "M_generique.php";
require_once "metiers/Produit.php";
class M_produit extends M_generique
{
    public function GetListe()
    {
        $sql = "select * from produit";
        $resultat=array();
        $this->connexion();
        $res = mysqli_query($this->GetCnx(),$sql);
        $ligne =mysqli_fetch_assoc($res);
        while ($ligne){
            $produit=new Produit($ligne["pro_id"],$ligne["pro_reference"],$ligne["pro_designation"],$ligne["pro_prixTTC"],$ligne["pro_photo"],$ligne["pro_categorie"]);
            $resultat[]=$produit;
            $ligne=mysqli_fetch_assoc($res);
        }
        $this->deconnexion();
        return $resultat;
    }
    public function GetProduit($id)
    {
        $this->connexion();
        $req="select * from produit where pro_categorie='".$id."'";
        $resultat=array();
        $res=mysqli_query($this->GetCnx(),$req);
        $ligne=mysqli_fetch_assoc($res);
        while ($ligne)
        {
            $produit=new Produit($ligne["pro_id"],$ligne["pro_reference"],$ligne["pro_designation"],$ligne["pro_prixTTC"],$ligne["pro_photo"],$ligne["pro_categorie"]);
            $resultat[]=$produit;
            $ligne=mysqli_fetch_assoc($res);
        }
        $this->deconnexion();
        return $resultat;
    }
    public function Ajouter($id, $reference, $designation, $prixTTC, $photo, $categorie)
    {
        $this->connexion();
        $id=mysqli_real_escape_string($this->GetCnx(),$id);
        $reference=mysqli_real_escape_string($this->GetCnx(),$reference);
        $designation=mysqli_real_escape_string($this->GetCnx(),$designation);
        $prixTTC=mysqli_real_escape_string($this->GetCnx(),$prixTTC);
        $photo=mysqli_real_escape_string($this->GetCnx(),$photo);
        $categorie=mysqli_real_escape_string($this->GetCnx(),$categorie);
        $produit=new Produit($id, $reference, $designation, $prixTTC, $photo, $categorie);
        $req="insert into produit values ('".$id."','".$reference."','".$designation."','".$prixTTC."','".$photo."','".$categorie."')";
        $ok=mysqli_query($this->GetCnx(), $req);
        if (!$ok)
        {
            $produit=null;
        }
        $this->deconnexion();
        return $produit;
    }
}
?>
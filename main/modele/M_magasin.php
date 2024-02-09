<?php
require_once "M_generique.php";
require_once "metiers/Magasin.php";

class M_magasin extends m_generique
{
    public function Getliste()
    {
            $sql = "select * from magasin";
        $resultat=array();
        $this->connexion();
        $res = mysqli_query($this->GetCnx(),$sql);
        $ligne =mysqli_fetch_assoc($res);
        while ($ligne){
            $magasin=new Magasin($ligne["mag_code"],$ligne["mag_nom"],$ligne["mag_adresseRue"],$ligne["mag_cpVille"]);
            $resultat[]=$magasin;
            $ligne=mysqli_fetch_assoc($res);

        }
        $this->deconnexion();
        return $resultat;
    }
    public function GetMagasin($code)
    {
        $this->connexion();
        $req="select * from magasin where mag_code='".$code."'";
        $res=mysqli_query($this->GetCnx(),$req);
        $ligne=mysqli_fetch_assoc($res);
        if ($ligne)
        {
            $resultat=new Magasin($ligne["mag_code"],$ligne["mag_nom"],$ligne["mag_adresseRue"],$ligne["mag_cpVille"]);
        }
        else
        {
            $resultat=null;
        }
        $this->deconnexion();
        return $resultat;
    }
}
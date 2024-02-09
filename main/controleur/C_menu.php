<?php
require_once "modele/M_produit.php";
require_once "modele/M_categorie.php";
require_once "modele/M_magasin.php";

class C_menu
{
    private $modeleCategorie;
    private $modeleMagasin;
    private $modeleProduit;
    private $data_cat;
    private $data_mag;
    public function __construct()
    {
        $this->modeleProduit=new M_produit();
        $this->modeleCategorie=new M_categorie();
        $this->modeleMagasin=new M_magasin();
    }
    public function FillData(&$data)
    {
        $data['lesProduits']=$this->modeleProduit->GetListe();

    }
    public function GetCategorie(&$data_cat)
    {
        $data_cat['lesCategories']=$this->modeleCategorie->GetListe();
    }

    public function GetMagasin(&$data_mag)
    {
        $data_mag['lesMagasins']=$this->modeleMagasin->GetListe();
    }
}
?>
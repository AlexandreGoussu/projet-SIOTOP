<?php
require_once "C_menu.php";
require_once "modele/M_categorie.php";
require_once "modele/M_produit.php";
class C_consulterProduit
{
    private $data;
    private $data_cat;
    private $controleurMenu;
    private $modeleCategorie;
    private $modeleProduit;
    public function __construct()
    {
        $this->data=array();
        $this->data_cat=array();
        $this->controleurMenu=new C_menu();
        $this->modeleCategorie=new M_categorie();
        $this->modeleProduit=new M_produit();
    }
    public function action_listeProduit()
    {
        $data["produit"] = $this->controleurMenu->FillData($this->data);
        $data_cat["lesCategories"] = $this->controleurMenu->GetCategorie($this->data_cat);
        require_once "vue/V_listeProduit.php";
    }
public function action_trierCategorie($categ)
    {
        $this->data['produit']=$this->modeleProduit->GetProduit($categ);
        require_once "vue/V_catProduit.php";
    }
}
?>


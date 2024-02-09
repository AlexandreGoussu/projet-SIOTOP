<?php
require_once "C_menu.php";
require_once "modele/M_produit.php";
class C_ajouterProduit
{
    private $data;
    private $controleurMenu;
    private $modeleProduit;
    public function __construct()
    {
        $this->data=array();
        $this->controleurMenu=new C_menu();
        $this->modeleProduit=new M_produit();
    }
    public function action_saisie()
    {
        $this->controleurMenu->FillData($this->data);
        require_once "vue/V_saisieProduit.php";
    }
    public function action_ajouter($id, $reference, $designation, $prixTTC, $photo, $categorie)
    {
        $this->controleurMenu->FillData($this->data);
        if(is_null($this->modeleProduit->GetProduit($id)))
        {
            $produit=$this->modeleProduit->Ajouter($id, $reference, $designation, $prixTTC, $photo, $categorie);
            if (is_null($produit))
            {
                $this->data['leMessage']="L'ajout a échoué pour une raison indéterminée.";
            }
            else
            {
                $this->data['leMessage']=$produit->GetReference()." ".$produit->GetDesignation()." ajouté.";
            }
        }
        else
        {
            $this->data['leMessage']="Le matricule ".$id." existe déjà, ajout annulé.";
        }
        require_once "vue/v_message.php";
    }
}
?>
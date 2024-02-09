<?php

Class Produit
{
    private $pro_id;
    private $pro_reference;
    private $pro_designation;
    private $pro_prixTTC;
    private $pro_photo;
    private $pro_categorie;

    public function __construct($id,$reference,$designation,$prixTTC,$photo,$categorie) {
        $this->pro_id=$id; $this->pro_reference=$reference;
        $this->pro_designation=$designation; $this->pro_prixTTC=$prixTTC;
        $this->pro_photo=$photo; $this->pro_categorie=$categorie;
    }
    public function GetId()
    {
        return $this->pro_id; }
    public function GetReference()
    {
        return $this->pro_reference;
    }
    public function GetDesignation()
    {
        return $this->pro_designation; }
    public function GetPrixTTC()
    {
        return $this->pro_prixTTC;
    }
    public function GetPhoto()
    {
        return $this->pro_photo; }
    public function GetCategorie()
    {
        return $this->pro_categorie;
    }

}
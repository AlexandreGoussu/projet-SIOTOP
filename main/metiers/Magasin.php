<?php
Class Magasin
{
    private $mag_code;
    private $mag_nom;
    private $mag_adresseRue;
    private $mag_cpVille;

    public function __construct($code,$nom,$adresseRue,$cpVille) {
        $this->mag_code=$code; $this->mag_nom=$nom;
        $this->mag_adresseRue=$adresseRue; $this->mag_cpVille=$cpVille;
    }
    public function GetCode()
    {
        return $this->mag_code; }
    public function GetNom()
    {
        return $this->mag_nom;
    }
    public function GetAdresseRue()
    {
        return $this->mag_adresseRue; }
    public function GetCpVille()
    {
        return $this->mag_cpVille;
    }

}
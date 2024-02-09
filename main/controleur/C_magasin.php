<?php
require_once "modele/M_magasin.php";

require_once "C_menu.php";
class C_magasin
{
    private $controleurMenu;
    private $dataMagasin;
    public function __construct()
    {
        $this->dataMagasin=array();
        $this->controleurMenu=new C_menu();
    }
    public function action_listeMagasin()
    {
        $dataMagasin["lesMagasins"] = $this->controleurMenu->GetMagasin($this->dataMagasin);
        require_once "vue/V_magasin.php";
    }



}
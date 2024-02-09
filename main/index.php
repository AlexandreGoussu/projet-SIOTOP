<?php
if (!empty($_GET['page']))
{
    $page=$_GET['page'];
}
else
{
    $page="accueil";
}
//echo $page;
switch ($page)
{
    case "produits":
        require_once "controleur/C_consulterProduit.php";
        $controleur=new C_consulterProduit();
        $controleur->action_listeProduit();
        break;
    case "magasins":
        require_once "controleur/C_magasin.php";
        $controleur = new C_magasin();
        $controleur->action_listeMagasin();
        break;
    case "catProduit":
        require_once "controleur/C_consulterProduit.php";
        $controleur=new C_consulterProduit();
        $controleur->action_trierCategorie($_POST['categorie']);
        break;
    default:
        require_once "controleur/C_accueil.php";
        $controleur=new C_accueil();
        $controleur->action_afficher();
        break;
}

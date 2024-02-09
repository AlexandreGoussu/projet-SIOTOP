<?php include_once('V_entete.php');?>
<div id="bloc-page">
    <?php include_once('V_menu.php');?>
    <div id="bloc-contenu">
        <?php
        if (is_null($this->data_cat['lesCategories']))
        {
            echo '<h2>Tous les produits</h2>';
        }
        else
        {
            echo '<h2>'.$this->data_cat['lesCategories']->GetLibelle().'</h2>';
        }
        echo '<table class="tableau">';
        foreach ($this->data['produit'] as $unProduit)
        {
            echo '<tr>';
            echo '<td>'.$unProduit->GetId().'</td>';
            echo '<td>'.$unProduit->GetReference().'</td>';
            echo '<td>'.$unProduit->GetDesignation().'</td>';
            echo '<td>'.$unProduit->GetPrixTTC().'</td>';
            echo '<td>'.$unProduit->GetPhoto().'</td>';
            echo '<td>'.$unProduit->GetCategorie().'</td>';
            echo '</tr>';
        }
        echo '</table>';
        ?>
    </div>
</div>
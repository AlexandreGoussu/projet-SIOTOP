<?php include_once('V_entete.php');?>
    <div id="bloc-page">
<?php include_once('V_menu.php');?>
<div id="bloc-contenu">
            <?php
            if (!is_null($this->dataMagasin['lesMagasins']))
            {
                echo '<h2>Tous les Magasins</h2>';
            }

            echo '<table class="tableau">';
            foreach ($this->dataMagasin['lesMagasins'] as $unMagasin)
            {
                echo '<tr>';
                echo '<td>'.$unMagasin->GetCode().'</td>';
                echo '<td>'.$unMagasin->GetNom().'</td>';
                echo '<td>'.$unMagasin->GetAdresseRue().'</td>';
                echo '<td>'.$unMagasin->GetCpVille().'</td>';
                echo '</tr>';
            }
            echo '</table>';
            ?>
    </div>
<?php include_once('v_piedPage.php');?>
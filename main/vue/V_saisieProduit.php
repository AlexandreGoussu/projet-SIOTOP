<?php include_once('V_entete.php');?>
    <div id="bloc-page">
        <?php include_once('V_menu.php');?>
        <div id="bloc-contenu">
            <h2>Ajout d'un employé</H2>
            <form action="index.php?page=ajoutProduit" method="post">
                Id : <input type="text" name="id" size=4 /><br/>
                Reference : <input type="text" name="reference" size=50 /><br/>
                Designation : <input type="text" name="designation" size=50 /><br/>
                PrixTTC : <input type="text" name="nom" size=50 /><br/>
                Photo : <input type="file" name="prenom" size=50 /><br/>
                Service :
                <?php
                echo '<select name="categorie" size="1">';
                foreach ($this->data['lesProduits'] as $unProduit)
                {
                    echo '<option value="'.$unProduit->GetId().'">'.$unProduit->GetReference().'</option>';
                }
                echo '</select>';
                ?>
                <br/>
                <input type="submit" value = "Enregistrer" />
            </form>
        </div>
    </div>
<?php include_once('V_piedPage.php');?>
<?php include_once('V_entete.php'); ?>
<div id="bloc-page">
    <?php include_once('V_menu.php'); ?>
    <div id="page">
        <div id="nav">
            <form action="index.php?page=catProduit" method="post">
                <select name="categorie" size="1">
                    <option selected value="all">Toutes les catégories</option>
                    <?php foreach ($this->data_cat['lesCategories'] as $uneCategorie): ?>
                        <option value="<?= $uneCategorie->GetId() ?>"><?= $uneCategorie->GetLibelle() ?></option>
                    <?php endforeach; ?>
                </select>
                <input type="submit" value="Consulter" />
            </form>
        </div>
        <div id="bloc-contenu">
            <?php if (is_null($this->data_cat['lesCategories'])): ?>
                <h2>Tous les produits</h2>
            <?php endif; ?>
            <div class="row">
                <?php $count = 0; ?>
                <?php foreach ($this->data['lesProduits'] as $unProduit): ?>
                <?php if ($count % 4 == 0): ?>
            </div><div class="row">
                <?php endif; ?>
                <div class="col">
                    <div class="vignette">
                        <img src="photos/<?= $unProduit->GetPhoto() ?>" alt="<?= $unProduit->GetDesignation() ?>" width="100px">
                        <div class="designation"><?= $unProduit->GetDesignation() ?></div>
                        <div class="prix"><?= $unProduit->GetPrixTTC() ?></div>
                    </div>
                </div>
                <?php $count++; ?>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
<?php include_once('v_piedPage.php'); ?>

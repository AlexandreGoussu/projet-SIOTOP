<?php include_once('V_entete.php');?>
    <div id="bloc-page">
        <?php include_once('V_menu.php');?>
        <div id="bloc-contenu">
            <hr/>
            <p><?php echo $this->data['leMessage']; ?></p> <hr/>
        </div>
    </div>
<?php include_once('V_piedPage.php');?>
<h1>Réglages</h1>

<div class="container">
    <form action="#" method="#">
        <div>
            <h2>Dernière date de rangement:</h2>
            <input type="datetime" name="dateOrdering" value="<?= $json->dateOrdering;?>"/>
        </div>
        <div>
            <h2>Dossier de recherche par défaut:</h2>
            <input type="text" name="folder" value="<?= $json->folder;?>"/>
        </div>
        <div>
            <h2>Formats vidéo pris en compte:</h2>
            <?php 
                foreach($json->videoFormats as $format){
                    ?>
                    <div class="checkbox">
                        <label for="<?= $format; ?>">
                            <input type="checkbox" name="formats" id="<?= $format; ?>" value="<?= $format; ?>">
                            <strong><?= $format; ?></strong>
                        </label>
                    </div>
                    
                <?php }
            ?>
            <div class="addable">
                
            </div>
        </div>
        <div>
            <h2>Formats audio pris en compte:</h2>
            <?php 
                foreach($json->audioFormats as $format){
                    ?>
                    <div class="checkbox">
                        <label for="<?= $format; ?>">
                            <input type="checkbox" name="formats" id="<?= $format; ?>" value="<?= $format; ?>">
                            <strong><?= $format; ?></strong>
                        </label>
                    </div>
                    
                <?php }
            ?>
            <div class="addable">
                
            </div>
        </div>
    </form>
</div>
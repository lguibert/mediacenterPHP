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
                        <label class="labelSettings" for="<?= $format; ?>">
                            <input type="checkbox" name="formats" id="<?= $format; ?>" value="<?= $format; ?>">
                            <strong><?= $format; ?></strong>                            
                        </label>
                        <?= $this->Html->image('delete.png', array('alt' => 'Supprimer','title' => 'Supprimer','class' => 'deleteSmall','value' => $format));?>
                    </div>
                    
                <?php }
            ?>
            <div class="addable">
                <?= $this->Html->image('addVideo.png', array('alt' => 'Ajouter un format vidéo','title' => 'Ajouter un format vidéo','class' => 'add'));?>
                <div class="form-addable">
                    <input type="text"/>
                    <?= $this->Html->image('ok.png', array('alt' => 'Valider','title' => 'Valider','class' => 'validate'));?>                
                </div>
            </div>
        </div>
        <div>
            <h2>Formats audio pris en compte:</h2>
            <?php 
                foreach($json->audioFormats as $format){
                    ?>
                    <div class="checkbox">
                        <label class="labelSettings" for="<?= $format; ?>">
                            <input type="checkbox" name="formats" id="<?= $format; ?>" value="<?= $format; ?>">
                            <strong><?= $format; ?></strong>                            
                        </label>
                        <?= $this->Html->image('delete.png', array('alt' => 'Supprimer','title' => 'Supprimer','class' => 'deleteSmall','value' => $format));?>
                    </div>
                    
                <?php }
            ?>
            <div class="addable">
                <?= $this->Html->image('addAudio.png', array('alt' => 'Ajouter un format audio','title' => 'Ajouter un format audio','class' => 'add'));?>
                <div class="form-addable">
                    <input type="text"/>
                    <?= $this->Html->image('ok.png', array('alt' => 'Valider','title' => 'Valider','class' => 'validate'));?> 
                </div>
            </div>
        </div>
    </form>
</div>
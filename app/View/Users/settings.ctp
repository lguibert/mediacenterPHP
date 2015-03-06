<h1>Réglages</h1>

<div class="container">
    <form id='formSettings' action="<?= $this->Html->url(array('controller' => 'users', 'action' => 'updateSettings')) ?>" method="post">
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
            <div id='containerVideoFormats'>
                <ul>
                    <?php 
                        foreach($json->videoFormats as $format){
                            ?>
                            <li class="formats" id="<?= $format; ?>" value="<?= $format; ?>">
                                <strong><?= $format; ?></strong>   
                                <?= $this->Html->image('delete.png', array('alt' => 'Supprimer','title' => 'Supprimer','class' => 'deleteSmall','value' => $format));?>
                            </li>
                        <?php }
                    ?>
                </ul>
            </div>
            <div class="addable">
                <?= $this->Html->image('addVideo.png', array('alt' => 'Ajouter un format vidéo','title' => 'Ajouter un format vidéo','class' => 'add'));?>
                <div class="form-addable">
                    <input type="text" required name="newVideoFormat" id="newVideoFormat"/>
                    <?= $this->Form->submit('Valider', array('type'=>'image','src' => 'app/webroot/img/ok.png', 'alt' => 'Valider','title' => 'Valider','class' => 'validate validateFormat', 'id' => 'validateVideoFormat', 'category' => 'video'));  ?>
                </div>
            </div>
        </div>
        <div>
            <h2>Formats audio pris en compte:</h2>
            <div id='containerAudioFormats'>
                <ul>
            <?php 
                foreach($json->audioFormats as $format){
                    ?>
                    <li class="formats" id="<?= $format; ?>" value="<?= $format; ?>">
                        <strong><?= $format; ?></strong>   
                        <?= $this->Html->image('delete.png', array('alt' => 'Supprimer','title' => 'Supprimer','class' => 'deleteSmall','value' => $format));?>
                    </li>                    
                <?php }
            ?>
                </ul>
            </div>
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
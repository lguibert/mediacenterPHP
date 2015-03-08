<h1>Réglages</h1>

<div class="container">    
    <div>
        <h2>Dernière date de rangement:</h2>
        <p><?= $json->dateOrdering;?></p>
    </div>
    <div>
        <form class="formSettings" id='formSettingsFolder' action="<?= $this->Html->url(array('controller' => 'users', 'action' => 'updateSettings')) ?>" method="post">
            <h2>Dossiers de recherche par défaut:</h2>
            <div id="containerFolders">                            
                <ul>
                    <?php 
                        foreach($json->folders as $folder){
                            ?>
                            <li class="folders" id="<?= $folder; ?>" value="<?= $folder; ?>">
                                <strong><?= $folder; ?></strong>   
                                <?= $this->Html->image('delete.png', array('alt' => 'Supprimer','title' => 'Supprimer','class' => 'deleteSmall','value' => $folder, 'category' => 'folder'));?>
                            </li>
                        <?php }
                    ?>
                </ul>
            </div>
            <div class="addable">
                <?= $this->Html->image('addFolder.png', array('alt' => 'Ajouter un dossier de recherche','title' => 'Ajouter un dossier de recherche','class' => 'add'));?>
                <div class="form-addable">
                    <input type="text" required name="newFolder" id="newFolder"/>
                    <?= $this->Form->submit('Valider', array('type'=>'image','src' => 'app/webroot/img/ok.png', 'alt' => 'Valider','title' => 'Valider','class' => 'validate validateFormat', 'id' => 'validateVideoFormat', 'category' => 'folder'));  ?>
                </div>
            </div>        
        </form>
    </div>
    <div>
        <form class="formSettings" id='formSettingsVideo' action="<?= $this->Html->url(array('controller' => 'users', 'action' => 'updateSettings')) ?>" method="post">
            <h2>Formats vidéo pris en compte:</h2>
            <div id='containerVideoFormats'>
                <ul>
                    <?php 
                        foreach($json->videoFormats as $format){
                            ?>
                            <li class="formats" id="<?= $format; ?>" value="<?= $format; ?>">
                                <strong><?= $format; ?></strong>   
                                <?= $this->Html->image('delete.png', array('alt' => 'Supprimer','title' => 'Supprimer','class' => 'deleteSmall','value' => $format, 'category' => 'video'));?>
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
        </form>
    </div>
    <div>
        <form class="formSettings" id='formSettingsAudio' action="<?= $this->Html->url(array('controller' => 'users', 'action' => 'updateSettings')) ?>" method="post">
            <h2>Formats audio pris en compte:</h2>
            <div id='containerAudioFormats'>
                <ul>
            <?php 
                foreach($json->audioFormats as $format){
                    ?>
                    <li class="formats" id="<?= $format; ?>" value="<?= $format; ?>">
                        <strong><?= $format; ?></strong>   
                        <?= $this->Html->image('delete.png', array('alt' => 'Supprimer','title' => 'Supprimer','class' => 'deleteSmall','value' => $format, 'category' => 'audio'));?>
                    </li>                    
                <?php }
            ?>
                </ul>
            </div>
            <div class="addable">
                <?= $this->Html->image('addAudio.png', array('alt' => 'Ajouter un format audio','title' => 'Ajouter un format audio','class' => 'add'));?>
                <div class="form-addable">
                    <input type="text" required name="newFolder" id="newFolder"/>
                    <?= $this->Form->submit('Valider', array('type'=>'image','src' => 'app/webroot/img/ok.png', 'alt' => 'Valider','title' => 'Valider','class' => 'validate validateFormat', 'id' => 'validateVideoFormat', 'category' => 'audio'));  ?>
                </div>
            </div>
        </form>
    </div>
</div>
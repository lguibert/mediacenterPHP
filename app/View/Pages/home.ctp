<div id="filesPresentation" class='container'>
    <h1><?= $countGlobal; ?> fichiers</h1>
    <div class='globals row'>
        <h1 class="clickable">Films (<?= $movies[1];?>):</h1>
        <div class="contains">
            <?php
            foreach($movies[0] as $file){
                ?>
                <div class='col-md-2 files col-xs-2'>
                    <p><?= $file; ?></p>
                </div>
                <?php
            } ?>
        </div>
    </div>
    
    <div class='globals row'>
        <h1 class="clickable">Séries (<?= $series[1];?>):</h1>
        <div class="contains">
            <?php
            foreach($series[0] as $file){
                ?>
                <div class='col-md-2 files col-xs-2'>
                    <p><?= $file; ?></p>
                </div>
                <?php
            } ?>
        </div>
    </div>
    
    <div class='globals row'>
        <h1 class="clickable">Musiques (<?= $musics[1];?>):</h1>
        <div class="contains">
            <?php
            foreach($musics[0] as $file){
                ?>
                <div class='col-md-2 files col-xs-2'>
                    <p><?= $file; ?></p>
                </div>
                <?php
            } ?>
        </div>
    </div>
    
    <div class='globals row'>
        <h1 class="clickable">Autres (<?= $others[1];?>):</h1>
        <div class="contains">
            <?php
            foreach($others[0] as $file){
                ?>
                <div class='col-md-2 files col-xs-2'>
                    <p><?= $file; ?></p>
                </div>
                <?php
            } ?>
        </div>
    </div>
</div>
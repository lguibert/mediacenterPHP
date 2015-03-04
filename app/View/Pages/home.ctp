<div class='container'>
    <h1><?= $countGlobal; ?></h1>
    <div class='row'>
        <h1>Films (<?= $films[1];?>):</h1>
        <?php
        foreach($films[0] as $file){
            $ext = explode('.', $file);
            ?>
            <div class='col-md-2 files col-xs-2'>
                <h5><?= end($ext); ?></h5>
                <p><?= $file; ?></p>
            </div>
            <?php
        } ?>
    </div>
    
    <div class='row'>
        <h1>Séries (<?= $series[1];?>):</h1>
        <?php
        foreach($series[0] as $file){
            $ext = explode('.', $file);
            ?>
            <div class='col-md-2 files col-xs-2'>
                <h5><?= end($ext); ?></h5>
                <p><?= $file; ?></p>
            </div>
            <?php
        } ?>
    </div>
    
    <div class='row'>
        <h1>Musiques (<?= $musics[1];?>):</h1>
        <?php
        foreach($musics[0] as $file){
            $ext = explode('.', $file);
            ?>
            <div class='col-md-2 files col-xs-2'>
                <h5><?= end($ext); ?></h5>
                <p><?= $file; ?></p>
            </div>
            <?php
        } ?>
    </div>
    
    <div class='row'>
        <h1>Autres (<?= $others[1];?>):</h1>
        <?php
        foreach($others[0] as $file){
            $ext = explode('.', $file);
            ?>
            <div class='col-md-2 files col-xs-2'>
                <h5><?= end($ext); ?></h5>
                <p><?= $file; ?></p>
            </div>
            <?php
        } ?>
    </div>
</div>
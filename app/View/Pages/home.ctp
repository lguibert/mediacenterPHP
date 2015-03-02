<div class='container'>
    <h1><?= $count; ?></h1>
    <div class='row'>
        <?php
        foreach($files as $file){
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
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
            Liste des fichiers disponibles
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->fetch('meta');
		echo $this->fetch('css');
                echo $this->Html->css('style');
	?>
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
</head>
<body>
    <header>
        <h1>Header</h1>
    </header>
    <section>
        <div id="messages">
            <?php echo $this->Session->flash(); ?>
        </div>
        <div id="main">
            <?php echo $this->fetch('content'); ?>
        </div>	
    </section>
    <footer>
        <h1>Footer</h1>
    </footer>
    <div id="scripts">        
	<?= $this->fetch('script'); ?>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    </div>
</body>
</html>

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
                //echo $this->Html->css('jumbotron');
            ?>
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    </head>
    <body>
        <header>
            <nav class="navbar navbar-inverse navbar-fixed-top">
                <div class="container">
                    <div class="navbar-header">
                       <!-- <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>-->
                        <a class="navbar-brand" href="#">Mediacenter</a>
                    </div>
                    <!--<div id="navbar" class="navbar-collapse collapse">
                        <form class="navbar-form navbar-right">
                            <div class="form-group">
                                <input type="text" placeholder="Email" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="password" placeholder="Password" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-success">Sign in</button>
                        </form>
                    </div>-->
                </div>
            </nav>
        </header>
        <section id="wrap">
            <div id="messages">
                <?php echo $this->Session->flash(); ?>
            </div>
            <div id="main">
                <?php echo $this->fetch('content'); ?>
            </div>	
        </section>
        
        <footer>
            <p>Footer</p>
        </footer>
        
        <div id="scripts">        
            <?= $this->fetch('script'); ?>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
        </div>
    </body>
</html>
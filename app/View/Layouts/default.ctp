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
                echo $this->Html->css('bootstrap.min');
                //echo $this->Html->css('jumbotron');
            ?>
                <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">-->
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
                        <a class="navbar-brand" href="/mediacenter">Mediacenter</a>
                    </div>                    
                    <div id="navbar" class="navbar-collapse collapse">
                        <?php if ($this->Session->read('Auth.User')){ ?>                            
                            <div class="navbar-form navbar-right">
                                <?= $this->Html->link('Déconnexion',array('controller' => 'users', 'action' => 'logout'),array('class' => 'form-control'));?>
                            </div>
                        <?php } ?>
                    </div>                   
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
            <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>-->
            <?= $this->Html->script('jquery.min');?>
            <?= $this->Html->script('bootstrap.min');?>
            <?= $this->Html->script('footer');?>
        </div>
    </body>
</html>
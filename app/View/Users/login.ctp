<div id="loginForm">
    <?= $this->Form->create('User'); ?>
    <div class="form-group">
        <?= $this->Form->input('username', array('class' => 'form-control', 'placeholder' => 'Nom d\'utilisateur', 'label' => false));?>
    </div>
    <div class="form-group">
        <?= $this->Form->input('password',  array('class' => 'form-control', 'placeholder' => 'Mot de passe', 'label' => false));?>
    </div>
        
        <?= $this->Form->button('Connexion',  array('class' => 'btn btn-success', 'type' => 'submit'));?>
    <?= $this->Form->end(); ?>
</div>
<?php use_helper('I18N') ?>
<?php slot('bodyclass') ?>login<?php end_slot(); ?>
<div class="loginForm">
<h2>Accès membre</h2>

<?php echo get_partial('sfGuardAuth/signin_form', array('form' => $form)) ?>
<p>Pas encore membre ? <a href="<?php echo url_for('signup'); ?>">Inscrivez-vous</a> !
</div>

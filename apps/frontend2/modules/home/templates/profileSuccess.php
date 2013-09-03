<?php slot('bodyclass') ?>index profile<?php end_slot(); ?>

<h3>Profil membre</h3>

<form action="<?php echo url_for('home/profile') ?>" method="post" class="form-horizontal deal">
  <?php echo $form->renderHiddenFields(); ?>
  <div class="control-group<?php if ($form['username']->hasError()): ?> error<?php endif; ?>">
    <label class="control-label" for="inputEmail">Nom d'utilisateur</label>
    <div class="controls">
      <?php echo $form['username']->render(); ?>
      <?php if ($form['username']->hasError()): ?>
      <span class="help-inline">Ce nom d'utilisateur est déjà utilisé</span>
      <?php endif; ?>
    </div>
  </div>
  <div class="control-group<?php if ($form['password']->hasError()): ?> error<?php endif; ?>">
    <label class="control-label" for="inputEmail">Mot de passe</label>
    <div class="controls">
      <?php echo $form['password']->render(); ?>
      <?php if ($form['password']->hasError()): ?>
      <span class="help-inline">Les mots de passe doivent être identiques</span>
      <?php endif; ?>
    </div>
  </div>
  <div class="control-group<?php if($form['password_confirmation']->hasError()): ?> error<?php endif; ?>">
    <label class="control-label" for="inputEmail">Mot de passe (confirmation)</label>
    <div class="controls">
      <?php echo $form['password_confirmation']->render(); ?>
      <?php if ($form['password_confirmation']->hasError()): ?>
      <span class="help-inline">Les mots de passe doivent être identiques</span>
      <?php endif; ?>
    </div>
  </div>
  <hr />
  <div class="control-group<?php if($form['profile']['last_name']->hasError()): ?> error<?php endif; ?>">
    <label class="control-label" for="inputEmail">Nom</label>
    <div class="controls">
      <?php echo $form['profile']['last_name']->render(); ?>
      <?php if ($form['profile']['last_name']->hasError()): ?>
      <span class="help-inline">Veuillez entrer votre nom</span>
      <?php endif; ?>
    </div>
  </div>
  <div class="control-group<?php if($form['profile']['first_name']->hasError()): ?> error<?php endif; ?>">
    <label class="control-label" for="inputEmail">Prénom</label>
    <div class="controls">
      <?php echo $form['profile']['first_name']->render(); ?>
      <?php if ($form['profile']['first_name']->hasError()): ?>
      <span class="help-inline">Veuillez entrer votre prénom</span>
      <?php endif; ?>
    </div>
  </div>
  <div class="control-group<?php if($form['email_address']->hasError()): ?> error<?php endif; ?>">
    <label class="control-label" for="inputEmail">E-mail</label>
    <div class="controls">
      <?php echo $form['email_address']->render(); ?>
      <?php if ($form['email_address']->hasError()): ?>
      <span class="help-inline">Veuillez entrer une adresse email valide</span>
      <?php endif; ?>
    </div>
  </div>
  <div class="control-group<?php if($form['profile']['address']->hasError()): ?> error<?php endif; ?>">
    <label class="control-label" for="inputEmail">Adresse</label>
    <div class="controls">
      <?php echo $form['profile']['address']->render(); ?>
      <?php if ($form['profile']['address']->hasError()): ?>
      <span class="help-inline">Veuillez entrer votre adresse postale</span>
      <?php endif; ?>
    </div>
  </div>
  <div class="control-group<?php if($form['profile']['phone']->hasError()): ?> error<?php endif; ?>">
    <label class="control-label" for="inputEmail">N&deg; de téléphone</label>
    <div class="controls">
      <?php echo $form['profile']['phone']->render(); ?>
      <?php if ($form['profile']['phone']->hasError()): ?>
      <span class="help-inline">Veuillez entrer un numéro de téléphone valide</span>
      <?php endif; ?>
    </div>
  </div>

  <div class="control-group">
    <div class="controls">
      <button type="submit" class="btn btn-warning">Enregistrer</button>
    </div>
  </div>
</form>

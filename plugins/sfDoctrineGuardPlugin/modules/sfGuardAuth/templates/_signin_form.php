<?php use_helper('I18N') ?>

<form action="<?php echo url_for('@sf_guard_signin') ?>" method="post" class="form-horizontal">
  <?php echo $form->renderHiddenFields(); ?>
  <div class="control-group">
    <label class="control-label" for="inputEmail">Login</label>
    <div class="controls">
      <?php echo $form['username']->render(); ?>
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputPassword">Mot de passe</label>
    <div class="controls">
      <?php echo $form['password']->render(); ?>
    </div>
  </div>
  <div class="control-group">
    <div class="controls">
      <button type="submit" class="btn btn-inverse">Connexion</button>
    </div>
  </div>
</form>

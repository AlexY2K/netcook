<form action="<?php echo url_for('@sf_guard_signin') ?>" method="post">
  <?php echo $loginForm->renderHiddenFields(); ?>
  <div class="control-group">
    <label class="control-label" for="inputEmail">Email</label>
    <div class="controls">
      <?php echo $loginForm['username']->render(); ?>
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputPassword">Mot de passe</label>
    <div class="controls">
      <?php echo $loginForm['password']->render(); ?>
    </div>
  </div>
  <div class="control-group">
    <div class="controls">
      <button type="submit" class="btn btn-warning">Connexion</button>
    </div>
  </div>
</form>
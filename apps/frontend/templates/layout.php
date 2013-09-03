<!DOCTYPE html>
<html>
  <head>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="robots" content="noindex, nofollow">
    <?php include_title() ?>
    <link rel="shortcut icon" href="/favicon.ico" />
    <?php include_stylesheets() ?>
    <?php include_javascripts() ?>
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.2/themes/smoothness/jquery-ui.css" />
    <?php if($sf_request->getAttribute('mobile')): ?>
    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.css" />
    <script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
    <script src="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.js"></script>
    <?php endif; ?>
  </head>
  <body>
    <div id="header" class="container-fluid gradient">
      <div class="container">
        <h1 class="span8"><a href="<?php echo url_for('homepage'); ?>"><img src="/images/logo.png" alt="Rapidcook" /></a></h1>
        <div class="span4 clearfix">
<?php if(!$sf_user->isAuthenticated()): ?>
          <div class="dropdown pull-left">
          <a href="<?php echo url_for('sf_guard_signin'); ?>" data-toggle="dropdown" class="dropdown-toggle" data-target="#">Connexion</a>
          <div class="dropdown-menu">
          <?php include_component('homepage', 'loginForm'); ?>
          </div>
          </div>
          <div class="dropdown pull-left">
          <a href="<?php echo url_for('signup'); ?>" class="btn btn-small">Inscription</a>
          </div>
<?php else: ?>
          <p>Bonjour <?php echo $sf_user->getUsername(); ?>, <?php echo link_to('deconnexion', 'sf_guard_signout') ?></p>
<?php endif; ?>
        </div>
      </div>
    </div>
    <div id="main" class="container">
    <?php if ($sf_user->hasFlash('notice')): ?>
    <div class="alert alert-success"><?php echo $sf_user->getFlash('notice') ?></div>
    <?php endif; ?>
 
    <?php if ($sf_user->hasFlash('error')): ?>
    <div class="alert alert-error"><?php echo $sf_user->getFlash('error') ?></div>
    <?php endif; ?>
    <?php echo $sf_content ?>
    </div>

    <div id="footer" class="container-fluid gradient">
      <div class="container">
        <ul>
          <li><a href="<?php echo url_for('mentions'); ?>">Mentions l&eacute;gales</a></li>
          <li> - <a href="<?php echo url_for('cgv'); ?>">Conditions g&eacute;n&eacute;rales de vente</a></li>
          <li class="active"> - Rapidcook &copy; <?php echo date('Y'); ?></li>
        </ul>
      </div>
    </div>
    <script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-40602643-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
  </body>
</html>

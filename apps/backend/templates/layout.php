<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
    <link rel="shortcut icon" href="/favicon.ico" />
    <?php include_stylesheets() ?>
    <?php include_javascripts() ?>
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    <link rel="stylesheet" type="text/css" media="screen" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
  </head>
  <body>
  <?php if ($sf_user->isAuthenticated()): ?>
    <ul>
      <li><?php echo link_to('Users', 'sf_guard_user') ?></li>
      <li><a href="<?php echo url_for('restaurant'); ?>">Restaurant</a></li>
      <li><?php echo link_to('Deals', 'deals') ?></li>
<?php /*
      <li><a href="<?php echo url_for('category'); ?>">Category</a></li>
      <li><a href="<?php echo url_for('product'); ?>">Product</a></li>
      <li><a href="<?php echo url_for('detail'); ?>">Detail</a></li>
      <li><a href="<?php echo url_for('cart'); ?>">Order</a></li>
*/ ?>
      <li><?php echo link_to('Logout', 'sf_guard_signout') ?></li>
    <ul>
  <?php endif; ?>
    <?php echo $sf_content ?>
  </body>
</html>

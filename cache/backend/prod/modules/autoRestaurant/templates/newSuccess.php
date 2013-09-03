<?php use_helper('I18N', 'Date') ?>
<?php include_partial('restaurant/assets') ?>

<div id="sf_admin_container">
  <h1><?php echo __('New Restaurant', array(), 'messages') ?></h1>

  <?php include_partial('restaurant/flashes') ?>

  <div id="sf_admin_header">
    <?php include_partial('restaurant/form_header', array('restaurant' => $restaurant, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>

  <div id="sf_admin_content">
    <?php include_partial('restaurant/form', array('restaurant' => $restaurant, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
  </div>

  <div id="sf_admin_footer">
    <?php include_partial('restaurant/form_footer', array('restaurant' => $restaurant, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>
</div>

<?php use_helper('I18N', 'Date') ?>
<?php include_partial('deals/assets') ?>

<div id="sf_admin_container">
  <h1><?php echo __('New Deals', array(), 'messages') ?></h1>

  <?php include_partial('deals/flashes') ?>

  <div id="sf_admin_header">
    <?php include_partial('deals/form_header', array('deals' => $deals, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>

  <div id="sf_admin_content">
    <?php include_partial('deals/form', array('deals' => $deals, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
  </div>

  <div id="sf_admin_footer">
    <?php include_partial('deals/form_footer', array('deals' => $deals, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>
</div>

<?php use_helper('I18N') ?>
<?php slot('bodyclass') ?>index<?php end_slot(); ?>

<div class="memberCard member media">
  <div style="float: left;border: 1px solid #ccc; width: 100px; font-size: 40px; background-color: #fff; height: 20px; text-align: left; color: #000; text-align: center; margin: 0 5px; padding: 40px 0;" class="pull-left">?</div>
<!--              <a href="#" class="pull-left"><img src="<?php //echo $sf_user->getEntity()->image;    ?>" alt="" class="media-object" /></a>-->
  <div class="media-body pull-left">
    <strong>Membre agrée du réseau Netcook</strong><br />
    <span style="text-transform: capitalize"><?php echo $member->getFirstName(); ?></span> <span style="text-transform: capitalize"><?php echo $member->getLastName(); ?></span><br />
    <?php echo $member->address; ?>
  </div>
</div>
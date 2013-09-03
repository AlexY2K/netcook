<?php slot('bodyclass') ?>index<?php end_slot(); ?>

<?php if (0 < count($bestDeals)): ?>
  <h3 class="">Les meilleurs bons plans</h3>
  <?php foreach ($bestDeals as $bestDeal): ?>
    <div class="media deal">
      <a class="pull-left" href="<?php echo url_for('restaurant', $bestDeal->getRestaurant()); ?>">
        <img class="media-object" src="/uploads/deals/75x75/<?php echo $bestDeal->image; ?>">
      </a>
      <div class="media-body">
        <h4 class="media-heading"><?php echo $bestDeal->description; ?></h4>
        <p class="dealValue"><strong>-<?php echo $bestDeal->value; ?>%</strong> pour toute commande passée !</p>
      </div>
    </div>
  <?php endforeach; ?>
<?php endif; ?>

<?php if (0 < count($permanentDeals)): ?>
  <h3 class="">Les bons plans permanents</h3>
  <?php foreach ($permanentDeals as $permanentDeal): ?>
    <div class="media deal">
      <a class="pull-left" href="<?php echo url_for('restaurant', $permanentDeal->getRestaurant()); ?>">
        <img class="media-object" src="/uploads/deals/75x75/<?php echo $permanentDeal->image; ?>">
      </a>
      <div class="media-body">
        <h4 class="media-heading"><?php echo $permanentDeal->description; ?></h4>
        <p class="dealValue"><strong>-<?php echo $permanentDeal->value; ?>%</strong> pour toute commande passée !</p>
      </div>
    </div>
  <?php endforeach; ?>
<?php endif; ?>

<div class="row">
  <div class="span6">
    <h4>Les derniers bons plans ajoutés</h4>
    <?php foreach ($latestDeals as $latestDeal): ?>
      <div class="media deal">
        <a class="pull-left" href="<?php echo url_for('restaurant', $latestDeal->getRestaurant()); ?>">
          <img class="media-object" src="/uploads/deals/75x75/<?php echo $latestDeal->image; ?>">
        </a>
        <div class="media-body">
          <h4 class="media-heading"><?php echo $latestDeal->description; ?></h4>
        </div>
      </div>
    <?php endforeach; ?>
  </div>

  <div class="span6">
    <h4>Les derniers restaurants ajoutés</h4>
    <?php foreach ($latestRestaurants as $latestRestaurant): ?>
      <div class="media deal">
        <a class="pull-left" href="<?php echo url_for('restaurant', $latestRestaurant); ?>">
          <img class="media-object" src="/uploads/restaurant/75x75/<?php echo $latestRestaurant->image; ?>">
        </a>
        <div class="media-body">
          <h4 class="media-heading"><?php echo $latestRestaurant->name; ?></h4>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</div>
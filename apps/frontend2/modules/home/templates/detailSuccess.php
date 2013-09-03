<?php slot('bodyclass') ?>index detail<?php end_slot(); ?>

<h3 class=""><?php echo $restaurant->name; ?></h3>

<div class="media deal">
  <a class="pull-left" href="#">
    <img class="media-object" src="/uploads/restaurant/75x75/<?php echo $restaurant->image; ?>">
  </a>
  <div class="media-body">
    <span class="legend">
      <?php echo trim($restaurant->address); ?>, <br />
      <?php echo $restaurant->postal_code; ?> <?php echo $restaurant->city; ?><br />
      Tél: <?php echo $restaurant->phone; ?><br />
      Horaires d'ouverture: <?php echo $restaurant->open_time; ?> - <?php echo $restaurant->close_time; ?>
    </span>
  </div>
</div>

<?php if(0 < count($deals)): ?>
<h3 class="">Tous les bons plans de ce restaurant</h3>
<?php foreach ($deals as $deal): ?>
<div class="media deal">
    <a class="pull-left">
      <img class="media-object" src="/uploads/deals/75x75/<?php echo $deal->image; ?>">
    </a>
    <div class="media-body">
      <h4 class="media-heading"><?php echo $deal->description; ?></h4>
      <p class="dealValue"><strong>-<?php echo $deal->value; ?>%</strong> pour toute commande passée !</p>
    </div>
  </div>
<?php endforeach; ?>
<?php endif; ?>
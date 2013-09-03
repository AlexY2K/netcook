<div class="listing">

<header data-role="header">
  <h1>Progi-food</h1>
</header>
<h2>Tous les restaurants <?php if($restaurants->getFirst()){ echo $restaurants->getFirst()->getCity(); } ?></h2>

<?php foreach($restaurants as $restaurant): ?>
<div class="media">
<?php if($restaurant->image != ''): ?>
  <a class="pull-left" href="<?php echo url_for('restaurant', $restaurant); ?>">
    <img class="media-object" src="/uploads/restaurant/<?php echo $restaurant->image; ?>">
  </a>
<?php endif; ?>
  <div class="media-body">
    <a href="<?php echo url_for('restaurant', $restaurant); ?>" data-ajax="false" class="media-heading"><?php echo $restaurant->name; ?></a><br />
    <span class="legend"><?php echo $restaurant->description; ?></span>
  </div>
</div>
<?php endforeach; ?>

</div>

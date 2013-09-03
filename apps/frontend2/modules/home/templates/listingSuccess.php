<?php slot('bodyclass') ?>listing index<?php end_slot(); ?>

<h3>Tous les restaurants <?php if($restaurants->getFirst()){ echo $restaurants->getFirst()->getCity() . " (" . $restaurants->getFirst()->getPostalCode() . ")"; } ?></h3>

<?php foreach($restaurants as $restaurant): ?>
<div class="media deal">
<?php if($restaurant->image != ''): ?>
  <a class="pull-left" href="<?php echo url_for('restaurant', $restaurant); ?>">
    <img class="media-object" src="/uploads/restaurant/75x75/<?php echo $restaurant->image; ?>">
  </a>
<?php endif; ?>
  <div class="media-body">
    <h4 class="media-heading"><a href="<?php echo url_for('restaurant', $restaurant); ?>" data-ajax="false" class="media-heading"><?php echo $restaurant->name; ?></a></h4>
    <span class="legend"><?php echo $restaurant->description; ?></span>
  </div>
</div>
<?php endforeach; ?>
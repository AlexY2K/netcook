<header data-role="header">
  <h2><?php echo $restaurant->name; ?></h2>
</header>

<?php if(0 < count($products)): ?>
<div class="row listing">
  <div class="span9">
    <h3><?php echo $products->getFirst()->getCategory()->name; ?></h3>
<?php foreach($products as $product): ?>
<div class="media">
<?php if($product->image != ''): ?>
  <img class="media-object pull-left" src="/uploads/products/75x75/<?php echo $product->image; ?>">
<?php endif; ?>
  <div class="media-body row">
    <div class="<?php if($product->image != ''): ?>span4<?php else: ?>span6<?php endif; ?>">
    <h4 class="media-heading"><?php echo $product->name; ?></h4>
    <p><?php echo $product->description; ?></p>
    </div>
    <div class="pull-right span3">
    <span class="badge badge-info"><?php echo $product->price; ?>&euro;</span>
    <a href="<?php echo url_for('add_to_cart', array('id' => $product->id)); ?>" class="btn btn-small pull-right"><i class="icon-shopping-cart"></i> Ajouter au panier</a>
    </div>
  </div>
</div>
<?php endforeach; ?>
</ul>
</div>
<div class="span3">
<aside>
<ul class="unstyled">
  <li>Votre panier</li>
<?php $cart = $sf_data->getRaw('cart'); ?>
<?php if($cart != ''): ?>
  <?php foreach($cart as $item): ?>
    <?php if(is_array($item)): ?>
  <li><?php echo $item['name']; ?> x <?php echo $item['qty']; ?>, <?php echo $item['price']; ?>&euro;</li>
    <?php endif; ?>
  <?php endforeach; ?>
<?php else: ?>
  <li>Panier vide</li>
<?php endif; ?>
<?php if(isset($cart['total'])): ?>
  <li>Total: <?php echo number_format($cart['total'], 2); ?>&euro;</li>
  <li><a href="<?php echo url_for('checkout'); ?>" class="btn btn-primary">Commander</a></li>
<?php endif; ?>
</ul>
<?php include_component('menu', 'contactForm') ?>
</aside>
</div>
<?php endif; ?>
<td class="sf_admin_text sf_admin_list_td_client">
  <?php echo $cart->getEntity() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_restaurant">
  <?php echo $cart->getRestaurant() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_product">
  <?php $productId = unserialize(sfOutputEscaperGetterDecorator::unescape($cart->getProductId())); ?>
  <?php foreach($productId as $product): ?>
    <?php echo $product['name']; ?> x <?php echo $product['qty']; ?><br />
  <?php endforeach; ?>
</td>
<td class="sf_admin_boolean sf_admin_list_td_status">
  <?php echo get_partial('cart/list_field_boolean', array('value' => $cart->getStatus())) ?>
</td>
<td class="sf_admin_text sf_admin_list_td_total">
  <?php echo $cart->getTotal() ?>
</td>

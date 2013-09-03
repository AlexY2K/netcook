<td class="sf_admin_text sf_admin_list_td_id">
  <?php echo link_to($cart->getId(), 'cart_edit', $cart) ?>
</td>
<td class="sf_admin_foreignkey sf_admin_list_td_client_id">
  <?php echo $cart->getClientId() ?>
</td>
<td class="sf_admin_foreignkey sf_admin_list_td_restaurant_id">
  <?php echo $cart->getRestaurantId() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_product_id">
  <?php $productId = unserialize(sfOutputEscaperGetterDecorator::unescape($cart->getProductId())); ?>
<?php var_dump($productId); ?>
  <?php foreach($productId as $product): ?>
    <?php echo $product['name']; ?><br />
  <?php endforeach; ?>
</td>
<td class="sf_admin_boolean sf_admin_list_td_status">
  <?php echo get_partial('cart/list_field_boolean', array('value' => $cart->getStatus())) ?>
</td>
<td class="sf_admin_text sf_admin_list_td_total">
  <?php echo $cart->getTotal() ?>
</td>
<td class="sf_admin_date sf_admin_list_td_created_at">
  <?php echo false !== strtotime($cart->getCreatedAt()) ? format_date($cart->getCreatedAt(), "f") : '&nbsp;' ?>
</td>
<td class="sf_admin_date sf_admin_list_td_updated_at">
  <?php echo false !== strtotime($cart->getUpdatedAt()) ? format_date($cart->getUpdatedAt(), "f") : '&nbsp;' ?>
</td>

<td class="sf_admin_text sf_admin_list_td_name">
  <?php echo $restaurant->getName() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_address">
  <?php echo $restaurant->getAddress() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_type">
  <?php echo $restaurant->getType() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_phone">
  <?php echo $restaurant->getPhone() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_description">
  <?php echo $restaurant->getDescription() ?>
</td>
<td class="sf_admin_time sf_admin_list_td_open_time">
  <?php echo $restaurant->getOpenTime() ?>
</td>
<td class="sf_admin_time sf_admin_list_td_close_time">
  <?php echo $restaurant->getCloseTime() ?>
</td>
<td class="sf_admin_boolean sf_admin_list_td_status">
  <?php echo get_partial('restaurant/list_field_boolean', array('value' => $restaurant->getStatus())) ?>
</td>
<td class="sf_admin_text sf_admin_list_td_city">
  <?php echo $restaurant->getCity() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_postal_code">
  <?php echo $restaurant->getPostalCode() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_image">
  <?php echo $restaurant->getImage() ?>
</td>

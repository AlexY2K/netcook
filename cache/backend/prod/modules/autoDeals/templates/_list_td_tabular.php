<td class="sf_admin_text sf_admin_list_td_image">
  <?php echo $deals->getImage() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_description">
  <?php echo $deals->getDescription() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_value">
  <?php echo $deals->getValue() ?>
</td>
<td class="sf_admin_date sf_admin_list_td_start">
  <?php echo false !== strtotime($deals->getStart()) ? format_date($deals->getStart(), "f") : '&nbsp;' ?>
</td>
<td class="sf_admin_date sf_admin_list_td_end">
  <?php echo false !== strtotime($deals->getEnd()) ? format_date($deals->getEnd(), "f") : '&nbsp;' ?>
</td>
<td class="sf_admin_text sf_admin_list_td_restaurant">
  <?php echo $deals->getRestaurant() ?>
</td>

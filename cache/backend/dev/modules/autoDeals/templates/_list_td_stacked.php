<td colspan="6">
  <?php echo __('%%image%% - %%description%% - %%value%% - %%start%% - %%end%% - %%restaurant%%', array('%%image%%' => $deals->getImage(), '%%description%%' => $deals->getDescription(), '%%value%%' => $deals->getValue(), '%%start%%' => false !== strtotime($deals->getStart()) ? format_date($deals->getStart(), "f") : '&nbsp;', '%%end%%' => false !== strtotime($deals->getEnd()) ? format_date($deals->getEnd(), "f") : '&nbsp;', '%%restaurant%%' => $deals->getRestaurant()), 'messages') ?>
</td>

<tr>
  <td><?php echo $this->html->student_link($object);?></td>
  <td><?php echo $object->gurdian_name; ?>( <?php echo $object->relation_with_gurdian; ?>) </td>
  <td><?php echo $object->present_status; ?></td>
  <td><?php echo end($object->academics)->standard ?> - <?php echo end($object->academics)->department ?></td>

</tr>

<h2>Students </h2>
<table class="table table-hover bordered table-responsive">
  <thead >
    <tr class="info">
      <th class="heading">Name</th>
      <th class="heading">Gurdian</th>
      <th class="heading">Relation with gurdian</th>
      <th class="heading">Status</th>
      <th class="heading">Current academic</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($objects as $object): ?>

      <?php $this->render_view('_item', array('locals' => array('object' => $object))); ?>

    <?php endforeach; ?>

  </tbody>
</table>




<?php echo $this->pagination(); ?>

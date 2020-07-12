<h2>Add Inspection Result</h2>

<?php echo $this->form->create($model->name, array('is_admin' => $this->is_admin)); ?>
<?php echo $this->form->open_admin_table(); ?>
<?php echo $this->form->input('student_id'); ?>
<?php echo $this->form->input('status'); ?>
<?php $options = array(
  'Requested'=>'Requested',
  'In-progress'=>'In-progress',
  'Rejected'=>'Rejected',
  'Verified'=>'Verified',
  'Declined'=>'Declined');
echo $this->form->select('status', array( 'label'=>'Status','options' => $options)); ?>
<?php echo $this->form->input('date_of_activity',,array('type' => 'date')); ?>
<?php echo $this->form->input('note'); ?>
<?php echo $this->form->input('inspected_by'); ?>
<?php echo $this->form->close_admin_table(); ?>
<?php echo $this->form->end('Add'); ?>

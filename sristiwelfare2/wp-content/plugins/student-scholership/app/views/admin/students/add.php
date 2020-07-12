<h2>Add Student</h2>

<?php echo $this->form->create($model->name, array('is_admin' => $this->is_admin)); ?>
<?php echo $this->form->open_admin_table(); ?>
<?php echo $this->form->input('name'); ?>
<?php echo $this->form->input('address'); ?>
<?php echo $this->form->input('gurdian_name'); ?>
<?php echo $this->form->input('relation_with_gurdian'); ?>
<?php echo $this->form->input('contact_number'); ?>
<?php echo $this->form->input('alternate_contact_number'); ?>
<?php $options = array(
  'Requested'=>'Requested',
  'In-progress'=>'In-progress',
  'Rejected'=>'Rejected',
  'Verified'=>'Verified',
  'Declined'=>'Declined');
echo $this->form->select('present_status', array( 'label'=>'Present status','options' => $options)); ?>
<?php echo $this->form->close_admin_table(); ?>
<?php echo $this->form->end('Add'); ?>

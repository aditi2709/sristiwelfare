<h2>Edit Student</h2>

<?php echo $this->form->create($model->name, array('is_admin' => $this->is_admin)); ?>
<?php echo $this->form->open_admin_table(); ?>
<?php echo $this->form->input('name'); ?>
<?php echo $this->form->input('address'); ?>
<?php echo $this->form->input('gurdian_name'); ?>
<?php echo $this->form->input('relation_with_gurdian'); ?>
<?php echo $this->form->input('contact_number'); ?>
<?php echo $this->form->input('alternate_contact_number'); ?>
<?php $options = array(
  'Value 1'=>'Requested',
  'Value 2'=>'In-progress',
  'Value 3'=>'Rejected',
  'Value 4'=>'Verified',
  'Value 5'=>'Declined');
echo $this->form->select('present_status', array( 'label' => 'Present status','options' => $options)); ?>
<?php echo $this->form->close_admin_table(); ?>
<?php echo $this->form->end('Update'); ?>

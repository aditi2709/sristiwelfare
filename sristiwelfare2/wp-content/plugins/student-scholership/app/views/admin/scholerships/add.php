<h2>Add Scholership</h2>

<?php echo $this->form->create($model->name, array('is_admin' => $this->is_admin)); ?>
<?php echo $this->form->open_admin_table(); ?>
<?php echo $this->form->input('academic_id'); ?>
<?php echo $this->form->input('approved_amount'); ?>
<?php echo $this->form->input('date_of_approval',array('type' => 'date')); ?>
<?php echo $this->form->input('approved_by'); ?>
<?php echo $this->form->close_admin_table(); ?>
<?php echo $this->form->end('Add'); ?>

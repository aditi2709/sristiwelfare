<h2>Edit Inspection Result</h2>

<?php echo $this->form->create($model->name, array('is_admin' => $this->is_admin)); ?>
<?php echo $this->form->open_admin_table(); ?>
<?php echo $this->form->input('student_id'); ?>
<?php echo $this->form->input('status'); ?>
<?php echo $this->form->input('date_of_activity',,array('type' => 'date')); ?>
<?php echo $this->form->input('note'); ?>
<?php echo $this->form->input('inspected_by'); ?>
<?php echo $this->form->close_admin_table(); ?>
<?php echo $this->form->end('Update'); ?>

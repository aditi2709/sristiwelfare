<h2>Add Academic</h2>

<?php echo $this->form->create($model->name, array('is_admin' => $this->is_admin)); ?>
<?php echo $this->form->open_admin_table(); ?>
<?php echo $this->form->input('standard'); ?>
<?php echo $this->form->input('student_id'); ?>
<?php echo $this->form->input('department'); ?>
<?php echo $this->form->input('institution_name'); ?>
<?php echo $this->form->input('year_of_admission'); ?>
<?php echo $this->form->input('year_of_passing'); ?>
<?php echo $this->form->close_admin_table(); ?>
<?php echo $this->form->end('Add'); ?>

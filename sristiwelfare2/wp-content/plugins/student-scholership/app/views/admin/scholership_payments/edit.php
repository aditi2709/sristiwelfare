<h2>Edit Scholership Payment</h2>

<?php echo $this->form->create($model->name, array('is_admin' => $this->is_admin)); ?>
<?php echo $this->form->open_admin_table(); ?>
<?php echo $this->form->input('scholership_id'); ?>
<?php echo $this->form->input('payment_mode'); ?>
<?php echo $this->form->input('payment_mode_id'); ?>
<?php echo $this->form->input('payment_approval_date'); ?>
<?php echo $this->form->input('payment_approved_by'); ?>
<?php echo $this->form->input('payment_disbursment_date'); ?>
<?php echo $this->form->input('payment_disbursed_by'); ?>
<?php echo $this->form->input('payment_disbursed_to'); ?>
<?php echo $this->form->close_admin_table(); ?>
<?php echo $this->form->end('Update'); ?>

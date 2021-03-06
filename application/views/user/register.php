<div class="container">
	
<?php $attributes = array('id'=>'register_form', 'class'=> 'form_horizontal'); ?>
	<?php echo validation_errors("<p class='bg-danger'>"); ?>
	<?php echo form_open('user/register', $attributes);?>
		<div class="form-group">
			<?php echo form_label('Name'); ?>
			<?php
				$data = array(
					'class' => 'form-control',
					'name' => 'name',
					'placeholder' => 'Name',
					'value' => set_value('name')
					);
			?>
			<?php echo form_input($data); ?>
		</div>
		
		<div class="form-group">
			<?php echo form_label('Email'); ?>
			<?php
				$data = array(
					'class' => 'form-control',
					'name' => 'email',
					'placeholder' => 'Enter Email',
					'value' => set_value('email')
					);
			?>
			<?php echo form_input($data); ?>
		</div>
		<div class="form-group">
			<?php echo form_label('Username'); ?>
			<?php
				$data = array(
						'class' => 'form-control',
						'name' => 'username',
						'placeholder' => 'Enter Username',
						'value' => set_value('username')
						);
			?>
			<?php echo form_input($data); ?>
		</div>
		<div class="form-group">
			<?php echo form_label('Password'); ?>
			<?php
				$data = array(
						'class' => 'form-control',
						'name' => 'password',
						'placeholder' => 'Enter Password'
						);
			?>
			<?php echo form_password($data); ?>
		</div>
		<div class="form-group">
			<?php echo form_label('Confirm Password'); ?>
			<?php
				$data = array(
						'class' => 'form-control',
						'name' => 'confirm_password',
						'placeholder' => 'Confirm Password'
						);
			?>
			<?php echo form_password($data); ?>
		</div>
		<div class="form-group">
			<!-- <?php //echo form_label('Password'); ?> -->
			<?php 
				$data = array(
						'class' => 'btn btn-primary',
						'name' => 'submit',
						'value' => 'Register'
						);
			?>
			<?php echo form_submit($data); ?>
		</div>
	<?php echo form_close(); ?>



</div>

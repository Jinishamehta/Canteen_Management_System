<div class="container">
<hr>
	<?php echo form_open('user/login');?>

        <div class="form-group">
       
			<?php
				$data = array(
						'class' => 'form-control form-control-user',
						'name' => 'username',
						'placeholder' => 'Enter Username'
						);
			?>
			<?php echo form_input($data); ?>
		</div>
        <div class="form-group">

           	<?php
				$data = array(
					'class' => 'form-control form-control-user',
					'name' => 'password',
					'placeholder' => 'Enter Password'
					);
			?>
			<?php echo form_password($data); ?>
        </div>
        <div class="form-group">
			<?php 
				$data = array(
					'class' => 'btn btn-primary btn-user btn-block',
					'name' => 'submit',
					'value' => 'Login'
					);
			?>
			<?php echo form_submit($data); ?>
		</div>
        <hr>
        
    <?php echo form_close(); ?>
<?php //endif; ?>
</div>


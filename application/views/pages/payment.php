<div class="container">
	<hr>
	<?php if($this->session->flashdata('low_credits')): ?>
		<?php echo $this->session->flashdata('low_credits'); ?>
	<?php endif; ?>
<div class="row">
    <div class="input-field col s12">
    	<form class="formValidate col s12 m12 l6" id="formValidate" method="post" action="<?php echo base_url();?>Cart/save_order">
	<h1 class="h3 mb-2 text-gray-800 ">Payment Type</h1>
	<hr>
		<select id="payment_type" name="payment_type">
			<option value="Wallet" selected>Wallet</option>
			<option value="Cash On Delivery">Cash on Delivery</option>							
		</select>
		<button class="btn btn-primary" type="submit" name="action">Submit
                              <i class="mdi-content-send right"></i>
                            </button>
    </div>
</div>	
</div>
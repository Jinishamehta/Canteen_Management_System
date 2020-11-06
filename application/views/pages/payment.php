<div class="container">
<div class="row">
    <div class="input-field col s12">
    	<form class="formValidate col s12 m12 l6" id="formValidate" method="post" action="<?php echo base_url();?>Cart/save_order">
	<label for="payment_type">Payment Type</label><br><br>
		<select id="payment_type" name="payment_type">
			<option value="Wallet" selected>Wallet</option>
			<option value="Cash On Delivery">Cash on Delivery</option>							
		</select>
		<button class="btn cyan waves-effect waves-light right" type="submit" name="action">Submit
                              <i class="mdi-content-send right"></i>
                            </button>
    </div>
</div>	
</div>
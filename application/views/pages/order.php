<div class="container">
<div class="container-fluid">
    <hr>
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800 ">Orders</h1>
	<hr>
    <!-- DataTales Example -->
    <div class="card shadow mb-4 card-body table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
			<thead>
        		<tr>
		            <th>Order No</th>
		            <th>Status</th>
		            <th>Payment</th>
		            <th>Total</th>
                <th>Action</th>
		        </tr>
		    </thead>
			<tbody>
				<?php foreach($order as $entry): ?>
					<tr>
						<td><?php echo $entry->id; ?></td>
						<td><?php echo $entry->status; ?></td>
						<td><?php echo $entry->payment_type; ?></td>
						<td><?php echo $entry->amt; ?></td>
            <?php if($entry->status == 'Order placed'):?>
              <td><a href="<?php echo base_url(); ?>Inventory/refund/<?php echo $entry->id; ?>" class="btn btn-primary">Cancel</a></td>
            <?php else:?>
              <td><a href="" class="btn btn-primary disabled">Cancel</a></td>
            <?php endif; ?>		
					</tr>

				<?php endforeach; ?>
			</tbody>
		</table>
 	</div>
</div>
</div>

    <!-- End of Content Wrapper -->
</div>
  <!-- End of Page Wrapper -->
  <!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
   <i class="fas fa-angle-up"></i>
</a>

<!-- Bootstrap core JavaScript-->
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="assets/js/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="assets/js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="assets/js/jquery.dataTables.min.js"></script>
  <script src="assets/js/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="assets/js/datatables-demo.js"></script>

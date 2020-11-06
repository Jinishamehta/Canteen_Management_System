<div class="container">
<div class="container-fluid">
    <hr>
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800 ">Cart<a class="btn btn-primary float-right" href="<?php echo base_url(); ?>Cart/place_order">Place Order</a></h1>
	<hr>
    <!-- DataTales Example -->
    <div class="card shadow mb-4 card-body table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
			<thead>
        		<tr>
		            <th>Item</th>
		            <th>Price</th>
		            <th>Quantity</th>
		            <th>Total</th>
		        </tr>
		    </thead>
			<tbody>
				<?php foreach($data as $entry): ?>
					<tr>
						<td><?php echo $entry->name; ?></td>
						<td><?php echo $entry->price; ?></td>
						<td><?php echo $entry->quantity; ?></td>
						<td><?php echo $entry->total; ?></td>
						
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

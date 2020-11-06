<div class="container">
<div class="container-fluid">
    <hr>
    <!-- Page Heading -->
  
  <hr>
    <!-- DataTales Example -->
    <div class="card shadow mb-4 card-body table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          	<thead>
              <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Price</th>
                <th>Quantity</th>
              </tr>
            </thead>
          	<tbody>
           		<?php foreach($inventory as $entry): ?>
          			<tr>
          				<td><?php echo $entry->id; ?></td>
          				<td><?php echo $entry->name; ?></td>
          				<td><?php echo $entry->price; ?></td>
                  <td>1
                          <button class="btn btn-outline-secondary" onclick="myFunction('<?php echo $entry->name; ?>','<?php echo $entry->price; ?>')">Add</button>
                         
                        </div>
                      </div>                  
                  </td>
           			</tr>
          		<?php endforeach; ?>
          	</tbody>
          </table>
        </div>
     
   
     <button class="btn btn-outline-secondary" onclick="submit_list()">Save</button>
     <a class="btn btn-outline-secondary" type="button" href="<?php echo base_url();?>Pages/menu">Back</a>

  </div>
</div>
<div class="after-myFunction">
  <table hidden id="AU1641072">
    <thead>
                        <tr>
                          <th>Name</th>
                          <th>price</th>
                          <th>Quantity</th>
                        </tr>
                      </thead>
                      <tbody>
                      </tbody>
                    </table>
                  </div>

<script type="text/javascript">
    function myFunction(x,y) {
      var d =0;
      $('#AU1641072 tr').each(function(row,tr){
        var name = $(tr).find('td:eq(0)').text();
        if(name == x){
          var a=document.getElementById('AU1641072').rows[row].cells;
          a[2].innerHTML=parseInt($(tr).find('td:eq(2)').text() )+ 1;
          d =1;
          // document.getElementById('AU1641072').deleteRow(0);
      
        }
      });
      if(d==1){
        console.log('updated');
      }else{
        var qty = 1;
        $('#AU1641072 tbody:last-child').append(
          '<tr>'+
            '<td>'+x+'</td>'+
            '<td>'+y+'</td>'+
            '<td>'+qty+'</td>'+
          '</tr>'
        );
      }
    }

    function order_list(){

        var orderList = [];
            
            $('#AU1641072 tr').each(function(row,tr){

              var td1 = $(tr).find('td:eq(0)').text();
              var td2 = $(tr).find('td:eq(1)').text();
              var td3 = $(tr).find('td:eq(2)').text();          

              var sub1 = [td1,td2,td3];

              orderList.push(sub1);               
            });
          orderList.splice(0,1);
          console.log(orderList);
          alert("order list completed");
          return orderList;

      }

      function submit_list(){
 
        var ajax_data = order_list();
        $.ajax({
          url : "<?php echo site_url('cart/carting');?>",
          method : "POST",
          data : {cart:ajax_data},
          dataType : 'json',
          async : true,
          success: function(){
            alert("Success");
          },
          error: function(error){
            alert(error);
            console.log(error);
          }
        });
        
      }
      


</script>
<!--  -->
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

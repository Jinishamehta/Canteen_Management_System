<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <style>
    /* Create four equal columns that floats next to each other */
    .column {
      float: left;
      width: 50%;
      padding: 10px;

    }
    /* Clear floats after the columns */
    .row:after {
      content: "";
      display: table;
      clear: both;
    }
</style>

 <link href="<?php echo base_url();?>assets/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>

  <!-- Custom styles for this template -->
   <link href="<?php echo base_url();?>assets/css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="<?php echo base_url();?>assets/css/dataTables.bootstrap4.min.css" rel="stylesheet">

  <link href="<?php echo base_url();?>assets/css/custom.css" rel="stylesheet">

</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class=container>
  			<a class="navbar-brand" href="<?php echo base_url();?>Pages">Home</a>
  			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    			<span class="navbar-toggler-icon"></span>
  			</button>

  			<div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    			<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      				<li class="nav-item">
        				<a class="nav-link" href="<?php echo base_url();?>Pages/menu">Menu</a>
      				</li>
              <?php if($this->session->userdata('logged_in')): ?>
                <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url();?>Inventory/get_orders">Order</a>
                </li>
              <?php endif;?>
      				<li class="nav-item">
      					<a class="nav-link" href="<?php echo base_url();?>Pages/about">About Us</a>
              </li>  
    			</ul>
    			<form class="form-inline my-2 my-lg-0">
    				<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
              <?php if($this->session->userdata('logged_in')): ?>
                  <li class="nav-item">
                  <a class="btn btn-outline-success my-2 my-sm-0" href="<?php echo base_url();?>Cart">Cart</a>
                </li>
                <li class="nav-item">
                  <a class="btn btn-outline-success my-2 my-sm-0" href="<?php echo base_url();?>User/logout">Logut</a>
                </li>
              <?php else: ?>
      				  <li class="nav-item">
          				<a class="btn btn-outline-success my-2 my-sm-0" href="<?php echo base_url();?>User/login_view">Login</a>
        				</li>
                <li class="nav-item">
                  <a class="btn btn-outline-success my-2 my-sm-0" href="<?php echo base_url();?>User/register">Sign Up</a>
                </li>
                <li class="nav-item">
                  <a class="btn btn-outline-success my-2 my-sm-0" href="<?php echo base_url();?>Cart">Cart</a>
                </li>
              <?php endif; ?>
      			</ul>
    			</form>
  			</div>
  		</div>
	</nav>


<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

  <!-- custom css -->
  <link href="<?php echo base_url();?>assets/css/custom.css" rel="stylesheet">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="container">
  			<a class="navbar-brand" href="<?php echo base_url();?>Pages">Home</a>
  			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    			<span class="navbar-toggler-icon"></span>
  			</button>

  			<div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    			<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      				<li class="nav-item">
        				<a class="nav-link" href="<?php echo base_url();?>Pages/menu">Menu<span class="sr-only">(current)</span></a>
      				</li>
      				<li class="nav-item">
      				</li>        				<a class="nav-link" href="<?php echo base_url();?>Pages/about">About Us</a>

      				<!-- <li class="nav-item">
        				<a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      				</li> -->
    			</ul>
    			<form class="form-inline my-2 my-lg-0">
    				<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
    				  <li class="nav-item">
        				<a class="btn btn-outline-success my-2 my-sm-0" href="<?php echo base_url();?>User/login">Login<span class="sr-only">(current)</span></a>
      				</li>
              <li class="nav-item">
                <a class="btn btn-outline-success my-2 my-sm-0" href="<?php echo base_url();?>User/register">Sign Up<span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="btn btn-outline-success my-2 my-sm-0" href="<?php echo base_url();?>User/login">Cart<span class="sr-only">(current)</span></a>
              </li>
      			
    			</form>
  			</div>
  		</div>
	</nav>


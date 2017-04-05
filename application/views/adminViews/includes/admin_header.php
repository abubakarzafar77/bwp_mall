<!DOCTYPE html>
<html>
<head>
	<title>Bwp Mall</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.css');?>">
	<link rel="stylesheet" href="<?= base_url('assets/css/font-awesome.css');?>">
	<link rel="stylesheet" href="<?= base_url('assets/css/reset.css');?>">
	<link rel="stylesheet" href="<?= base_url('assets/css/jstarbox.css');?>">
	<link href="http://fonts.googleapis.com/css?family=Cagliostro" rel="stylesheet">
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,800italic,800,700italic,700,600italic,600,400italic,300italic,300" rel="stylesheet">
	<link rel="stylesheet" href="<?= base_url('assets/css/style.css');?>">
	
</head>
<body>
	<!--admin header start-->
	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#"><?= $this->session->userdata('admin_name');?> Admin</a>
				</div>
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
				<form class="navbar-form navbar-left" role="search">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Search">
					</div>
					<button type="submit" class="btn btn-default">Submit</button>
				</form>
				<ul class="nav navbar-nav navbar-right">
					<li><?= anchor('admin/logout','Logout');?></li>
				</ul>
			</div>
		</div>
	</nav>








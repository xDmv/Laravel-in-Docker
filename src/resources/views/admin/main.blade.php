<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Dashboard</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  <link rel="stylesheet" href="css/admin.css">

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->


	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

</head>

<body class="hold-transition skin-blue sidebar-mini">

	<div class="wrapper">
		<header class="main-header">
			<a href="index.html" class="logo">
				<span class="logo-lg"><b>Admin</b>LTE</span>
			</a>
			<nav class="navbar navbar-static-top">
				<a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
					<span class="sr-only">Toggle navigation</span>
				</a>
				<div class="navbar-custom-menu">
					<ul class="nav navbar-nav">
						<li class="dropdown user user-menu">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<img src="img/user2-160x160.jpg" class="user-image" alt="User Image">
								<span class="hidden-xs">Alexander Pierce</span>
							</a>
							<ul class="dropdown-menu">
								<li class="user-header">
									<img src="img/user2-160x160.jpg" class="img-circle" alt="User Image">
									<p>
										Alexander Pierce - Web Developer
										<small>Member since Nov. 2012</small>
									</p>
								</li>
								<li class="user-footer">
									<div class="pull-left">
										<a href="#" class="btn btn-default btn-flat">Profile</a>
									</div>
									<div class="pull-right">
										<a href="#" class="btn btn-default btn-flat">Sign out</a>
									</div>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</nav>
		</header>
		<aside class="main-sidebar">
			<section class="sidebar">
				<ul class="sidebar-menu" data-widget="tree">
					<li class="header">MAIN NAVIGATION</li>
					<li class="active">
						<a href="pages/services/index.html">
							<i class="fa fa-cog"></i> <span>Services</span>
						</a>
					</li>
					<li>
						<a href="pages/command/index.html">
							<i class="fa fa-users"></i> <span>Commands</span>
						</a>
					</li>
					<li>
						<a href="pages/exclusive/index.html">
							<i class="fa fa-star"></i> <span>Exclusive</span>
						</a>
					</li>
					<li>
						<a href="pages/gallery/index.html">
							<i class="fa fa-picture-o"></i> <span>Gallery</span>
						</a>
					</li>
				</ul>
			</section>
		</aside>

@yield('content')

		<footer class="main-footer">
			<div class="pull-right hidden-xs">
				<b>Version</b> 2.4.0
			</div>
			<strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights reserved.
		</footer>
		<div class="control-sidebar-bg"></div>
	</div>

	<!--
	<script src="js/admin.js"></script>
	-->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/fastclick.js"></script>
	<script src="js/adminlte.min.js"></script>
	<script src="js/demo.js"></script>
	<script src="js/ckeditor.js"></script>
	<script src="js/bootstrap3-wysihtml5.all.min.js"></script>

</body>
</html>

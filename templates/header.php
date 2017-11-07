<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Mobi Pay</title>
	<link rel="stylesheet" href="/assets/css/bootstrap.min.css">
</head>
<body>

<nav class="navbar navbar-default" role="navigation">
	<div class="container">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="/">Mobi Pay</a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse navbar-ex1-collapse">
			<ul class="nav navbar-nav">
				<li class="active"><a href="#">Home</a></li>
				<li><a href="#">About</a></li>
				<li><a href="#">Contact</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<?php if(!isset($_SESSION['user'])): ?>
					<li><a href="/login.php">Login</a></li>
					<li><a href="/register.php">Register</a></li>
				<?php else:?>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><?=$_SESSION['user']['first_name']?> <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="#">My Profile</a></li>
							<li><a href="/logout.php">Logout</a></li>
						</ul>
					</li>
			<?php endif; ?>
			</ul>
		</div><!-- /.navbar-collapse -->
	</div>
</nav>

<?php if (isset($_SESSION['flash_message'])): ?>
	<div class="alert alert-info">
		<?=$_SESSION['flash_message']?>
	</div>
<?php endif; ?>

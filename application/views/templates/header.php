<html >
	<head>
		<title>CI3</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
			  integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
	</head>
	<body>

	<nav class="navbar navbar-expand-sm navbar-light bg-danger">
		<a class="navbar-brand" >F1 2020 Season Manager</a>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class="nav-link" href="<?php echo base_url(); ?>"><?php echo $this->lang->line('home') ?>  <span class="sr-only">(current)</span></a>
				</li>

				<li class="nav-item dropdown active">
					<a class="nav-link dropdown-toggle" href="<?php echo base_url(); ?>drivers" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<?php echo $this->lang->line('driver') ?>
					</a>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="<?php echo base_url(); ?>drivers"><?php echo $this->lang->line('driverlist') ?> </a>
						<a class="dropdown-item" href="<?php echo site_url('/drivers/create');?>"><?php echo $this->lang->line('driver_create') ?></a>
					</div>
				</li>

				<li class="nav-item active">
					<a class="nav-link" href="<?php echo base_url(); ?>teams"><?php echo $this->lang->line('teams') ?></a>
				</li>

				<li class="nav-item dropdown active">
					<a class="nav-link dropdown-toggle" href="<?php echo base_url(); ?>posts" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<?php echo $this->lang->line('news') ?>
					</a>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="<?php echo base_url(); ?>posts"><?php echo $this->lang->line('news') ?></a>
						<a class="dropdown-item" href="<?php echo site_url('/posts/create');?>"><?php echo $this->lang->line('news_create') ?></a>
					</div>
				</li>
				<li class="nav-item active">
					<a class="nav-link" href="<?php echo base_url(); ?>about"><?php echo $this->lang->line('about') ?></a>
				</li>

                <li class="nav-item active">
                    <a class="nav-link" href="<?php echo base_url(); ?>tests"><?php echo $this->lang->line('tests') ?></a>
                </li>

			</ul>

			<ul class="nav navbar-nav navbar-right">
                
				<li class="nav-item dropdown active">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<?php echo $this->lang->line('language') ?>
					</a>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="<?php echo base_url(); ?>languages/english"><?php echo $this->lang->line('lang_eng') ?></a>
						<a class="dropdown-item" href="<?php echo base_url(); ?>languages/german"><?php echo $this->lang->line('lang_ger') ?></a>
					</div>
				</li>

				<?php if(!$_SESSION['logged_in']):?>
					<li class="nav-item active">
						<a class="nav-link" href="<?php echo base_url(); ?>users/register"><?php echo $this->lang->line('user_create') ?><span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="<?php echo base_url(); ?>users/login"><?php echo $this->lang->line('login') ?><span class="sr-only">(current)</span></a>
					</li>
				<?php endif;?>

				<?php if($_SESSION['logged_in']):?>
					<a class="navbar-brand"><?php echo $this->lang->line('user_name') ?><?php echo $_SESSION['username'];?></a>
					<li class="nav-item active">
						<a class="nav-link" href="<?php echo base_url(); ?>/users/logout"><?php echo $this->lang->line('logout') ?><span class="sr-only">(current)</span></a>
					</li>
				<?php endif;?>
			</ul>

		</div>
	</nav>
	<br>


	<div class = "container">

		<!-- messages -->
		<?php if(isset($_SESSION['user_registered'])): ?>
			<?php echo '<p class="alert alert-success">'.$_SESSION['user_registered'].'</p>'; ?>
		<?php endif; ?>

		<?php if(isset($_SESSION['driver_created'])): ?>
			<?php echo '<p class="alert alert-success">'.$_SESSION['driver_created'].'</p>'; ?>
		<?php endif; ?>

		<?php if(isset($_SESSION['driver_delete'])): ?>
			<?php echo '<p class="alert alert-success">'.$_SESSION['driver_delete'].'</p>'; ?>
		<?php endif; ?>

		<?php if(isset($_SESSION['driver_edit'])): ?>
			<?php echo '<p class="alert alert-success">'.$_SESSION['driver_edit'].'</p>'; ?>
		<?php endif; ?>

		<?php if(isset($_SESSION['team_created'])): ?>
			<?php echo '<p class="alert alert-success">'.$_SESSION['team_created'].'</p>'; ?>
		<?php endif; ?>

		<?php if(isset($_SESSION['team_edit'])): ?>
			<?php echo '<p class="alert alert-success">'.$_SESSION['team_edit'].'</p>'; ?>
		<?php endif; ?>

		<?php if(isset($_SESSION['team_delete'])): ?>
			<?php echo '<p class="alert alert-success">'.$_SESSION['team_delete'].'</p>'; ?>
		<?php endif; ?>

		<?php if(isset($_SESSION['post_created'])): ?>
			<?php echo '<p class="alert alert-success">'.$_SESSION['post_created'].'</p>'; ?>
		<?php endif; ?>

		<?php if(isset($_SESSION['post_edit'])): ?>
			<?php echo '<p class="alert alert-success">'.$_SESSION['post_edit'].'</p>'; ?>
		<?php endif; ?>

		<?php if(isset($_SESSION['post_delete'])): ?>
			<?php echo '<p class="alert alert-success">'.$_SESSION['post_delete'].'</p>'; ?>
		<?php endif; ?>

		<?php if(isset($_SESSION['user_loggedin'])): ?>
			<?php echo '<p class="alert alert-success">'.$_SESSION['user_loggedin'].'</p>'; ?>
		<?php endif; ?>

		<?php if(isset($_SESSION['login_failed'])): ?>
			<?php echo '<p class="alert alert-danger">'.$_SESSION['login_failed'].'</p>'; ?>
		<?php endif; ?>

		<?php if(isset($_SESSION['user_loggedout'])): ?>
			<?php echo '<p class="alert alert-danger">'.$_SESSION['user_loggedout'].'</p>'; ?>
		<?php endif; ?>

		<?php if(isset($_SESSION['not_logged_in'])): ?>
			<?php echo '<p class="alert alert-danger">'.$_SESSION['not_logged_in'].'</p>'; ?>
		<?php endif; ?>

		<?php if(isset($_SESSION['not_right_user'])): ?>
			<?php echo '<p class="alert alert-danger">'.$_SESSION['not_right_user'].'</p>'; ?>
		<?php endif; ?>

		<?php if(isset($_SESSION['not_admin'])): ?>
			<?php echo '<p class="alert alert-danger">'.$_SESSION['not_admin'].'</p>'; ?>
		<?php endif; ?>



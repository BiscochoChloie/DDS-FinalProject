<nav class="navbar navbar-default navbar-static-top">
	<div class="container">
		<div class="navbar-header">

			<!-- Collapsed Hamburger -->
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
				<span class="sr-only">Toggle Navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>

			<!-- Branding Image -->
			<div class="panel-body">
                <img src="<?php echo e(asset('/images/Desert.jpg')); ?>" height="60" width="100" style=" margin-left: -100px;">
            </div>
		</div>

		<div class="collapse navbar-collapse" id="app-navbar-collapse">
			<!-- Left Side Of Navbar -->
			<ul class="nav navbar-nav">
				<li><a href="<?php echo e(route('departments.index')); ?>">Departments</a></li>
				<li><a href="<?php echo e(route('roles.index')); ?>">Roles</a></li>
				<li><a href="<?php echo e(route('employees.index')); ?>">Payroll</a></li>				
			</ul>

			<!-- Right Side Of Navbar -->
			<ul class="nav navbar-nav navbar-right">
				<!-- Authentication Links -->
				<?php if(auth()->guard()->guest()): ?>
					<li><a href="<?php echo e(route('login')); ?>">Login</a></li>
					<li><a href="<?php echo e(route('register')); ?>">Register</a></li>
					
				<?php else: ?>
					<li><a href="<?php echo e(route('home')); ?>">Dashboard</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
							<?php echo e(Auth::user()->name); ?> <span class="caret"></span>
						</a>

						<ul class="dropdown-menu">
							<li>
								<a href="<?php echo e(route('logout')); ?>"
									onclick="event.preventDefault();
											 document.getElementById('logout-form').submit();">
									Logout
								</a>

								<form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
									<?php echo e(csrf_field()); ?>

								</form>
							</li>
						</ul>
					</li>
				<?php endif; ?>
			</ul>
		</div>
	</div>
</nav>
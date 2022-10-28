<nav class="ts-sidebar">
			<ul class="ts-sidebar-menu">
			
				<li class="ts-label">Main</li>
				<?PHP if(isset($_SESSION['password']))
				{ ?>
				<li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
					<li><a href="#"><i class="fa fa-files-o"></i> Our Profile</a>
					<ul>
						<li><a href="our-profile.php">Manage profiles</a></li>
					</ul>
				</li>
					<li><a href="#"><i class="fa fa-desktop"></i> Rooms</a>
					<ul>
						<li><a href="detail.php">View Detail</a></li>
						<li><a href="navigate.php">Navigate</a></li>
					</ul>
				</li>
				<?php } else { ?>

				<li><a href=""><i class="fa fa-user"></i>Home Owner Login</a></li>
				<li><a href="index.php"><i class="fa fa-users"></i>Emergency Office Login</a></li>
				<li><a href="registration.php"><i class="fa fa-file"></i>Emergency Office registration</a></li>
				<?php } ?>	
</nav>
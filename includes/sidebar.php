<nav class="ts-sidebar">
			<ul class="ts-sidebar-menu">
			
				<li class="ts-label">Main</li>
				<?PHP if(isset($_SESSION['password']))
				{ ?>
					<li><a href="dashboard.php"><i class="fa fa-desktop"></i>Dashboard</a></li>
					<li><a href="my-profile.php"><i class="fa fa-user"></i> My Profile</a></li>
<li><a href="change-password.php"><i class="fa fa-files-o"></i>Change Password</a></li>
<li><a href="detail.php"><i class="fa fa-file-o"></i>details</a></li>

<?php } else { ?>
				
				<li><a href="registration.php"><i class="fa fa-files-o"></i>Home Owner Registration</a></li>
				<li><a href="index.php"><i class="fa fa-users"></i>Home Owner Login</a></li>
				<li><a href="emergency_office"><i class="fa fa-user"></i>Emergency Office Login</a></li>
				<?php } ?>

			</ul>
		</nav>
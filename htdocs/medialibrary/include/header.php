<div id="header">
	<?php echo "<h2>Media Library</h2>";?>
	<?php
		echo '<div class="menu-bar">';
		echo '<center><ul class="flat-list" id="navbar">';
		echo '<li><a href="/medialibrary">Home</a></li>';
		if(isset($user))
		{
			echo '<li><a href="/medialibrary/user/userPage.php?user='. $userID .'">User Page</a></li>';
			echo '<li><a href="/medialibrary/user/login/logout.php">Logout</a></li>';
		}
		else
		{
			echo '<li><a href="/medialibrary/user/login">Login</a></li>';
		}
		echo '</ul></center>';
		echo '</div>';
	?>
</div>
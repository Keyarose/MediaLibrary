<div id="leftSideBar">
	<h3 onClick="openClose('menu')" style="cursor:hand; cursor:pointer">Menu</h3>
	<div id="menu" class="texter">
		<ul>
			<li><a href="/medialibrary/upload">Upload Item</a></li>
			<li><a href="/medialibrary/media">View Media</a></li>
			<ul>
				<li><a href="/medialibrary/media/show">TV Shows</a></li>
				<li><a href="/medialibrary/media/book">Books</a></li>
				<li><a href="/medialibrary/media/movie">Movies</a></li>
				<li><a href="/medialibrary/media/music">Music</a></li>
				<li><a href="/medialibrary/media/picture">Pictures</a></li>
				<li><a href="/medialibrary/media/game">Games</a></li>
				<li><a href="/medialibrary/media/recipes">Recipes</a></li>
			</ul>
			<li><a href="/medialibrary/stats.php">Stats</a></li>
			<?php
				if(isset($permission))
				{
					if($permission >= 4)
					{
						echo '<li><a href="/medialibrary/admin">Admin</a></li>';
						echo '<li><a href="/medialibrary/admin/newsPost.php">Post news</a></li>';
					}
				}
			?>
		</ul>
	</div>
</div>
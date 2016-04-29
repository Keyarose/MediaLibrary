<div id="rightSideBar">
	<h3>Recent Uploads</h3>
	<ul>
		<?php
			$recentUps = "SELECT * FROM uploaded ORDER BY uploaded_id DESC LIMIT 0, 10";
			$recentResult = mysqli_query($dbc, $recentUps);
			
			while($up = mysqli_fetch_array($recentResult, MYSQLI_ASSOC))
			{
				$type = $up['type'];
				$item = $up['item_id'];
				if($type == "show")
				{
					$getItem = "SELECT * FROM shows WHERE show_id = '$item'";
					$getItemResult = mysqli_query($dbc, $getItem);
					$upItem = mysqli_fetch_array($getItemResult, MYSQLI_ASSOC);
					$mature = $upItem['mature'];
					if($mature == 1 && $matureVis == 1)
					{
						echo '<li><a href="/medialibrary/media/show/display.php?show='. $upItem['show_id'] .'">'.$upItem['title'].'</a></li>';
					}
					else if($mature == 0)
					{
						echo '<li><a href="/medialibrary/media/show/display.php?show='. $upItem['show_id'] .'">'.$upItem['title'].'</a></li>';
					}
				}
				if($type == "book")
				{
					$getItem = "SELECT * FROM books WHERE book_id = '$item'";
					$getItemResult = mysqli_query($dbc, $getItem);
					$upItem = mysqli_fetch_array($getItemResult, MYSQLI_ASSOC);
					$mature = $upItem['mature'];
					if($mature == 1 && $matureVis == 1)
					{
						echo '<li><a href="/medialibrary/media/book/display.php?book='. $upItem['book_id'] .'">'.$upItem['title'].'</a></li>';
					}
					else if($mature == 0)
					{
						echo '<li><a href="/medialibrary/media/book/display.php?book='. $upItem['book_id'] .'">'.$upItem['title'].'</a></li>';
					}
				}
				if($type == "movie")
				{
					$getItem = "SELECT * FROM movies WHERE movie_id = '$item'";
					$getItemResult = mysqli_query($dbc, $getItem);
					$upItem = mysqli_fetch_array($getItemResult, MYSQLI_ASSOC);
					$mature = $upItem['mature'];
					if($mature == 1 && $matureVis == 1)
					{
						echo '<li><a href="/medialibrary/media/movie/display.php?movie='. $upItem['movie_id'] .'">'.$upItem['title'].'</a></li>';
					}
					else if($mature == 0)
					{
						echo '<li><a href="/medialibrary/media/movie/display.php?movie='. $upItem['movie_id'] .'">'.$upItem['title'].'</a></li>';
					}
				}
				if($type == "game")
				{
					$getItem = "SELECT * FROM games WHERE game_id = '$item'";
					$getItemResult = mysqli_query($dbc, $getItem);
					$upItem = mysqli_fetch_array($getItemResult, MYSQLI_ASSOC);
					$mature = $upItem['mature'];
					if($mature == 1 && $matureVis == 1)
					{
						echo '<li><a href="/medialibrary/media/game/display.php?game='. $upItem['game_id'] .'">'. $upItem['title'] .'</a></li>';
					}
					else if($mature == 0)
					{
						echo '<li><a href="/medialibrary/media/game/display.php?game='. $upItem['game_id'] .'">'. $upItem['title'] .'</a></li>';
					}
				}
				if($type == "music")
				{
					$getItem = "SELECT * FROM albums WHERE album_id = '$item'";
					$getItemResult = mysqli_query($dbc, $getItem);
					$upItem = mysqli_fetch_array($getItemResult, MYSQLI_ASSOC);
					echo '<li><a href="/medialibrary/media/music/album.php?album='. $upItem['album_id'] .'">'. $upItem['title'] .'</a></li>';
				}
			}
		?>
	</ul>
</div>
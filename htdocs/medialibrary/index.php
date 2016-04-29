<?php
	$page_title = "Media Library";
	include '../../mysqli_connect.php';
	include 'include/userPermissions.php';
?>

<?php
	$postSql = "SELECT news_posts.*, users.username FROM news_posts INNER JOIN users ON news_posts.poster_id = users.user_id ORDER BY upload_datetime DESC LIMIT 5";
	$postQuery = mysqli_query($dbc, $postSql);
?>

<html>
	<?php include 'include/headFunct.php'; ?>
	
	<body>
		<?php 
		include 'include/header.php';
		include 'include/leftSidebar.php'; 
		?>
		
		<div id="center">
			<?php
				while($newsPost = mysqli_fetch_array($postQuery, MYSQLI_ASSOC))
				{
					$title = $newsPost['title'];
					$poster = $newsPost['username'];
					$text = $newsPost['text'];
					$dateTime = $newsPost['upload_datetime'];
					
					echo '<table class="newsPostTable">';
					echo '<tr class="ptHeader"><td><h3>'. $title .'</h3></td></tr>';
					echo '<tr><div class="newsPostBody">';
					echo '<td><div class="posterDatetime">By '. $poster .' at '. $dateTime .'</div>';
					echo $text;
					echo '</div></td></tr>';
					echo '</table></br>';
				}
			?>
		</div>
		
		<?php
		include 'include/rightSidebar.php';
		include 'include/footer.php';
		?>
		
	</body>
</html>
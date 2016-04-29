<?php
	$page_title = "Library Stats";
	include '../../mysqli_connect.php';
?>

<?php
	$sql = "select (select count(*) from shows) as showCount, (select count(*) from books) as bookCount, (select count(*) from movies) as movieCount, (select count(*) from pictures) as pictureCount";
	$sResult = mysqli_query($dbc, $sql);
	$stats = mysqli_fetch_array($sResult, MYSQLI_ASSOC);
?>

<html>
	<?php include 'include/headFunct.php'; ?>
	
	<body>
		<?php 
		include 'include/header.php';
		include 'include/leftSidebar.php'; 
		?>
		
		<div id="center">
			<center><h2>Library Stats</h2></center>
			<?php
			echo'<p>Number of Shows: ' . $stats['showCount'] . '</p>';
			
			echo'<p>Number of Books: ' . $stats['bookCount'] . '</p>';
			
			echo'<p>Number of Movies: ' . $stats['movieCount'] . '</p>';
			
			echo'<p>Number of Music Tracks: </p>';
			
			echo'<p>Number of Pictures: ' . $stats['pictureCount'] . '</p>';
			
			echo'<p>Number of Games: </p>';
			?>
		</div>
		
		<?php
		include 'include/rightSidebar.php';
		include 'include/footer.php';
		?>
	</body>
</html>
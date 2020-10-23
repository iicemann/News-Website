<?php
	$db = new mysqli('localhost','root','','admin');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset = "UTF-8">
	<title>Delete News</title>
</head>
<body>
<style>
	body
{
  align-items: center;
  text-align:center;
  background-color: cornsilk;
}
</style>
	<h2>Delete News</h2>
	<?php
		$sql = "Select news_id, news_title from add_news";
		$result = $db->query($sql);
	?>
	<form action="" method="POST">
		<select name = "news_id" id = "news_id">
			<option value = "selected">Select News Article to be deleted</option>
	<?php
		while($row = $result->fetch_assoc()){ ?>
			<option value = "<?php echo $row['news_id'] ?> "><?php echo $row['news_id'] ?>            <?php echo $row['news_title'] ?></option>
	<?php }	?>
		</select>
		<input type="submit" name="submit" value="Delete article">
	</form>
<?php
	if($_SERVER['REQUEST_METHOD'] == 'POST'){

		$NEWS_ID = $_POST['news_id'];
		$sql = "Delete from add_news where news_id = '$NEWS_ID'";
		$db->query($sql);
		if($db->affected_rows>0){
			echo "<script type='text/javascript'>alert('Successful deletion.');
			window.location='admin.htm';
			echo </script>";
		}
	}
?>	
</body>
</html>
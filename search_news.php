<?php
	$db = new mysqli('localhost','root','','admin');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset = "UTF-8">
	<title>Search News</title>
</head>
<body>
	<style>
	body
{
  align-items: center;
  text-align:center;
  background-color: lightblue;
}
</style>
<br>
</br>
	<h2>Search News</h2>
<form onsubmit="checkforblank()" method="post" action="">
<div class="form-group">
	<label for="search" class="col-form-label"><b>Enter key to be searched:</b></label>
	<input type="text" name="search" class="form-cantrol"  Id="search" onkeydown="checkforblank1()" autocomplete="off"required>
</div>
</form>
<?php
	if($_SERVER['REQUEST_METHOD'] == 'POST'){

		$KEY = $_POST['search'];
		$sql = "SELECT news_title, news_description FROM add_news WHERE MATCH (news_description) AGAINST($KEY)";
		$db->query($sql);
		if($db->affected_rows>0){
			echo $sql;
			?>
			<br>
			</br>
			<?php
		}
	}
?>	
</body>
</html>
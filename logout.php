<?php
session_start();
if(isset($_SESSION['username'])){
	session_destroy();
	echo "<script>location.href = 'Crisp.php'";
}
else
{
	echo "<script>location.href = 'Crisp.php'";
}
?>
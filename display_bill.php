<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
 <title>Crisp Billing</title>
</head>

<body>
<div class="main">
     <div class="logo">
       <img src="image1.jpeg">
     </div>
<div class="title">
      <h1>risp</h1>
    </div>
<br>
</br>
<br>
</br>
<br>
</br>
<br>
</br>
<br>
</br>

<style>

*{
  margin: 0;
  padding: 0;
  font-family: Century Gothic;
}

.logo img{
  float: left;
  width: 150px;
  height: auto;
  top: 45%;
  left: 10%;
}

.title{
  position: absolute;
  top: 7%;
  left: 13%;
  transform: translate(-15%,-15%);
}

.title h1{
  color: #B22222;
  font-size: 90px;
}

p{
  top:50%;
  text-align:justify;
  padding:15px 20px;
}

.returnbtn {
  background-color: #B22222;
  color: white;
  padding: 14px 20px;
  margin-left:500px;
  width: 20%;
  height: 10%;
}


</style>

<?php
$conn = mysqli_connect('localhost','root','');
mysqli_select_db($conn,'admin');
session_start();
$ss = 'CALL generate_bill()';
mysqli_query($conn,$ss);
$stmt = ("SELECT Email_Id, Edition, Period, Price FROM add_subscriber  where user_id='".$_SESSION['uid']."'");
$rs = mysqli_query($conn,$stmt);
if(is_null($rs) )
{
    echo "No subscriptions available.";
}
else {
?>
    <table border="1">
    <tr><th>Email ID</th><th>Edition</th><th>Period</th><th>Price</th></tr>
    <?php
   while($row = mysqli_fetch_array($rs))
        { ?>

    <tr>
        <td><?php echo"{$row['Email_Id']}"?></td>
        <td><?php echo"{$row['Edition']}"?></td>    
        <td><?php echo"{$row['Period']}"?></td>
        <td><?php echo"{$row['Price']}"?></td>
    </tr>
    <?php
  } ?>
    <?php
  } ?>


  </table>

<br></br>
<div class="clearfix">
  <button type="submit" class="returnbtn"><a style="color: white;" href="Crisp1.php">Click here to exit to Home Page</button>
</div>
</html>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<meta charset="UTF-8">
<meta name="viewport" content="wIdth=device-wIdth, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<head>
<body>
<background-color: #00FF00>
<title>Crisp News Management System</title>
<style>
body
{
  align-items: center;
  text-align:center;
  background-color: cornsilk;
}

.l
{
  margin-top: 100px;
}

.p
{
  color: #00FFFF;
}

.tb
{
  color: #808080;
  text-align: center;
  font-size: 2em;
}

.pl
{
  align-content: center;
  background-color: :#00FFFF;
  margin-right: 20px;
}

#input
{
margin-right: 20px;
}

#login-modal.input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

#login-modal .modal-header
{
  background-color: #00FFFF;
  font-size: 50px;
  color:#fff;
}

#login-modal1 .modal-header
{
  background-color: #00FFFF;
  font-size: 50px;
  color:#fff;
}

#login-modal2 .modal-header
{
  background-color: #00FFFF;
  font-size: 50px;
  color:#fff;
}

#login-modal3 .modal-header
{
  background-color: #00FFFF;
  font-size: 50px;
  color:#fff;
}

#login-modal4 .modal-header
{
  background-color: #00FFFF;
  font-size: 50px;
  color:#fff;
}

#login-modal .modal-dialog
{
width: 500px;
align-items: center;
align-content: center;
align-self: center;
color: #00BFFF;
border-width: 10px;
border-color: red;
border-radius: 8px;
}

#login-modal1 .modal-dialog
{
width: 500px;
align-items: center;
align-content: center;
align-self: center;
color: #00BFFF;
border-width: 10px;
border-color: red;
border-radius: 8px;
}

#login-modal2 .modal-dialog
{
width: 500px;
align-items: center;
align-content: center;
align-self: center;
color: #00BFFF;
border-width: 10px;
border-color: red;
border-radius: 8px;
}

#login-modal3 .modal-dialog
{
width: 500px;
align-items: center;
align-content: center;
align-self: center;
color: #00BFFF;
border-width: 10px;
border-color: red;
border-radius: 8px;
}

#login-modal4 .modal-dialog
{
width: 500px;
align-items: center;
align-content: center;
align-self: center;
color: #00BFFF;
border-width: 10px;
border-color: red;
border-radius: 8px;
}

.bt
{
margin-left: 20px;
}

.modal fade
{
  border-width: 10px;
  border-color: #808080;
  border-radius: 8px;
}

#login-modal .form-cantrol
{
  margin-right: 20px;
  margin-left: 5px;
}

</style>
<script>
function checkforblank()
{
if(document.getElementById('News Type ID').value.length==0){
  document.getElementById('Sub News Type ID').disabled = true;
  document.getElementById('Sub News Type Name').disabled = true;
  alert("please enter Id first");
}
else if(document.getElementById('News Type ID').value.length>0){
  document.getElementById('Sub News Type ID').disabled = false;
  document.getElementById('Sub News Type Name').disabled = false;
}
}

function checkforblank1()
{
checkforblank();
}

function checkforblank1()
{
checkforblank();
}

function checkforblank1()
{
checkforblank();
}

function checkforblank1()
{
checkforblank();
}

function checkforblank1()
{
checkforblank();
}

function checkforblank1()
{
checkforblank();
}

function checkforblank1()
{
checkforblank();
}

</script>
</head>
<body data-spy="scroll" data-target=".navbar">
  <img src="C:\Users\New\Downloads\blog6.JPEG">
<div Id="Header">
<nav class="navbar navbar-expand-sm navbar-dark bg-dark fixed-top" Id="navbar">
  <div class="container">
    <button data-toggle="collapse" data-target="#Navbar" class="navbar-toggler">
    <span class="navbar-toggler-icon>"</span>
    </button>
<a href="#" class="navbar-brand"><h3>Crisp News Management System</h3></a>
<div class="collapse navbar-collapse" Id="navbar">
   <ul class="navbar-nav ml-auto">
     <li class="nav-item p"><a href="update_news.php" class="nav-link">Update</a></li>
     <li class="nav-item p"><a href="delete_news.php" class="nav-link">Delete</a></li>
     <li class="nav-item p"><a href="adminlogin.htm" class="nav-link">Log out</a></li>
   </ul>
</div>
  </div>
</nav>
</div>

<div class="l">
<a href="#" class="btn btn-outline-warning btn-lg"  data-target="#login-modal" data-toggle="modal" role="button">Add News Type</a><br><br>
<a href="#" class="btn btn-outline-warning btn-lg"  data-target="#login-modal1" data-toggle="modal" role="button">Add News</a><br><br>
<a href="#" class="btn btn-outline-warning btn-lg"  data-target="#login-modal2" data-toggle="modal" role="button">Add Media</a><br><br>
</div>

<form onsubmit="checkforblank()" method="post" action="add_news_type.php">
<div class="modal fade" Id="login-modal" tabindex="-1" role="form">
<div class="modal-dialog" role="document">
<div class="modal-content">
  <div class="modal-header">
        <h5 class="modal-title">Add News Type</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hIdden="true">&times;</span>
    </button>
  </div>

<div Id="div-forms" tabindex="-1" class="pl" >
<div class="form-group">
<label for="News_Type_Id" class="col-form-label"><b>News Type ID:</b></label><br>
  <input type="number" name="News_Type_Id" class="form-cantrol" Id="Id" maxlength="2" min="1" tabindex=-1 onkeydown="checkforblank()" required>
</div>

<div class="form-group">
<label for="News_Type_Name" class="col-form-label"><b>News Type Name:</b></label><br>
<input type="text" name="News_Type_Name" class="form-cantrol"  Id="News_Type_Name" onkeydown="checkforblank1()" autocomplete="off"required>
</div>

<div class="modal-footer">
  <div class="row content-center">
<button class="btn btn-primary btn-lg" type="submit" onsubmit="checkforblank">Add</button>
  </div>
</form>
</div>
</div>
</div>
</div>
</div>
</div>

<form onsubmit="checkforblank()" method="post" action="add_news.php">
<div class="modal fade" Id="login-modal1" tabindex="-1" role="form">
<div class="modal-dialog" role="document">
<div class="modal-content">
  <div class="modal-header">
        <h5 class="modal-title">Add News</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hIdden="true">&times;</span>
    </button>
  </div>

<div class="form-group">
<label for="News_Title" class="col-form-label"><b>News Title:</b></label><br>
  <input type="text" name="News_Title" class="form-cantrol" Id="News_Title" autocomplete="off" required>
</div>

<div class="form-group">
<label for="News_Type_Id" class="col-form-label"><b>News Type ID:</b></label><br>
<input type="number" name="News_Type_Id" class="form-cantrol"  Id="News_Type_Id"required>
</div>

<div class="form-group">
<label for="News_Description" class="col-form-label"><b>News Description:</b></label><br>
<input type="text" name="News_Description" class="form-cantrol" Id="News_Description" autocomplete="off" required>
</div>

<div class="form-group">
<label for="Media_Id" class="col-form-label"><b>Media ID:</b></label><br>
<input type="number" name="Media_Id" class="form-cantrol" Id="Media_Id" required>
</div>

<div class="form-group">
<label for="News_Read_Count" class="col-form-label"><b>News Read Count:</b></label><br>
<input type="number" name="News_Read_Count" class="form-cantrol" Id="News_Read_Count" required>
</div>

<div class="form-group">
<label for="News_Publish_Count" class="col-form-label"><b>News Publish Count:</b></label><br>
<input type="number" name="News_Publish_Count" class="form-cantrol" Id="News_Publish_Count" required>
</div>

<div class="modal-footer">
  <div class="row content-center">
<button class="btn btn-primary btn-lg" type="submit">Add</button>
  </div>
</form>
</div>
</div>
</div>
</div>
</div>
</div>

<form onsubmit="checkforblank()" method="post" action="add_media.php">
<div class="modal fade" Id="login-modal2" tabindex="-1" role="form">
<div class="modal-dialog" role="document">
<div class="modal-content">
  <div class="modal-header">
        <h5 class="modal-title">Add Media Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hIdden="true">&times;</span>
    </button>
  </div>

<div class="form-group">
<label for="Media_Name" class="col-form-label"><b>Media Name:</b></label><br>
  <input type="text" name="Media_Name" class="form-cantrol" Id="Media_Name" autocomplete="off" required>
</div>

<div class="form-group">
<label for="Media_Description" class="col-form-label"><b>Media Description:</b></label><br>
  <input type="file" name="Media_Description" class="form-cantrol" Id="Media_Description" autocomplete="off" required>
</div>

<div class="form-group">
<label for="Version_Type" class="col-form-label"><b>Version Type</b></label><br>
    <input type="radio" name="Version_Type" class="form-cantrol"  Id="Version_Type" value="JPG" required  > JPG
            <input type="radio" name="Version_Type" class="form-cantrol"  Id="Version_Type" value="JPEG" required  > JPEG
</div>

<div class="modal-footer">
<div class="row content-center">
<button class="btn btn-primary btn-lg" name="submit" type="submit">Add</button>
  </div>
</form>
</div>
</div>
</div>
</div>
</div>
</div>




</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</html>
<?php
$hostname = "127.0.0.1";
$username = "root";
$dbname = "test";
$password = "";

$conn = mysqli_connect($hostname,$username,$password,$dbname) Or DIE ("Unable to connect to Database!");

if(isset($_POST['submit']))
{
	$name = $_POST[''];
	$DivorceId = $_POST[''];
	
	$sql = "Insert into test (name,DivorceId)values ('$name','$DivorceId' ) ";
	if ($conn->query($sql) === TRUE)
	{
		echo "New record created successfully!";
		
	}
	else {
		echo "Not inserted ";
	}
    $conn->close();
 	
}




?>


<!DOCTYPE html>
<html>
<head>
<style>
h1 {
  text-align:center;
}
* {
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: white;
  color: black;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: left;
  margin: 25px;
}

input[type=submit]:hover {
  background-color: grey;
}

.container {
  border-radius: 5px;
  background-color: red;
  padding: 20px;
  width : 40%;
  
}

.col-25 {
  float: left;
  width: 35%;
  margin-top: 6px;
  color: white;
}

.col-75 {
  float: left;
  width: 60%;
  margin-top: 6px;
  color: white;
}
.row:after {
  content: "";
  display: table;
  clear: both;
  c
}
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
</head>
<body>
<h1> Sample Form</h1>
<center><div class="container">
  <form action="2.php" method="POST">
  <div class="row">
    <div class="col-25">
      <label for="name" >Name -</label>
    </div>
    <div class="col-75">
      <input type="text" id="name" name="name" placeholder="Your name..">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="DivorceId">State Issued Divorce Id - </label>
    </div>
    <div class="col-75">
      <input type="text" id="DivorceId" name="DivorceId" placeholder="Divorce Id..">
    </div>
  </div>
  
  <div class="row">
    <input type = "submit" value = "Next"/>
  </div>
  </form>
</div></center>

</body>
</html>

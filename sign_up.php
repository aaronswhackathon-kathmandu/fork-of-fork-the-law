<?php
include 'includes/header.php';
?>
<div id='wrap'><div class='container'>
<div class='row'><div class='span12'> 
<h3>Sign up</h3><hr>
<?php
 if (isset($_POST['submit'])){
  $name = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING,FILTER_FLAG_NO_ENCODE_QUOTES);
  $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING,FILTER_FLAG_NO_ENCODE_QUOTES);
  $cpassword = filter_input(INPUT_POST, 'cpassword', FILTER_SANITIZE_STRING,FILTER_FLAG_NO_ENCODE_QUOTES);
  $type=$_POST['category'];
  $date_now = date("d/m/y : H:i:s", time());
  if($name && $password && $cpassword && $type){
	  if($password==$cpassword){
		  $sql="insert into user(user_name,password,category,pub_date) values('$name','$password','$type','$date_now')";
				  mysql_query($sql);
	 header('index.php');
	 echo "You have be registered successfully.";
	  }
  }else{
	  echo "Please fill all the form";
  }
 }

?>
<form action="sign_up.php" method="post">
<b>Username:</b>
<input type="text" name="username"  /><br>
<b>Password:</b>
<input type="password" name="password"  /><br>
<b>Re Enter Password:</b>
<input type="password" name="cpassword" /><br>
<b>User Type:</b>
<label class="radio inline"><input type="radio" name="category" value="1"  />Category1</label>
<label class="radio inline"><input type="radio" name="category" value="2"  />Category2</label>
<br/>

<input class="btn btn-success" type="submit" value="Sign up" name="submit"/>

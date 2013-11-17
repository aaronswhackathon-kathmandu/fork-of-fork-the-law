<?php
include 'includes/header.php';
?>
<div id='wrap'><div class='container'>
<div class='row'><div class='span12'> 
<h3>Login</h3><hr>
<?php 
if(isset($_POST['submit'])){
	$name = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING,FILTER_FLAG_NO_ENCODE_QUOTES);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING,FILTER_FLAG_NO_ENCODE_QUOTES);
	if($name && $password){
	$sql="select * from user where user_name='".mysql_real_escape_string($name)."' and password='".mysql_real_escape_string($password)."'";
	echo $name;
	echo $password;
	$query=mysql_query($sql);
$num=mysql_num_rows($query);

if ($num==1){
session_start();
$query = mysql_query("SELECT user_id, category  FROM user WHERE user_name='$name' AND password='$password'");
while($row =  mysql_fetch_array($query)) 
{
$_SESSION['user_id']=$row['user_id'];
$_SESSION['category']=$row['category'];
}
$_SESSION['user_name']=$name;
	header('location:index.php');
	echo 'sdfsdff';
}else{
	header('location:login.php');

}
	}
}
?>
<form action="login.php" method="post">
<b>Username:</b>
<input type="text" name="username" /><br>
<b>Password:</b>
<input type="password" name="password" /><br>
<input class="btn btn-success" type="submit" value="Login" name="submit"/>

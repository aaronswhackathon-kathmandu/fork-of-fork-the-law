<?php
include 'includes/header.php';
?>
<div id='wrap'><div class='container'>
<div class='row'><div class='span12'> 
<?php
session_start();
if (isset($_SESSION['user_id'])) { $user_id = $_SESSION['user_id'];}
if (isset($_POST['title'])) {
$proposal_id = $_POST['proposal_id'];
$support = $_POST['support'];
$description = $_POST['comment'];
$title = $_POST['title'];
$return_url = $_POST['return'];
$date_now = date("d/m/y : H:i:s", time());

include "includes/mysql_connect.php";
$query = "INSERT INTO comment VALUES ('', '$proposal_id', '$support', '$title', '$description', '$user_id', '$date_now')";
            $result = mysql_query($query);
if (!$result) die ("Database access failed: " . mysql_error());
            else {
            	echo "<h3>Your Comment has been added Successfully.</h3><hr>";
				header("location: $return_url");
            }
}
?>
</div>
</div></div></div></div>
<?php
include 'includes/footer.php';
?>
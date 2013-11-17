<?php
session_start();
include 'includes/header.php';
?>
<div id='wrap'><div class='container'>
<div class='row'><div class='span12'> 
<h3>Proposal Approved</h3><hr>
<?php
$proposal_id = $_GET['id'];
if ($_SESSION['user_category'] == 1) {
	include "includes/mysql_connect.php";
	$result = mysql_query("UPDATE proposal SET status='2' WHERE proposal_id='$proposal_id'");
}
?>
</div>
</div></div></div></div>
<?php
include 'includes/footer.php';
?>
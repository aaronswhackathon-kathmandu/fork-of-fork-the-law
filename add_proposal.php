<?php
include 'includes/header.php';
?>
<div id='wrap'><div class='container'>
<div class='row'><div class='span12'> 
<?php
session_start();
if (isset($_SESSION['user_id'])) { $user_id = $_SESSION['user_id'];}
if (isset($_POST['title'])) {
$title = $_POST['title'];
$description = $_POST['description'];
$category = $_POST['category'];
$date_now = date("d/m/y : H:i:s", time());

include "includes/mysql_connect.php";
$query = "INSERT INTO proposal VALUES ('', '$title', '$description', '$category', '$user_id', '1' , '$date_now')";
            $result = mysql_query($query);
if (!$result) die ("Database access failed: " . mysql_error());
            else {
            	echo "<h3>Proposal Successfully Added!</h3>";
				header("location: list_proposal.php");
            }
}
else {
?>
<h3>Add Proposal</h3><hr>
<form action="add_proposal.php" method="post">
<b>Title:</b>
<input type="text" name="title" required /><br>
<b>Description:</b>
<textarea class="span8" name="description" rows="3" cols="70" required></textarea><br>
<b>Category:</b>
<label class="radio inline"><input type="radio" name="category" value="category1" required />Category1</label>
<label class="radio inline"><input type="radio" name="category" value="category2" required />Category2</label>
<label class="radio inline"><input type="radio" name="category" value="category3" required />Category3</label>
<label class="radio inline"><input type="radio" name="category" value="category4" required />Category4</label><br />
<input class="btn btn-success" type="submit" value="Save"/>
</form>
</div>
</div></div></div></div>
<?php
}
include 'includes/footer.php';
?>
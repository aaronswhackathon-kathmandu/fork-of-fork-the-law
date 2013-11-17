<?php
include 'includes/header.php';
?>
<div id='wrap'><div class='container'>
<div class='row'><div class='span12'> 
<?php
$proposal_id = $_GET['id'];
include "includes/mysql_connect.php";
$query = mysql_query("SELECT proposal_id, title, description, status, pub_date FROM proposal WHERE proposal_id= $proposal_id");
while($row =  mysql_fetch_array($query)) 
{
echo '<h3>'.$row['title'].'</h3>';
echo '<div class="alert alert-success">';
echo '<p>'.$row['description'].'</p>';
echo '<span style="float:right;" >'.$row['pub_date'].'</span><br />';

// Show Only to Moderator
session_start();
if ($_SESSION['category']==1){
if ($row['status'] == 1) {
echo '<a href="proposal_status.php?id='.$proposal_id.'" class="btn btn-primary" >Approve</a>';
}
elseif ($row['status']==2) {

echo '<button class="btn btn-success disabled">Approved</button>';
}
}
echo '</div>';
}
?>
<h3>Add Comment</h3><hr>
<form action="add_comment.php" method="post">
<b>Title:</b>
<input type="text" name="title" required /><br />
<b>Support:</b>
<label class="radio inline"><input type="radio" name="support" value="1" required />yes</label>
<label class="radio inline"><input type="radio" name="support" value="0" required />no</label>
<br/>
<textarea class="span8" name="comment" rows="4" cols="70" required></textarea><br>
<input type="hidden" name="proposal_id" value="<?php echo $proposal_id ?>" />
<input type="hidden" name="return" value="<?php echo $return_url ?>" />
<input class="btn btn-success" type="submit" value="Save"/>
</form>

<?php
echo '
<h3>Other Comments</h3><hr>

	';
	
$query = mysql_query("SELECT description, title, support, pub_date, support  FROM comment WHERE proposal_id= $proposal_id");
while($row =  mysql_fetch_array($query)) 
{
if ($row['support'] == 1) {
echo '<div class="alert alert-success">';
}
else {
echo '<div class="alert alert-danger">';
}
echo '<h3>'.$row['title'].'</h3>';
echo '<p>'.$row['description'].'</p>';
echo '<h5 align = "right">'.$row['pub_date'].'</h5>';
echo '</div>';
}
?>
</div>
</div></div></div></div>
<?php
include 'includes/footer.php';
?>

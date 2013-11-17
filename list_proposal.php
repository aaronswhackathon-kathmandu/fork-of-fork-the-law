<?php
include 'includes/header.php';
?>
<div id='wrap'><div class='container'>
<div class='row'><div class='span12'> 
<h3>List Proposal</h3><hr>
<?php
include "includes/mysql_connect.php";
$query = mysql_query("SELECT proposal_id, title, description, pub_date FROM proposal ORDER BY proposal_id DESC");
while($row =  mysql_fetch_array($query)) 
{
echo '<div class="well">';
echo '<h3><a href="proposal.php?id='.$row['proposal_id'].'">'.$row['title'].'</a></h3>';
echo '<p>'.$row['description'].'</p>';
echo '<button style="float:right;" class="btn btn-success disabled" >'.$row['pub_date'].'</button>';
echo '</div>';
}
?>
</div>
</div></div></div></div>
<?php
include 'includes/footer.php';
?>
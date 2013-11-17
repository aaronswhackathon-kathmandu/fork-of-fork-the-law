<?php
include 'includes/header.php';
?>
<div id='wrap'><div class='container'>
<div class='row'><div class='span12'> 
<h3>Add Proposal</h3><hr>
<form method="post" action="validate_proposal.php" >
Proposal Title: <input type="text" name ="proposal_title" id ="proposal_title" size = 50 /><br />
Proposal Description: <textarea rows="8" cols="50" name ="proposal_description" id="proposal_description" ></textarea>
<button>Submit</button>
</form>
</div>
</div></div></div></div>
<?php
include 'includes/footer.php';
?>
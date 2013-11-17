<?php
include 'includes/header.php';
?>
<div id='wrap'><div class='container'>
<div class='row'><div class='span12'> 
<h2>Welcome, <?php
session_start();
if (isset($_SESSION['user_id'])) { echo $_SESSION['user_name']."!";}
else { echo "Guset!";}
 ?></h2><hr>
<h1>FORK THE LAW.</h1>
<h3>Please put your views, ideas on the following topics.</h3>
<p>
Fork the law is the forum where you can raise your ideas in the law of the country.<br />
You can come up with your own ideas and views about the law.<br />
If you like any law you can raise your voice for it.<br />
If you don't like any law  you can raise your voice against it.<br />
We try to connect Government, Advocate and General people like us together........<br />
Lets make our law by ourselves.
</p>
</div>
</div></div></div></div>
<?php
include 'includes/footer.php';
?>
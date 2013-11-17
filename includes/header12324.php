<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?php echo $page_title ?>~MBBS-BE-CMAT Entrance Preparation</title>
    <link rel="icon" type="image/ico" href="/img/favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo $meta_discription ?>">
    <meta name="tags" content="<?php echo $meta_tags ?>">

    <!-- Le styles -->
    <link href="/css/style.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
    </style>
    <link href="/css/tyrocity-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="html5shiv.js"></script>
    <![endif]-->
<!-- BEGIN Tynt Script -->
<script type="text/javascript">
if(document.location.protocol=='http:'){
 var Tynt=Tynt||[];Tynt.push('cnxhxY7kur4Oxxacwqm_6l');
 (function(){var s=document.createElement('script');s.async="async";s.type="text/javascript";s.src='http://tcr.tynt.com/ti.js';var h=document.getElementsByTagName('script')[0];h.parentNode.insertBefore(s,h);})();
}
</script>
<!-- END Tynt Script -->
  
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="http://entrance.tyrocity.com"><strong>Entrance.TyroCity.com</strong></a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class='icon-tasks icon-white'></i> <strong>Subjects</strong> <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="/physics-practice.php"><strong>Physics</strong></a></li>
                  <li><a href="/chemistry-practice.php"><strong>Chemistry</strong></a></li>
                  <li><a href="/eat-practice.php"><strong>EAT</strong></a></li>
                </ul></li>
                <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class='icon-tasks icon-white'></i> <strong>Question Sets</strong> <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href='/be-model-questions.php'><strong>BE Model Sets</strong></a></li>
                <li><a href='/mbbs-past-questions.php'><strong>MBBS Past Sets</strong></a></li>
                <li><a href='/mbbs-model-questions.php'><strong>MBBS Model Sets</strong></a></li>
                <li><a href='/cmat-model-questions.php'><strong>CMAT Model Sets</strong></a></li>
                <li><a href='/cmat-past-questions.php'><strong>CMAT Past Sets</strong></a></li>
                </ul></li>
                </ul>
              
<?php
if(isUserLoggedIn()) 
{ echo "<ul class='nav pull-right'>
              <li class='dropdown'>
                <a href='#' class='dropdown-toggle' data-toggle='dropdown'><i class='icon-user icon-white'></i> <strong>$loggedInUser->displayname</strong> <b class='caret'></b></a>
                <ul class='dropdown-menu'>
                  <li><a href='/history.php'><i class='icon-repeat'></i> <strong>History</strong></a></li>
                  <li><a href='/users.php?id=$loggedInUser->username'><i class='icon-eye-open'></i> <strong>Profile</strong></a></li>
                  <li><a href='/users.php'><i class='icon-star-empty'></i> <strong>Top Scorers</strong></a></li>
                  <li class='divider'></li>
                  <li><a href='/logout.php'><i class='icon-off'></i> <strong>Log Out</strong></a></li>
                  <li><a href='/edit-profile.php?edit=$loggedInUser->username'><i class='icon-pencil'></i> <strong>Edit Profile</strong></a></li>
                  <li><a href='#'><i class='icon-warning-sign'></i> <strong>Report Error</strong></a></li>
                </ul>
              </li>
            </ul>";
}
else {

  echo <<<_END
            <form class="navbar-form pull-right" method="post" action="/login.php">
              <input class="span2" type="text" placeholder="Email or Username" name='username'>
              <input class="span2" type="password" placeholder="Password" name='password'>
              <button type="submit" class="btn">Sign in</button>
            </form>
_END;
}
?>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>
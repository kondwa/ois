<?php echo "oi:cards&trade; "; ?>
<link href="css/main.css" type="text/css" rel="stylesheet" />
<link href="css/form.css" type="text/css" rel="stylesheet" />
<link href="css/table.css" type="text/css" rel="stylesheet" />
<?php include "oi/oi.php"; ?>
<?php if($ua->in()): ?>
- <a href="?sign=out">sign out</a>
<?php else: ?>
- <a href="?sign=up">sign up</a>
- <a href="?sign=in">sign in</a> 
<?php endif; ?>
<div>
<?php
  switch(@$_GET['sign']){
    case "up": include "views/sign-up.php"; break;
    case "in": include "views/sign-in.php"; break;
    case "out": include "views/sign-out.php"; break;
 }
?>
</div>
<?php 

if($ua->in()){ include "views/cash.php"; }

?>

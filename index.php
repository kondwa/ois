<?php echo "oi:cards&trade; "; ?>
<link href="main.css" type="text/css" rel="stylesheet" />
<link href="form.css" type="text/css" rel="stylesheet" />
<?php include "oi.php"; ?>
<?php if($ua->in()): ?>
- <a href="?sign=out">sign out</a>
<?php else: ?>
- <a href="?sign=up">sign up</a>
- <a href="?sign=in">sign in</a> 
<?php endif; ?>
<div>
<?php
  switch(@$_GET['sign']){
    case "up": include "sign-up.php"; break;
    case "in": include "sign-in.php"; break;
    case "out": include "sign-out.php"; break;
 }
?>
</div>
<?php 

if($ua->in()){ include "cash.php"; }

?>

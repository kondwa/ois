<link href="css/main.css" type="text/css" rel="stylesheet" />
<link href="css/form.css" type="text/css" rel="stylesheet" />
<link href="css/table.css" type="text/css" rel="stylesheet" />
<?php include "oi/oi.php"; ?>
<div class='main'>
<div class="head">
  <span class="brand">
    <?php echo "oi:Cards&trade; "; ?>
  </span>
  <span>&nbsp;</span>
  <nav>
    <?php if($ua->in()): ?>
      - <a href="?">Dashboard</a>
      - <a href="?sign=out">Sign out</a>
    <?php else: ?>
      - <a href="?sign=up">Sign up</a>
      - <a href="?sign=in">Sign in</a> 
    <?php endif; ?>
  </nav>
</div>
<div class='content'>
<?php
  switch(@$_GET['sign']){
    case "up": include "views/sign-up.php"; break;
    case "in": include "views/sign-in.php"; break;
    case "out": include "views/sign-out.php"; break;
    default: if($ua->in()){ include "views/cash.php"; }
 }
?>
</div>
</div>
<?php echo "oi:cash&trade; "; ?>
- <a href="?cash=in">in</a>
- <a href="?cash=out">out</a>
<link href="table.css" type="text/css" rel="stylesheet" />
<div>
<?php
switch(@$_GET['cash']){
  case "in": include "cash-in.php"; break;
  case "out": include "cash-out.php"; break;
}
?>
</div>
<?php include "cash-flow.php"; ?>

<div class="action">
Cash action 
- <a href="?cash=in">Cash in</a>
- <a href="?cash=out">Cash out</a>
</div>
<link href="table.css" type="text/css" rel="stylesheet" />
<div>
<?php
switch(@$_GET['cash']){
  case "in": include "views/cash-in.php"; break;
  case "out": include "views/cash-out.php"; break;
  default: include "views/cash-flow.php"; break;
}
?>
</div>
<?php //include "views/cash-flow.php"; ?>

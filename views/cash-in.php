<?php
  if($_POST){ $cash->in($_POST); }
?>
<form method="post">
  <fieldset>
    <legend>Cash in</legend>
    <!-- input type="date" name="date" placeholder="date.." /-->
    <input type="money" name="amount" placeholder="Amount..." />
    <button>Cash in</button>
  </fieldset>
</form>

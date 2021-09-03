<?php
  if($_POST){ $cash->in($_POST); }
?>
<form method="post">
  <fieldset>
    <legend>cash in</legend>
    <!-- input type="date" name="date" placeholder="date.." /-->
    <input type="money" name="amount" placeholder="amount..." />
    <button>cash in</button>
  </fieldset>
</form>

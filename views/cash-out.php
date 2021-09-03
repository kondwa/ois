<?php
  if($_POST){ $cash->out($_POST); }
?>

<form method="post">
  <fieldset>
    <legend>cash out</legend>
    <!--input type="date" name="date" placeholder="date..." /-->
    <input type="money" name="amount" placeholder="amount..." />
    <button>cash out</button>
  </fieldset>
</form>

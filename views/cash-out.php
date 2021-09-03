<?php
  if($_POST){ $cash->out($_POST); }
?>

<form method="post">
  <fieldset>
    <legend>Cash out</legend>
    <!--input type="date" name="date" placeholder="date..." /-->
    <input type="money" name="amount" placeholder="Amount..." />
    <button>Cash out</button>
  </fieldset>
</form>

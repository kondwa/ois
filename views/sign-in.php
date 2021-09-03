<?php
 //include "oi.php";
 if($_POST){ $ua->signin($_POST); }
?>
<form method="post">
  <fieldset>
    <legend>sign in</legend>
    <input type="email" name="email" placeholder="email..."/>
    <input type="password" name="password" placeholder="password..." />
    <button type="submit" name=sign value="in">sign in</button>
  </fieldset>
</form>

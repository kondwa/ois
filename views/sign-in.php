<?php
 if($_POST){ $ua->signin($_POST); }
?>
<form method="post">
  <fieldset>
    <legend>Sign in</legend>
    <input type="email" name="email" placeholder="Email..."/>
    <input type="password" name="password" placeholder="Password..." />
    <button type="submit">Sign in</button>
  </fieldset>
</form>

<?php
if($_POST){
  $ua->signup($_POST);
}
?>
<form method="post">
  <fieldset>
    <legend>Sign up</legend>
    <input type="text" name="firstname" placeholder="First name..." />
    <input type="text" name="lastname" placeholder="Last name..." />
    <input type="email" name="email" placeholder="Email.." />
    <input type="password" name="password" placeholder="Password..." />
    <button type="submit">Sign up</button>
  </fieldset>
</form>

<?php
if($_POST){
  $ua->signup($_POST);
}
?>
<form method="post">
  <fieldset>
    <legend>sign up</legend>
    <input type="text" name="firstname" placeholder="first name..." />
    <input type="text" name="lastname" placeholder="last name..." />
    <input type="email" name="email" placeholder="email.." />
    <input type="password" name="password" placeholder="password..." />
    <button type="submit">sign up</button>
  </fieldset>
</form>

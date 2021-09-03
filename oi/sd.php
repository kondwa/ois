<?php
global $sd;
class SD{
  function __get($a){
    session_start();
    $v = @$_SESSION[$a];
    session_commit();
    return $v;
  }
  function __set($a,$v){
    session_start();
    $_SESSION[$a]=$v;
    session_commit();
  }
  function cs(){
    session_start();
    session_destroy();
  }
}
?>
<?php $sd = new SD(); ?>

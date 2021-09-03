<?php 
class UA{
  function signin($data){
    global $db,$sd;
    $e = $data['email'];
    $p = $data['password'];
    try{
      $s = $db->prepare("SELECT id,firstname,lastname,email FROM ua WHERE email=? AND password=?;");
      $rs = $s->execute(array($e,md5($p)));
      if($rs){ 
        $sd->authenticated = true; 
        $this->rt();
      }else{ 
        $sd->authenticated = false; 
      }
    }catch(Exception $e){
      echo $e->getMessage();
    }
    
  }
  function signup($data){
    global $db;
    $f = $data['firstname'];
    $l = $data['lastname'];
    $e = $data['email'];
    $p = $data['password'];
    try{
      $s = $db->prepare("INSERT INTO ua(firstname,lastname,email,password) VALUES(?,?,?,?);");
      $rs = $s->execute(array($f,$l,$e,md5($p)));
      if($rs){ $this->rt(); }
    }catch(Exception $e){ echo $e->getMessage(); }
  }
  function signout(){
    global $sd;
    $sd->cs(); 
    $this->rt();
  }
  function in(){
    global $sd;
    return $sd->authenticated;
  }
  function rt(){
    header("location: . ");
  }
 
}
?>
<?php $ua = new UA(); ?>

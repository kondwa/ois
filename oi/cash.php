<?php
class CASH{
    function in($data){
        global $db,$ua;
        $amount = $data['amount'];
        $balance = $this->balance() + $amount;
        $transaction = "cash in";
        try{
            $s= $db->prepare("INSERT INTO cash(amount,balance,transaction)VALUES(?,?,?);");
            $s->execute([$amount,$balance,$transaction]);
        }catch(Exception $e){
            $e->getMessage();
        }
        $ua->rt();
    }
    function out($data){
        global $db,$ua;
        $amount = -1 * $data['amount'];
        $balance = $this->balance() + $amount;
        $transaction = "cash out";
        try{
            $s = $db->prepare("INSERT INTO cash(amount,balance,transaction)VALUES(?,?,?);");
            $s->execute([$amount,$balance,$transaction]);
        }catch(Exception $e){
            echo $e->getMessage();
        }
        $ua->rt();
    }
    function balance(){
        global $db;
        try{
            $s = $db->query("SELECT sum(amount) AS balance FROM cash;");
            $row = ($s)? $s->fetch(): 0;
        }catch(Exception $e){
            //echo $e->getMessage();
            return 0;
        }
        
        return isset($row['balance'])?$row['balance']:0;
    }
    function flow(){
        global $db;
        $s = $db->query("SELECT * FROM cash ORDER BY id DESC;");
        $rows = ($s)? $s->fetchAll():[];
        return $rows;
    }
}
?>
<?php $cash = new CASH(); ?>
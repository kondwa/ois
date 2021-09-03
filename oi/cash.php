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
        $s = $db->query("SELECT sum(amount) AS balance FROM cash;");
        $row = $s->fetch();
        return $row['balance'];
    }
    function flow(){
        global $db;
        $s = $db->query("SELECT * FROM cash ORDER BY id DESC;");
        $rows = $s->fetchAll();
        return $rows;
    }
}
?>
<?php $cash = new CASH(); ?>
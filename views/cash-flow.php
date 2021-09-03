<div class="cashbox">
  <?php 
    $balance = $cash->balance();
    $class = ($balance > 0)? 'cashin':'cashout';
    echo "Cash balance: <span class='$class'>K".number_format($balance,2)."</span>";
    $cashflow = $cash->flow();
  ?> 
</div>
<table>
  <thead>
    <tr>
      <th>Transaction</th><th>Amount</th><th>Balance</th>
    <tr>
  </thead>
  <?php foreach($cashflow as $row): ?>
  <tbody>
    <tr>
      <td><?php echo $row['transaction']; ?></td>
      <td align="right" class="<?php echo ($row['amount'] > 0)? 'cashin':'cashout';?>"><?php echo "K" . number_format($row['amount'],2); ?></td>
      <td align="right" class="<?php echo ($row['balance'] > 0)? 'cashin':'cashout';?>"><?php echo "K" . number_format($row['balance'],2);?></td>
    </tr>
  <?php endforeach; ?>
  </tbody>
</table>

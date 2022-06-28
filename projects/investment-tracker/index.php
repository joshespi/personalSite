<?php
$myCoins = array(
  'BTC' => array('balance' => 0.1026, 'name' => 'Bitcoin'),
  'ETH' => array('balance' => 1, 'name' => 'Ether'),
  'ADA' => array('balance' => 420.05, 'name' => 'Cardano'),
  'MIOTA' => array('balance' => 123.44, 'name' => 'IOTA'),
  'BAT' => array('balance' => 32.62, 'name' => 'Basic Attention Token'),
  'SOL' => array('balance' => 0.3429, 'name' => 'Solana'),
  'ALGO' => array('balance' => 33.72, 'name' => 'Algorand'),
  'XTZ' => array('balance' => 7.66, 'name' => 'Tezos'),
  'XRP' => array('balance' => 30, 'name' => 'Ripple'),
  'ATOM' => array('balance' => 1.68, 'name' => 'Atom')
);
$coinNames = array_keys($myCoins);
$coinCount = intval(count($myCoins));
// echo $coinCount;
// print_r($myCoins);
// print_r($coinNames);
?>





<table>
  <tr>
    <td>SYMBOL</td>
    <td>NAME</td>
    <td>HOLDINGS</td>
    <!-- <td>PRICE</td>
    <td>VALUE</td>
    <td>1hr</td>
    <td>24hr</td>
    <td>7day</td> -->
  </tr>
  <?php
  $coinTracker = 0;
  while ($coinTracker < $coinCount) {
    $coinTicker = $coinNames[$coinTracker];
  ?>
    <tr>
      <td><?php echo $coinTicker; ?></td>
      <td><?php echo $myCoins[$coinTicker]['name'] ?></td>
      <td><?php echo $myCoins[$coinTicker]['balance'] ?></td>
    </tr>
  <?php
    $coinTracker++;
  }
  ?>
</table>
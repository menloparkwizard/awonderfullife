<?php
  //debug($cards);
  foreach($cards as $idx => $deck):
?>
  <center><h4><? echo $deck['Deck']['name'] ?><h4></center> 
  <hr>
  <center>
<?php
  for($i = 0; $i < $deck['Deck']['numcards']; $i++){
     if( $i % 5 == 0 ){
       echo "<br>";
     }
     $found = false;
     foreach($deck['Card'] as $cardidx => $card ){
       if( $i + 1 == $card['seriesno'] and $card['trading_status'] == 1){
         echo $this->Html->image($card['card']);
         $found = true;
       }
     }
     if(!$found){
       echo $this->Html->image('filler.png');
     }
  }
?>
</center>
<br><br>
<?
  endforeach;
?>

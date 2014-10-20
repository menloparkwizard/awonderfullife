<div>
  <center>
  <h4> Worth 1 </h4>
  <hr>
  <? $i = 0; ?>
  <? foreach($tradingCards as $idx => $card): ?>
    <? if( $card['Card']['worth'] == 1 ): ?>
      <? echo $this->Html->image($card['Card']['card']); ?>
      <? $i++; ?>
      <? if( $i % 9  == 0 ): ?>
        <br>
      <? endif; ?>
    <? endif; ?>
  <? endforeach; ?>
  <? if( $i == 0 ): ?>
    <p> No worth 1 cards at this time </p>
  <? endif; ?>
  
  <br><br><br>
  <h4> Worth 2 </h4>
  <hr>
  <? $j = 0; ?>
  <? foreach($tradingCards as $idx => $card): ?>
    <? if( $card['Card']['worth'] == 2 ): ?>
      <? echo $this->Html->image($card['Card']['card']); ?>
      <? $j++; ?>
      <? if( $j % 9  == 0 ): ?>
        <br>
      <? endif; ?>
    <? endif; ?>
  <? endforeach; ?>
  <? if( $j == 0 ): ?>
    <p> No worth 2 cards at this time </p>
  <? endif; ?>
  </center>
  
  <br><br><br>
  
  
  <center>
  <h4> Pending </h4>
  <p>Pending trades will be held for 1 week.</p>
  <hr>
  <? $k = 0; ?>
  <? foreach($pendingCards as $idx => $card): ?>
      <? echo $this->Html->image($card['Card']['card']); ?>
      <? $k++; ?>
      <? if( $k % 9  == 0 ): ?>
        <br>
      <? endif; ?>      
  <? endforeach; ?>
  <? if( $k == 0 ): ?>
    <p> No pending trades at this time </p>
  <? endif; ?>
  </center>

</div>
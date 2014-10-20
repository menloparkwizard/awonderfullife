<?php $this->set('title_for_layout', 'Home'); ?>
<div>
    <div>
      <center>
        <?php echo $this->Html->image('set1-lvl1.png'); ?>
        <br><br>
        <?php echo $this->Html->link($this->Html->image('awl-4.png'), 'http://www.awonderfullife.tea-partie.net/', array('escape' => false)); ?>
        <br><br>
        <p> If you join, please list Primrose as your referrer.</p>
        </center>
    </div>
    <div>
        <center>
            <table class="table-condensed">
              <tbody>
                <tr>
                  <td class="text-right">Card Count:</td>
                  <td class="text-left"> X </td>
                </tr>
                <tr>
                  <td class="text-right">Card Worth:</td>
                  <td class="text-left"> Y </td>
                </tr>
                <tr>
                  <td class="text-right">Decks Mastered:</td>
                  <td class="text-left"> Z </td>
                </tr>
              </tbody>
            </table>
        </center>
    </div>    
    <br>
    <div>
      <center>
          <table class="table-condensed">
            <tbody>
              <tr>
                  <td class="text-center"><?php echo $this->Html->image('coin.png', array('alt' => 'Coin')); ?></td>
                  <td class="text-center"><?php echo $this->Html->image('old_coin.png', array('alt' => 'Old Coin')); ?></td>
                  <td class="text-center"><?php echo $this->Html->image('shiny_coin.png', array('alt' => 'Shiny Coin')); ?></td>
              </tr>
              <tr>
                <td><small><!-- Coins -->x32</small></td>
                <td><small><!-- Old Coins -->x50</small></td>
                <td><small><!-- Shiny Coins -->x13</small></td>
              </tr>
            </tbody>
          </table>
      </center>
    </div>
    <div>
      <center>
          <table class="table-condensed">
            <tbody>
              <tr>
                  <td class="text-center"><?php echo $this->Html->image('coupon-regular.png', array('alt' => 'regular coupon')); ?></td>
                  <td class="text-center"><?php echo $this->Html->image('coupon-special.png', array('alt' => 'special coupon')); ?></td>
              </tr>
              <tr>
                <td class="text-center"><small><!-- Regular Coupons -->x0</small></td>
                <td class="text-center"><small><!-- Special Coupons -->x2</small></td>
              </tr>
            </tbody>
          </table>
      </center>
    </div>

</div>

<div class="logs index">
	<h2>Activity Logs</h2>
	<table class="table">
	  <?php foreach($logs as $logIdx => $log): ?>
	  <tr>
	    <td width="15%"><? echo date('d F, Y', strtotime($log['Log']['date'])); ?></td>
		<td><? echo $log['Log']['text']; ?></td>
	  </tr>
	  <?php endforeach;?>
	</table>
</div>

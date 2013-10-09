<h1>Yummie Tester</h1>
Hello <fb:name uid='<?php echo $user; ?>' useyou='false' possessive='true' />! <br>
Your id : <?php echo $user; ?>.<br>

<h2>Event<h2>
<?
$events = $facebook->api_client->events_get(null, null, null, null, null);

//echo "<h3>Return array from Facebook</h3>";
//print_r($events);
?>
<table>
<?
foreach($events as $event){
?>
	<tr>
      <td colspan="2"><?=date("l dS F Y",$event['start_time'])?></td>
    </tr>
	<tr>
      <td><img src="<?=$event['pic_small']?>"></td>
      <td valign="top">
	  	  <?=$event['name']?>
      	<br>
        <?=$event['tagline']?>
      	<br><br>
        Type: <?=$event['event_type']?> - <?=$event['event_subtype']?><br>        
        Where: <?=$event['location']?><br>        
        When: <?=date("dS F Y h:i",$event['start_time'])?> - <?=date("dS F Y h:i",$event['end_time'])?><br>                
      </td>
    </tr>
    <tr>
      <td> </td>
    </tr>
<?	
}
?>
</table>
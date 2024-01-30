<?php
 date_default_timezone_set('Asia/Kathmandu');
echo time();
echo '<br/>';
echo time()+7*24*60*60;
echo '<br/>';
echo time()-300*24*60*60;
echo '<br/>';
echo strtotime('now');
echo '<br/>';
echo strtotime('today');
echo '<br/>';
echo strtotime('tomorrow');
echo '<br/>';
echo strtotime('+122 month');
echo '<br/>';
echo date('Y-m-d H:i:s');
echo '<br/>';
echo date_default_timezone_get();
echo '<br/>';
echo date('Y-m-d H:i:s',strtotime('-198 days'));
echo '<br/>';
//get difference between two date
//calculate age
?>
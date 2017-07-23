<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Слова</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<script type="text/javascript">

		
	</script>
</head>
<body style="background:#000; color:#fff;">
<?php 
$includes = @scandir($_SERVER['DOCUMENT_ROOT']);
unset($includes[0]);unset($includes[1]);unset($includes[2]);

if(!empty($includes)){
    foreach($includes as $include){
        @require_once $_SERVER['DOCUMENT_ROOT'].'/'.$include;
}}

function shuffle_assoc(array &$in) {
	$result = array();
	while ($key = array_rand($in)) {
		$result[$key] = $in[$key];
		unset($in[$key]);
	}
	$in = $result;
}
shuffle_assoc($array);
echo '<table cellspacing="2" border="1">';
foreach($array as $key=>$val){
$rn=mt_rand(0,1);
if($ch==0){$rn=0;}
if($ch==2){$rn=1;}

if($rn==0){
echo '<tr><td>'.$key.'</td>';
echo '<td width="50px">&nbsp;</td>';
echo '<td>'.$val.'</td></tr>';}
else{
echo '<tr><td>'.$val.'</td>';
echo '<td width="50px">&nbsp;</td>';
echo '<td>'.$key.'</td></tr>';
}

}
?>
</table>
<?php 
$teck=time();
$new=mktime(23, 59, 59, 9, 22, 2017);

$seconds=$new-$teck;
$left=((($seconds/60)/60)/24)/30.5;
$get=sprintf("%0.2f", $left);

echo "<p style='color:#FFD000'>До восхищения: Осталось дней ".round((($seconds/60)/60)/24)." Осталось месяцев ".$get."</p>";
?>
</body>
</html>
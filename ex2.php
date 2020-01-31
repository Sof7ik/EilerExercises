<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
</head>
<body>
<?php
//$i=4000000;
$arr[0]=0;
$arr[1]=1;
for ($i=2;$i<=68;$i++)
{
	$arr[$i]=$arr[$i-1]+$arr[$i-2];
	if ($arr[$i]%2==0)
	{
		echo $arr[$i].' - Четное'.'<br>';
		$summ+=$arr[$i];
	}
}
echo $summ;
//print_r ($arr);
//var_dump ($i);
?>
</body>
</html>
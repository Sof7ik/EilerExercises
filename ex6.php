<?
for ($a=1;$a<=100; $a++)
	{
		$c1+=pow($a,2);
		$c2+=$a;
	}	
$c2=pow($c2,2);	

$r=$c2-$c1;

echo $r;
?>
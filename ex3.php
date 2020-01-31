<!Doctype html>
<html>
<head>
<meta charset="utf-8">
</head>
<body>
<?php
$b=1285;
for ($i=1285-1;$i>=1;$i--)
{	
	if ($b%$i==0)
	{		
		echo $i.'<br>';
		break;
	}
}

?>
</body>
</html>
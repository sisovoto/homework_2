
<html>
	<head>
	<style type="text/css">
p.red
{
color:red;font-size:30;
}

</style>
<?php
function find_3_prime()
{
global $arr;
$count=0;
foreach ($arr as $value)
{
if (is_prime($value)) $count++;
if ($count==3) {
		echo '<p class="red">The third prime number in our array is ',$value,' .</p>';
var_dump($arr);
		break;
		}

}


}

function is_prime($a)
{
$b=sqrt($a);
for($i=2;$i<=$b;$i++)
{if ($a%$i==0) return False;}
return True;
}

function  check_exists($x)
{
global $arr;
if(in_array($x,$arr))
	echo 'The number ',$x,' exists in the array <br/>';
else    
	echo 'The number ',$x,' does not exist in the array <br/>';

}

?>

		
	</head>
<body>
<?php 
$arr=range(20,1000,37);
find_3_prime();
check_exists(146);
check_exists(284);
check_exists(871);
 ?>
	

</body>
</html> 
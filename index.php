<?php
$date =  date('Y-m-d', time());
echo "The value of \$date: ".$date."<br>";

$tar = "2017/05/24";
echo "The value of \$tar: ".$tar."<br>";

$year = array("2012", "396", "300","2000", "1100", "1089");
echo "The value of \$year: ";
print_r($year);

echo "<br><br>";

//2
$date = str_replace("-","/",$date);
echo $date;

echo "<br><br>";

//3
if(strcmp($date, $tar) > 0)
{
	echo "The Past <br>";
}
elseif(strcmp($date, $tar) < 0)
{
	echo "The Future <br>";
}
elseif (strcmp($date, $tar) == 0)
{
	echo "Oops <br>";
}


//4
$count = 0;
$total = 0;
$positions = array();
for($i = 0; $i<strlen($date); $i++)
{
     $pos = strpos($date, '/', $count);
     if($pos == $count){
           $positions[] = $pos;
           $total++;
     }
     $count++;
}
foreach ($positions as $value) {
    echo '<br/>' .  $value . "<br />";
}


if($total > 1)
{
	$newdate = str_replace("/"," ",$date);
}

echo $newdate . "<br>";

//5
$splitup = explode('/', $date);
$numwords = count($splitup);
echo $numwords . "<br>";


//6
$string1 = "totallengthofthis19";
echo strlen($string1) . "<br>";
echo "<br>";


//7

echo "Ascii value of first character of string1 is " . ord(substr($string1, 0, 1));
echo "<br>";

//8

echo substr($date, -2, 2);
echo "<br>";

//9
$datearray =  explode('/', $date);
foreach ($datearray as $value) {
    echo '<br/>' .  $value . "<br />";
}

//10


$leapyears = "";

foreach ($year as $value) 
{
    $x = 0;
    $cond = 0;
	while($x<=3)
	{
	
		switch ($x) {
		    case 0:
		    	if(($value % 4) === 0)
		    	{
		    		$cond++;
		    	}
		       break;
		    case 1:
		    	if(($value % 100) === 0)
		    	{
		    		$x++;
		    	}
		    	else
		    	{
		    		$cond++;
		    	}
		       break;
		    case 2:
		    		$x++;
		    		$cond++;
		    	
		       break;
		    case 3:
		    	if(($value % 400) === 0)
		    	{
		    		$cond++;
		    		$cond++;

		    	}
		       break;

		    default:
		        echo "";
		}
		$x++;


	}

	if($cond == 3)
	{
		$leapyears = $leapyears . " " . $value;
	}


}

echo $leapyears . "<br>";


?>



10.Loop through the array $year and you need to identify whether each year is a leap year. If it is, print out “True”, otherwise, print out “False”. (36%) A. You need to use two methods to loop through the array, which means you need to use two different statement structures to ﬁnish this job. The ﬁrst one must be foreach and the second one could be for or while or do…while. B. You need to use switch statement to identify whether a year is a leap year. C. You need to delimit each result with space in one line. 
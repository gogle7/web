<html>
<head><title>Leap year</title>
<body>

<form action=" "  method="post">
Enter the year:
<input type="text" name="year">
<input type="submit" value="Submit">
</form>

</body>
</html>

<?php
	if($_POST)
{
		$year=$_POST['year'];
	if(!is_numeric($year))
	{
		echo "String are not allowed,Please enter a year.";
		return;
	}
		if(($year%4==0)and($year%100!=0))
		{
			echo "$year is a leap year";
		}
			else if($year%400==0)
			{
               echo "$year is a leap year";
			   }
			else
			{
				echo "$year is not a leap year";
			}
}
?>			
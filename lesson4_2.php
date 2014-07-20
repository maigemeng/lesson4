<html>
<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</head>
<body>
<?php
echo  "<table class='table table-bordered'>";
for($i=0 ; $i<=5 ;$i++)
{
	echo  "<tr>";
	for($j=0;$j<=5;$j++)
		{
			echo  "<td>".rand();
			echo "</td>";
		}
	echo "</tr>";
}
echo "</table>";

?>
	<br>
	<br>
    <input class="btn btn-warning" type="submit" value="Submit">
    
    
<?php
echo  "<table class='table table-bordered'>";
for($i=0 ; $i<=5 ;$i++)
{
	echo  "<tr>";
	for($j=0;$j<=5;$j++)
		{
			echo  "<td>".rand();
			echo "</td>";
		}
	echo "</tr>";
}
echo "</table>";

?>

</body>
</html>
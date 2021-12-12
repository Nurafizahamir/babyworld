<?php
$prodid =$_GET['prodID'];

$dbc = mysqli_connect("localhost","root","","babyshop");
if(mysqli_connect_errno())
{
	echo "Failed to connect to MySQL:".mysqli_connect_error();
}

$sql = "delete from product where prodID='".$prodid."'";
$queryupprod = mysqli_query($dbc,$sql) or die(mysqli_error($dbc));

if ($queryupprod)
{
		mysqli_commit($dbc);
		//print'<script>alert("Record Had Been Added");</script>';
		//echo $location;
		echo"<script type='text/javascript'>
	 	 alert('Record Had Been Deleted')
		 location.href='View.php'
		 </script>";
		
}
else
{
		mysqli_rollback($dbc);
		print'<script>alert("Data Is Invalid, No Record Been Deleted");</script>';
}

?>
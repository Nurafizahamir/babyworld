<?php
$prodid =$_POST['id'];
$prodname = $_POST['name'];
$prodsize =$_POST['size'];
$prodqty = $_POST['qty'];
$proddesc = $_POST['desc'];
$prodprice = $_POST['price'];

$dbc = mysqli_connect("localhost","root","","babyshop");
if(mysqli_connect_errno())
{
	echo "Failed to connect to MySQL:".mysqli_connect_error();
}

$sql = "insert into product (prodID, prodName, prodSize, prodQty, prodDesc, prodPrice) values ('$prodid','$prodname','$prodsize','$prodqty','$proddesc','$prodprice')";
$queryupprod = mysqli_query($dbc,$sql) or die(mysqli_error($dbc));

if ($queryupprod)
{
		mysqli_commit($dbc);
		//print'<script>alert("Record Had Been Added");</script>';
		//echo $location;
		echo"<script type='text/javascript'>
	 	 alert('Record Had Been Inserted')
		 location.href='View.php'
		 </script>";
		
}
else
{
		mysqli_rollback($dbc);
		print'<script>alert("Data Is Invalid, No Record Been Inserted");</script>';
}

?>
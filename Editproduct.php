<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<title>Edit Product</title>
</head>
<body>
	<style>
.center {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 140px; 
  border: 1px;
}
</style>
<?php
$dbc = mysqli_connect("localhost","root","","babyshop");
 if(mysqli_connect_errno())
 {
    echo"Failed to connect to MySQL:".mysqli_connect_error();
 }

$sqlprod = "SELECT * from product WHERE prodID='".$_GET['prodID']."'" ;
$queryprod = mysqli_query($dbc,$sqlprod) or die(mysqli_error($dbc));
$result = mysqli_fetch_assoc($queryprod);
?>
<h1><center>Mom's Baby World<center></h1>
<form action="updateStock.php?id=<?php echo $result['prodID'];?>" method="post">
<div style="background-color:#95afc0">
	<div class="container">
		<div class="row">
			<div class="col-md-8 pt-2 pb-2" >
				<a class="pl-3" style="color:black" href="view.php">View Product</a>
				<a class="pl-3 " style="color:black" href="AddProduct.php">Add Product</a>
				<a class="pl-3" style="color:black" href="ChooseItemEditproduct.php">Edit Product</a>
				<a class="pl-3" style="color:black" href="deleteproduct.php">Delete Product</a>
			</div>

			<div class="col-md-4 pt-2 pb-2" style="float:right; padding-left: 140px;" >
				<a href="logout.php" style="color:white"><button type="button" button class="btn btn-default btn-sm"><span class="glyphicon glyphicon-log-out"></span>Log Out</button></a>    
			</div>


		</div>
	</div>
</div>

<div class="container"><br><br>
<div class="card">
	  <div class="card-header"style="background-color:#ffffff">
		Edit Product 
	  </div>
	  <div class="card-body"style="background-color:#dfe4ea">
		<blockquote class="blockquote mb-0">
			<div class="form-row">
				<div class="form-group col-md-6">
					<label for="id" style="color:black;font-size:16px;"><b>Product ID:</b></label>
					<input type="text" class="form-control" name="id" id="id" required autocomplete="off" value="<?php echo $result['prodID'];?>" >
				</div>
				<div class="form-group col-md-6">
					<label for="name" style="color:black;font-size:16px;"><b>Product Name:</b></label>
					<input type="text" class="form-control" name="name" id="name" required autocomplete="off" value="<?php echo $result['prodName'];?>">
				</div>	
			</div>
			
			<div class="form-row">
				<div class="form-group col-md-6">
					<label for="size" style="color:black;font-size:16px;"><b>Size:</b></label>
					<select class="form-control " name="size" id="size" >
						<option value="" >Choose </option>
						<option value="2-5" >2-5 years </option>
						<option value="0-6" >0-6 months </option>
					</select>
				</div>
				<div class="form-group col-md-6">
					<label for="qty" style="color:black;font-size:16px;"><b>Quantity:</b></label>
					<input type="text" class="form-control" name="qty" id="qty" required autocomplete="off" value="<?php echo $result['prodQty'];?>">
				</div>	
			</div>
			
			<div class="form-row">
				<div class="form-group col-md-6">
					<label for="desc" style="color:black;font-size:16px;"><b>Description:</b></label>
					<textarea class="form-control" name="desc" id="desc" rows="4" cols="50" required autocomplete="off" value="<?php echo $result['prodDesc'];?>"></textarea>
				</div>

				<div class="form-group col-md-6">
					<label for="price" style="color:black;font-size:16px;"><b> Price:</b></label>
					<input type="text" class="form-control" name="price" id="price" required autocomplete="off" value="<?php echo $result['prodPrice'];?>">
				</div>		
				</div>
				</div>	
			</div>
		</blockquote>
		<div class="center">
					<a type="submit" style="color:white"><button class="btn-1"><h7>Save</h7></button></a></div>
	</div>
</div>
</div>
	
  
   
</form>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script
</body>
</html>

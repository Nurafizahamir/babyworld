<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<title>Choose Item Edit Product</title>
</head>
<body>

<h1><center>Mom's Baby World<center></h1>
<form action="Editproduct.php" method="post">
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
				
<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">Product ID</th>
      <th scope="col">Product Name</th>
      <th scope="col">Size</th>
      <th scope="col">Quantity</th>
      <th scope="col">Description</th>
      <th scope="col">Price</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <?php
             
		  $dbc = mysqli_connect("localhost","root","","babyshop");
		  if(mysqli_connect_errno())
		  {
			echo "Failed to connect to MySQL:".mysqli_connect_error();
		  }
		  $sql ="select* from product";
		  
		  $query = mysqli_query($dbc,$sql);
		  //$result = mysqli_fetch_array($query);
		  
		  while($row = mysqli_fetch_array($query)){
			  Print'<tr>
				<td><font color="Black" >'.$row['prodID'].'</font></td>
                <td><font color="Black" >'.$row['prodName'].'</font></td>
                <td><font color="Black" >'.$row['prodSize'].'</font></td>
				<td><font color="Black" >'.$row['prodQty'].'</font></td>
				<td><font color="Black" >'.$row['prodDesc'].'</font></td>
				<td><font color="Black" >'.$row['prodPrice'].'</font></td>
				<td><a href="Editproduct.php?prodID='.$row['prodID'].'" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">EDIT</a></td>
				</tr>';
		  }
		  ?>

    </tr>
  </tbody>
</table>
			</div>
		</blockquote>
	</div>
</div>
</div>
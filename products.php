<?php

$connect = mysqli_connect("localhost", "root", "", "smartfarms");
$output = '';
if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($connect, $_POST["query"]);
	$query = "
	SELECT * FROM products
	WHERE Productname LIKE '%".$search."%'
	OR Cost LIKE '%".$search."%'
	OR Availabilty LIKE '%".$search."%';";
	
}
else
{
	$query = "SELECT * FROM products ORDER BY ID;";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
	$output .= '
	<div class="table-responsive">
	<table class="table table-hover">
	<thead class="thead-dark">
		<tr>
			<th scope="col">ID</th>
			<th scope="col">Product Name</th>
			<th scope="col">Cost</th>
			<th scope="col">Avaibility</th>
			
		</tr>
	</thead>
	<tbody>';
	while($row = mysqli_fetch_array($result))
	{
		$output .= '
		<tr>
			<th scope="row">'.$row["ID"].'</th>
			<td>'.$row["Productname"].'</td>
			<td>'.$row["Cost"].'</td>
			<td>'.$row["Availabilty"].'</td>
			
		</tr>';
	}
	$output .= '</tbody></table>';
	echo $output;
}
else
{
	echo 'No such data found';
}

?>

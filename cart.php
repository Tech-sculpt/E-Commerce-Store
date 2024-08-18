<?php print_r($_SESSION['cart']); 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
</head>
<body>
    
<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center border rounded bg-light my-5">
            <h1>MY CART</h1>
        </div>
        <div class="col-lg-8"></div>
    </div>
</div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Seriol Number</th>
      <th scope="col">Item Name</th>
      <th scope="col">Item Price</th>
      <th scope="col">Quantity</th>
    </tr>
  </thead>
  <tbody t>
  echo"
<tr>

<td>1</td>

<td>$value[Item_Name]</td>

<td>$value[Price]</td>

<td><input class='text-center' type='number' value='$value[Quantity] min='1' max='10'></td>

<td><button class='btn btn-se btn-outline-danger">REMOVE
</button></td>
</tr>
";
}
}
?>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
</body>
</html>

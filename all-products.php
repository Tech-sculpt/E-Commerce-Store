<?php
include 'header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Products-Red Store </title>

<link  rel="stylesheet" href="style.css">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous">
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

</head>
<body>


<div class="sorting">
<select>
    <option>Default Sorting</option>
    <option>Short by Price</option>
    <option>Short by popularity</option>
    <option>Short by rating</option>
    <option>Short by sale</option>
</select>


</div>

    <br>
    <br>
    <br>
    <br>
<h2  class="ftitle">All Products</h2>
<br>
<br>
<br>
<div  class="featured">

<div class="fimages">
<div class="fimg1" >
<img src="Images/product-1.jpg" width="225px"  class="img1">

<h4> Red Printed T-Shirt</h4>

    <i class="fa fa-star" ></i>
    <i class="fa fa-star" ></i>
    <i class="fa fa-star" ></i>
    <i class="fa fa-star" ></i>
    <i class="fa fa-star-half-o" ></i>
    <br>
   <span >Red T-Shirt</span>
   <br>
   <span >$50.00</span>
   <form method="$_POST" action="bought_items.php">
   <br>
   <button type="submit" name="Add_To_Cart" class="btn btn-info">
   Add To Cart
   </button>
   <input type="hidden" name="Item_Name" value="Red T-Shirt">
   <input type="hidden" name="Price" value="50$">
</div>
</form>
  

<div class="fimg2" >
    <img src="Images/product-2.jpg" width="225px"  class="img1">
  
    <h4> Black Coloured Shoes</h4>

        <i class="fa fa-star" ></i>
        <i class="fa fa-star" ></i>
        <i class="fa fa-star" ></i>
        <i class="fa fa-star" ></i>
        <i class="fa fa-star-half-o" ></i>
        <br>
   <span >Black Coloured Shoes</span>
   <br>
   <span >$50.00</span>
   <form method="$_POST" action="bought_items.php">
   <br>
   <button type="submit" name="Add_To_Cart" class="btn btn-info">
   Add To Cart
   </button>
   <input type="hidden" name="Item_Name" value="Black Coloured Shoes">
   <input type="hidden" name="Price" value="50$">
    </div>
</form>


    <div class="fimg3" >
        <img src="Images/product-3.jpg" width="225px"  class="img1">
       
        <h4> Silver Coloured Shoes</h4>
       
            <i class="fa fa-star" ></i>
            <i class="fa fa-star" ></i>
            <i class="fa fa-star" ></i>
            <i class="fa fa-star" ></i>
            <i class="fa fa-star-half-o" ></i>
            <br>
   <span >Silver Coloured Shoes</span>
   <br>
   <span >$50.00</span>
   <form method="$_POST" action="bought_items.php">
   <br>
   <button type="submit" name="Add_To_Cart" class="btn btn-info">
   Add To Cart
   </button>
   <input type="hidden" name="Item_Name" value="Silver Coloured Shoes">
   <input type="hidden" name="Price" value="50$">
        </div>  
</form>



<div class="fimg4" >
<img src="Images/product-4.jpg" width="225px"  class="img1">

<h4> Blue Printed T-Shirt</h4>

    <i class="fa fa-star" ></i>
    <i class="fa fa-star" ></i>
    <i class="fa fa-star" ></i>
    <i class="fa fa-star" ></i>
    <i class="fa fa-star-half-o" ></i>
    <br>
   <span >Blue Coloured T-Shirt</span>
   <br>
   <span >$50.00</span>
   <form method="$_POST" action="bought_items.php">
   <br>
   <button type="submit" name="Add_To_Cart" class="btn btn-info">
   Add To Cart
   </button>
   <input type="hidden" name="Item_Name" value="Blue T-Shirt Shoes">
   <input type="hidden" name="Price" value="50$">
</div>
</form>

</div>
</div>


<h2  class="ftitle">Latest Products</h2>
<br>
<br>
<br>
<div  class="featured">

    <div class="fimages">
    <div class="fimg1" >
    <img src="Images/product-5.jpg" width="225px"  class="img1">
    
    <h4> White Coloured Shoes</h4>
    
        <i class="fa fa-star" ></i>
        <i class="fa fa-star" ></i>
        <i class="fa fa-star" ></i>
        <i class="fa fa-star" ></i>
        <i class="fa fa-star-half-o" ></i>
        <br>
   <span >White Coloured Shoes</span>
   <br>
   <span >$50.00</span>
   <form method="$_POST" action="bought_items.php">
   <br>
   <button type="submit" name="Add_To_Cart" class="btn btn-info">
   Add To Cart
   </button>
   <input type="hidden" name="Item_Name" value="White Coloured Shoes">
   <input type="hidden" name="Price" value="50$">
    </div>
    </form>
      
    
    <div class="fimg2" >
        <img src="Images/product-6.jpg" width="225px"  class="img1">
      
        <h4> Black Printed T-Shirt</h4>
    
            <i class="fa fa-star" ></i>
            <i class="fa fa-star" ></i>
            <i class="fa fa-star" ></i>
            <i class="fa fa-star" ></i>
            <i class="fa fa-star-half-o" ></i>
            <br>
   <span >Black Printed T-Shirt</span>
   <br>
   <span >$50.00</span>
   <form method="$_POST" action="bought_items.php">
   <br>
   <button type="submit" name="Add_To_Cart" class="btn btn-info">
   Add To Cart
   </button>
   <input type="hidden" name="Item_Name" value="Black Printed T-Shirt">
   <input type="hidden" name="Price" value="50$">
        </div>
    </form>
    
    
    
    
        <div class="fimg3" >
            <img src="Images/product-7.jpg" width="225px"  class="img1">
           
            <h4> All Coloured Socks</h4>
           
                <i class="fa fa-star" ></i>
                <i class="fa fa-star" ></i>
                <i class="fa fa-star" ></i>
                <i class="fa fa-star" ></i>
                <i class="fa fa-star-half-o" ></i>
                <br>
   <span >All Coloured Socks</span>
   <br>
   <span >$50.00</span>
    <form method="$_POST" action="bought_items.php">    
   <br>
   <button type="submit" name="Add_To_Cart" class="btn btn-info">
   Add To Cart
   </button>
   <input type="hidden" name="Item_Name" value="All Coloured Socks">
   <input type="hidden" name="Price" value="50$">
            </div>  
    </form>
    
    
    
    <div class="fimg4" >
    <img src="Images/product-8.jpg" width="225px"  class="img1">
    
    <h4> Black Coloured Watch</h4>
    
        <i class="fa fa-star" ></i>
        <i class="fa fa-star" ></i>
        <i class="fa fa-star" ></i>
        <i class="fa fa-star" ></i>
        <i class="fa fa-star-half-o" ></i>
        <br>
   <span >Black Coloured Watch</span>
   <br>
   <span >$50.00</span>
   <form method="$_POST" action="bought_items.php">
   <br>
   <button type="submit" name="Add_To_Cart" class="btn btn-info">
   Add To Cart
   </button>
   <input type="hidden" name="Item_Name" value="Black Coloured Watch">
   <input type="hidden" name="Price" value="50$">
    </div>
    </form>

    
    </div>
    </div>
    

    <div  class="featured">

        <div class="fimages">
        <div class="fimg1" >
        <img src="Images/product-9.jpg" width="225px"  class="img1">
        
        <h4> Black Watch</h4>
        
            <i class="fa fa-star" ></i>
            <i class="fa fa-star" ></i>
            <i class="fa fa-star" ></i>
            <i class="fa fa-star" ></i>
            <i class="fa fa-star-half-o" ></i>
            <br>
   <span >Black Watch</span>
   <br>
   <span >$50.00</span>
   <form method="$_POST" action="bought_items.php">
   <br>
   <button type="submit" name="Add_To_Cart" class="btn btn-info">
   Add To Cart
   </button>
   <input type="hidden" name="Item_Name" value="Black Watch">
   <input type="hidden" name="Price" value="50$">
        </div>
        </form>
          
        
        <div class="fimg2" >
            <img src="Images/product-10.jpg" width="225px"  class="img1">
          
            <h4>Black & Red Shoes</h4>
        
                <i class="fa fa-star" ></i>
                <i class="fa fa-star" ></i>
                <i class="fa fa-star" ></i>
                <i class="fa fa-star" ></i>
                <i class="fa fa-star-half-o" ></i>
                <br>
   <span >Black & Red Shoes</span>
   <br>
   <span >$50.00</span>
   <form method="$_POST" action="bought_items.php">
   <br>
   <button type="submit" name="Add_To_Cart" class="btn btn-info">
   Add To Cart
   </button>
   <input type="hidden" name="Item_Name" value="Black & Red Shoes">
   <input type="hidden" name="Price" value="50$">
            </div>
        </form>
        
        
        
        
            <div class="fimg3" >
                <img src="Images/product-11.jpg" width="225px"  class="img1">
               
                <h4> Silver Shoes</h4>
               
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star-half-o" ></i>
                    <br>
   <span >Silver Shoes</span>
   <br>
   <span >$50.00</span>
   <form method="$_POST" action="bought_items.php">
   <br>
   <button type="submit" name="Add_To_Cart" class="btn btn-info">
   Add To Cart
   </button>
   <input type="hidden" name="Item_Name" value="Silver Shoes">
   <input type="hidden" name="Price" value="50$">
                </div>  
        
        </form>
        
        
        <div class="fimg4" >
        <img src="Images/product-12.jpg" width="225px"  class="img1">
        
        <h4>White Shoes</h4>
        
            <i class="fa fa-star" ></i>
            <i class="fa fa-star" ></i>
            <i class="fa fa-star" ></i>
            <i class="fa fa-star" ></i>
            <i class="fa fa-star-half-o" ></i>
            <br>
   <span >White Shoes</span>
   <br>
   <span >$50.00</span>
   <form method="$_POST" action="bought_items.php">
   <br>
   <button type="submit" name="Add_To_Cart" class="btn btn-info">
   Add To Cart
   </button>
   <input type="hidden" name="Item_Name" value="White Shoes">
   <input type="hidden" name="Price" value="50$">
        </div>
        </form>
        </div>
        </div>


</body>
</html>
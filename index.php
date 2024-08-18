<?php
include 'header.php';
 session_start();
 if (!isset($_SESSION['logged-in']) || $_SESSION['logged-in'] != true) {

     header("location: http://localhost/E%20commerce%20Site/account.php");
     exit;
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Red Store E-commerce</title>

<link  rel="stylesheet" href="style.css">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet"><link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous">
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

</head>
<body>

<div class="header">
        <h1 class="welcome-message" style="color: #c13b19; padding: 5vw; font-size: 4vw ">Welcome, <?php echo $_SESSION['User-Name']; ?>!</h1>
    </div>
    
    <div class="section1" >
    <div  class="left">

        <h2 class="give"> Give Your Workout</h2>
        <br>
        <h2 class="new">A New Style!</h2>
        <p >Success isn't always about greatness. Its about Consisteny. Consistency hardwork <br>
          gains success. Greatness will come.</p>
        
       <a class="learn"   href="all-products.php" >Explore now &#8594</a>
        

        </div>
        
        <div class="right">
        
        
        <img src="Images/image1.png" width="450px" class="mainimg" >
        
        
        </div>
    </div>
      
 
<div class="rated">


<div class="rimg1">
    <img src="Images/category-1.jpg"  width="300px">



</div>

<div class="rimg2">
    <img src="Images/category-2.jpg"  width="300px">

</div>


<div class="rimg3">
    <img src="Images/category-3.jpg"  width="300px">



</div>

</div>


<h2  class="ftitle">Featured Products</h2>
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

        
    


        <div class="offer">
        <div class="col1">
          <img src="Images/exclusive.png" width="450px">  

        </div>



<div class="col2">
            <span style="font-size: 20px;"> Exclusively available on Red Store</span>
            <br>
            <br>
            <br>
            <h1 style="font-size: 50px;"> Smart Band 4 </h1>
            <br>
            <br>
            <br>
            <span style="font-size: 15px;"> The Mi Smart Band 4 features a 39.9%  larger (than Mi Band 3) AMOLED color</span>
            <span> full-touch display with adjustable brightness, so everything is clear as can be </span>
            <br>
            <br>
            <form action="bought_items.php">
            <br>
   <button type="submit" name="Add_To_Cart" class="btn btn-info">
   <a href="#" class="learn" style="position:relative; top:0%">Buy Now &#8594 </a>
   </button>
   <input type="hidden" name="Item_Name" value="Black Coloured Shoes">
   <input type="hidden" name="Price" value="50$">
            </form>
</div>

        </div>




        <h2  class="ftitle">Testimonials</h2>
        <br>
        <br>
        <br>
<div class="testimonial">
    <div class="tes1">

        <i class="fa fa-quote-left" aria-hidden="true" style="color: black; font-size: 40px;"> </i>
        <br>
        <br>
        <span>I had an amazing experience shopping on<br>
             this ecommerce website. The website was<br>
            easy to navigate, the product selection<br>
             was impressive</span>
        <i class="fa fa-star" ></i>
            <i class="fa fa-star" ></i>
            <i class="fa fa-star" ></i>
            <i class="fa fa-star" ></i>
            <i class="fa fa-star-half-o" ></i>
            <br>
            <br>
            <img src="Images/user-1.png" width="60px"  class="tesimg1" style="border-radius: 50%;  ">
            <h3>Sean Parker</h3>

    </div>


    <div class="tes2">

        <i class="fa fa-quote-left" aria-hidden="true" style="color: black;  font-size: 40px;"> </i>
        <br>
        <br>
        <span>I had an amazing experience shopping on<br>
             this ecommerce website. The website was<br>
            easy to navigate, the product selection<br>
             was impressive</span>
        <i class="fa fa-star" ></i>
            <i class="fa fa-star" ></i>
            <i class="fa fa-star" ></i>
            <i class="fa fa-star" ></i>
            <i class="fa fa-star-half-o" ></i>
            <br>
            <br>
            <img src="Images/user-2.png" width="60px"  class="tesimg2" style="border-radius: 50%;">
            <h3>Mike Smith</h3>

    </div>



    <div class="tes3">

        <i class="fa fa-quote-left" aria-hidden="true" style="color: black;  font-size: 40px;" > </i>
        <br>
        <br>
        <span>I had an amazing experience shopping on<br>
             this ecommerce website. The website was<br>
            easy to navigate, the product selection<br>
             was impressive</span>
        <i class="fa fa-star" ></i>
            <i class="fa fa-star" ></i>
            <i class="fa fa-star" ></i>
            <i class="fa fa-star" ></i>
            <i class="fa fa-star-half-o" ></i>
            <br>
            <br>
            <img src="Images/user-3.png" width="60px" class="tesimg3" style="border-radius: 50%; transition:transform 0.5s; ">
            <h3 >Sarah Khan</h3>
    </div>


</div>

<div class="brands">
    <div class="godrej">
        <img src="Images/logo-godrej.png">
    </div>
    <div class="coke">
        <img src="Images/logo-coca-cola.png">
    </div>
    <div class="oppo">
        <img src="Images/logo-oppo.png">
    </div>    
   <div class="paypal">
    <img src="Images/logo-paypal.png">
   </div>
  <div class="phillips">
    <img src="Images/logo-philips.png">
  </div>
  <div class="white">
    <img src="Images/logo-white.png">
  </div>
    </div>
      
<div class="footer">
<br>
<br>
    <div class="f1">
        <br>
        <br>
<h4 style="color:white;">Download Our App</h4>
<br>

<span> Download app for android and ios mobile phones</span>
<br>
<br>
<img src="Images/play-store.png" width="120px">
<img src="Images/app-store.png" width="120px">
</div>



<div class="f2">
    <br>
    <br>
<img src="Images/logo.png" width="150px">
<br>
<br>
<span>One purpose to sustainably make the pleasure<br>
       and benefits of sports accessible to many    </span>
    
</div>

<div class="f3">
    <br>
    <br>
<h4 style="color: white;"> Useful Links</h4>
<ul style="list-style-type: none;  color: #555;">
    <li>Cuopons</li>
    <li>Blog Post</li>
    <li>Return Policy</li>
    <li>Join Affiliate</li>
</ul>

</div>
<div class="f4">
    <br>
    <br>
    <h4 style="color: white;"> Follow Us</h4>
    <ul style="list-style-type: none; color: #555;">
        <li>Facebool</li>
        <li>Twitter</li>
        <li>Instagram</li>
        <li>Youtube</li>
    </ul>

    
</div>

</body>
</html>

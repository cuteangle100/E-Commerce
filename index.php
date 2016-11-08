<!DOCTYPE html>
<html>
<head>
	<title> Home </title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

<div id="main">   <!--main div -->
  <div style=" margin: 0; padding: 0; height: 20px; ">
      <h3 align="center"> <i> <b> Wiki Garments </b> </i> </h3>
  </div>
   <div id="cart">
   	 <div id="links"> 
        <a href=""> <img src="images/login.jpg" width="80px" height="40px"> </a>
        <a href=""> <img src="images/cart.jpg" width="60px" height="40px">(0) </a>
        <div class="searchBox">
        <div class="searchForm">
            <input id="searchField" type="text" placeholder="search here"/>    
            <div class="close">
                <span class="front"></span>
                <span class="back"></span>
            </div>   
        </div>
        </div>
   	 </div> 
   </div>
	
 <!--header -->
		
    <div id="captioned-gallery">
			<figure class="slider">
				<figure>
					<img src="images/pic.jpg" alt="image not found">
					<figcaption> You get shirt just order us </figcaption>
				</figure>
				<figure>
					<img src="images/pic1.jpg" alt="image not found">
					<figcaption> Shirts in multi colors </figcaption>
				</figure>
				<figure>
					<img src="images/pic2.jpg" alt="image not found">
					<figcaption>just click on buy button and send us your informations </figcaption>
				</figure>
				<figure>
					<img src="images/pic3.jpg" alt="image not found">
					<figcaption> If you order for 5 shirt you get one shirt free </figcaption>
				</figure>
				<figure>
					<img src="images/pic4.jpg" alt="image not found">
					<figcaption>Write a opinion or comment on your visited hotel</figcaption>
				</figure>
			</figure>
	</div>

	<div> <!--nav bar -->
		
		<nav>
			<ul class="sidenav">
				<li> <a href="" class="active"> Home </a>  </li>
				<li> <a href=""> Contact </a>  </li>
				<li> <a href=""> About </a>  </li>
			</ul>
		</nav>

	</div>

	<div id="section"> <!--section -->

     <div id="menu">
     	<h3 align="center"> Menu </h3>
     	    <ul>
				<li> <a href="" class="active"> Home </a>  </li>
				<li> <a href=""> Contact </a>  </li>
				<li> <a href=""> About </a>  </li>
			</ul>
     </div>
     <div id="content">
       
        <h3 align="center">  All Products </h3>
        <hr>
         
         <?php
              
              mysql_connect('localhost' , 'root' , '') or die("Error 404 Page not found ");
              mysql_select_db('tshirt') or die("Error 404 Page not found ");

              $products = mysql_query("SELECT * FROM product");

              while ( $product = mysql_fetch_assoc($products)) {

                $product_id = $product['pro_id'];

               ?>
                  
             <!-- products -->
             <div class="products">  
                <h4 align="center"> <?php echo $product['pro_size']." Size"; ?> </h4>
                <hr>

                <?php

                     $images = mysql_query("SELECT * FROM image WHERE pro_id = $product_id");
                     $images = mysql_fetch_array($images);

                 ?>

                <img height="200px" width="200px" src="images/<?php echo $images['front_pic']; ?>">
                <hr>
                 
                 <h5 align="center"> Price: =<?php echo $product['pro_price'];  ?>/- </h5>
                 <a href="detail.php?detail=<?php echo $product_id ?>"> <img src="images/detail.jpg"> </a> 
                 <a href=""> <img src="images/buy.gif"></a>

             </div>

        <?php  } ?>

     	  
     
     </div>
		
	</div>

	<div id="footer"> <!--footer -->
		
		<div id="follow">  

          <h3 align="center"> Follow us on  </h3> 
          <hr>
          <p align="center">
	           <a href=""> Facebook |</a>
	           <a href=""> Twitter </a>
	      </p>
		
		</div>
		
		<div id="terms"> 
        
           <h3 align="center"> Terms and Conditions  </h3> 
           <hr>
           <p align="justify">
           	 To protect your website, company, and customers, you need to state your terms of use in clear, simple, and easily-understood language. Our simple terms and conditions template can instantly generate a custom terms of service policy for your business.
           </p>
		
		</div>
		
		<div id="copyright">
		
		   <h5 align="center"> Copyright &copy All rights are reserved </h5>
	    
	    </div>

	</div>
</div>


</body>
</html>
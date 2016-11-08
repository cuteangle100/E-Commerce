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
				<li> <a href="index.php" class="active"> Home </a>  </li>
				<li> <a href=""> Contact </a>  </li>
				<li> <a href=""> About </a>  </li>
			</ul>
		</nav>

	</div>

	<div id="section"> <!--section -->

     <div id="menu">
     	<h3 align="center"> Menu </h3>
     	    <ul>
				<li> <a href="index.php" class="active"> Home </a>  </li>
				<li> <a href=""> Contact </a>  </li>
				<li> <a href=""> About </a>  </li>
			</ul>
     </div>
     <div id="content">
       
        <h3 align="center">  Product Detail </h3>
        <hr>
         
         <!-- products -->
         <div id="gallary">  
            <h3 align="center"> Gallary </h3>
            <hr>
            <?php
              
              $pro_detail = $_GET['detail'];

              mysql_connect('localhost' , 'root' , '') or die("Error 404 Page not found ");
              mysql_select_db('tshirt') or die("Error 404 Page not found ");

              $images = mysql_query("SELECT * FROM image WHERE pro_id = '$pro_detail'");

              $images = mysql_fetch_array($images);

              $product = mysql_query("SELECT * FROM product WHERE pro_id = '$pro_detail'");

              $product = mysql_fetch_array($product);

            ?>
                  
             <img src="images/<?php echo $images['front_pic'] ?>" height="400px" width="400px">  
             
             <hr>
             <p align="center"> 
             <img  class="image_detail" src="images/<?php echo $images['front_pic'] ?>" alt="image not found" height="150px" width="70px">

             
             <img  class="image_detail" src="images/<?php echo $images['left_side_pic'] ?>" alt="image not found" height="150px" width="70px">

             
             <img class="image_detail" src="images/<?php echo $images['right_side_pic'] ?>" alt="image not found" height="150px" width="70px">

             <img  class="image_detail" src="images/<?php echo $images['back_side_pic'] ?>" alt="image not found" height="150px" width="70px">
             </p>
         </div>
         <div id="other_info">
            <h3 align="center"> Other Information </h3>
            <hr>
            <h3> <?php echo $product['pro_size']; ?> size </h3>
            <p align="justify"><?php echo $product['pro_detail'];  ?> </p>
            <h5 align="center"> Price: =<?php echo $product['pro_price'];  ?>/- </h5> 
            <p align="center"> 
               <a href=""> <img src="images/buy.gif" height="50px" width="100px"></a> 
            </p>
         </div>
     	   
     	
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
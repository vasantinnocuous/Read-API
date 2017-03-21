<!DOCTYPE html>
<html>
<head>
	<title>Products</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap.min.css">
   <link rel="stylesheet" href="css/font-awesome-4.6.3/css/font-awesome.min.css">
     <link rel="stylesheet" href="css/products.css">
    
   


</head>
<body>

<?php 
$uri = $_SERVER["REQUEST_URI"];
$uriArray = explode('/', $uri);
$page_url = $uriArray[1];
$page_url2 = $uriArray[2];

//echo $page_url2; exit;

//$str = 'In My Cart : 11 12 items';
$str = preg_replace('/\D/', '', $page_url2);



  //echo "ashkdhask"; exit;
  $host = "localhost";
  $user = "root";
  $pass = "mysql";

  $databaseName = "test";
  $tableName = "products";

  //--------------------------------------------------------------------------
  // 1) Connect to mysql database
  //--------------------------------------------------------------------------
 // include 'DB.php';
  $con = mysqli_connect($host,$user,$pass);
  $dbs = mysqli_select_db($con,$databaseName);

  //--------------------------------------------------------------------------
  // 2) Query database for data
  //--------------------------------------------------------------------------
  //query
//echo "SELECT title,price_max,brand,pid FROM $tableName where pid=".$str.""; exit;
  $result = mysqli_query($con,"SELECT title,price_max,brand,pid,description FROM $tableName where pid=".$str."");        
  //fetch result 
  
  $array = mysqli_fetch_row($result); 
 // print_r($array[0]); exit;
?>

 <div class="container-fluid p0">

        <div class="col-sm-12 col-md-12 col-lg-12">
        <div class="col-sm-2 col-md-2 col-lg-2"></div>
         <div class="col-sm-8 col-md-8 col-lg-8">

          <h2><?php echo $array[0]; ?></h2>
           <div class="col-sm-6 col-md-6 col-lg-6 main_div_single" align="center" >
             <div class="single_img">
               <img src="image/apple.jpg" class="img-responsive">
             </div>

           </div>
           <div class="col-sm-6 col-md-6 col-lg-6 deatails_of_product_and_cost_final_product">
           <div>
         <h3><?php echo $array[0]; ?></h3>
       </div>
       <div class="deatails_of_product_and_cost1_final_product">
         <ul>
           <li>
           <ul class="rating_star_final_product">
            <li><i class="fa fa-star" aria-hidden="true"></i></li>
            <li><i class="fa fa-star" aria-hidden="true"></i></li>
            <li><i class="fa fa-star" aria-hidden="true"></i></li>
            <li><i class="fa fa-star" aria-hidden="true"></i></li>
            <li><i class="fa fa-star" aria-hidden="true"></i></li>
            <li>&nbsp;&nbsp;<b>User&nbsp;:&nbsp;<span>912</span></b></li>
           </ul>
          </li><br>
          <li><b>Rs &nbsp; : &nbsp;<?php echo $array[1]; ?>$</b></li>
          <li><b>Items # &nbsp; : &nbsp; <?php echo $array[3]; ?></b></li>
		  <li><b>Brand # &nbsp; : &nbsp;<?php echo $array[2]; ?></b></li>
         </ul>
       </div>
       <div>
         <ul><label><h5>Key Features</h5></label>
           <li>Feature:<?php echo $array[4]; ?></li>
           <li>SIZE:With TV prices in a freefall, that gorgeous 72-inch TV is now</li>
           <li>PORTS:If you look at the back of a modern TV the number of ports can get overwhelming. HDMI, USB, component, DVI, VGA, Optical, coax and more.</li>
         </ul>
       </div>
       <br>
       <div class="quantity_final_product">
       <label>Quantity</label>
         <input type="text" name="">
       </div>
       <br>
       <div class="col-sm-12 col-md-12 col-lg-12 add_to_cart">
         
           <button type="button" class="btn btn-default request_button_in_single_final_product">Request a quote</button>
         
         
           <button type="button" class="btn btn-default request_button_in_single_final_product" style="color: #FFF;">BUY NOW</button>
         
       </div>
            
           </div>
         </div>


         <div class="col-sm-2 col-md-2 col-lg-2"></div> 
       
      </div>
       

      
        

    
    
</div> <!--main container div ends-->
   
   <script src="js/jquery-2.2.3.js" type="text/javascript"></script>
  <script src="js/bootstrap.min.js" type="text/javascript"></script>

 


 
</body>
</html>
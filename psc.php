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
  $result = mysqli_query($con,"SELECT title,price_max FROM $tableName");        
  //fetch result    
  $array = mysqli_fetch_row($result);                          
//print_r($array[0]); exit;
  //--------------------------------------------------------------------------
  // 3) echo result as json 
  //--------------------------------------------------------------------------
  //echo json_encode($array);
                        

?>
 <div class="container-fluid p0">
      
        <div class="col-sm-12 col-md-12 col-lg-12">

        <div class="search_input" align="center">
           <div class="form-group">
                <div class="input-group input-group-sm">
                   
                    <div class="icon-addon addon-sm">
                        <input type="text" placeholder="Search..." class="form-control">
                        
                    </div>
                    <span class="input-group-btn">
                        <button class="btn btn-default search_button" type="button">Go!</button>
                    </span>
                </div>
            </div>
        </div>
            
        <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3 p0" align="center">
         <div class="sub_products_all"> 
        <a href="<?php echo "desc.php?cid=123"?>"><div class="images_machine">
        <img src="image/apple.jpg" class="img-responsive"> 
        </div></a>
        <a href="<?php echo "desc.php?cid=123"?>"><div class="headig_title p0"><?php echo $array[0]; ?></div></a>
          <div class="p0" style="color: gold;"><i class="fa fa-star fa-lg" aria-hidden="true"></i><i class="fa fa-star fa-lg" aria-hidden="true"></i><i class="fa fa-star fa-lg" aria-hidden="true"></i><i class="fa fa-star fa-lg" aria-hidden="true"></i><i class="fa fa-star fa-lg" aria-hidden="true"></i></div> 

          <div class="rate"><?php echo $array[1];?>$</div>
          <div class="buy">
           <a href="<?php echo "desc.php?cid=123"?>" page.html"> <button>Buy</button></a>
          </div>
          </div>
        </div>


        <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3 p0" align="center">
         <div class="sub_products_all"> 
        <a href="<?php echo "desc.php?cid=123"?>"><div class="images_machine">
        <img src="image/apple2.jpg" class="img-responsive"> 
        </div></a>
        <a href="<?php echo "desc.php?cid=123"?>"><div class="headig_title p0"><?php echo $array[0]; ?></div></a>
          <div class="p0" style="color: gold;"><i class="fa fa-star fa-lg" aria-hidden="true"></i><i class="fa fa-star fa-lg" aria-hidden="true"></i><i class="fa fa-star fa-lg" aria-hidden="true"></i><i class="fa fa-star fa-lg" aria-hidden="true"></i><i class="fa fa-star fa-lg" aria-hidden="true"></i></div> 

          <div class="rate"><?php echo $array[1];?>$</div>
          <div class="buy">
           <a href="<?php echo "desc.php?cid=123"?>" page.html"> <button>Buy</button></a>
          </div>
          </div>
        </div>
             
           <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3 p0" align="center">
         <div class="sub_products_all"> 
        <a href="<?php echo "desc.php?cid=123"?>"><div class="images_machine">
        <img src="image/apple.jpg" class="img-responsive"> 
        </div></a>
        <a href="<?php echo "desc.php?cid=/123"?>"><div class="headig_title p0"><?php echo $array[0]; ?></div></a>
          <div class="p0" style="color: gold;"><i class="fa fa-star fa-lg" aria-hidden="true"></i><i class="fa fa-star fa-lg" aria-hidden="true"></i><i class="fa fa-star fa-lg" aria-hidden="true"></i><i class="fa fa-star fa-lg" aria-hidden="true"></i><i class="fa fa-star fa-lg" aria-hidden="true"></i></div> 

          <div class="rate"><?php echo $array[1];?>$</div>
          <div class="buy">
           <a href="<?php echo "desc.php?cid=123"?>" page.html"> <button>Buy</button></a>
          </div>
          </div>
        </div>


        <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3 p0" align="center">
         <div class="sub_products_all"> 
        <a href="<?php echo "desc.php?cid=123"?>"><div class="images_machine">
        <img src="image/apple2.jpg" class="img-responsive"> 
        </div></a>
        <a href="<?php echo "desc.php?cid=/123"?>"><div class="headig_title p0"><?php echo $array[0]; ?></div></a>
          <div class="p0" style="color: gold;"><i class="fa fa-star fa-lg" aria-hidden="true"></i><i class="fa fa-star fa-lg" aria-hidden="true"></i><i class="fa fa-star fa-lg" aria-hidden="true"></i><i class="fa fa-star fa-lg" aria-hidden="true"></i><i class="fa fa-star fa-lg" aria-hidden="true"></i></div> 

          <div class="rate"><?php echo $array[1];?>$</div>
          <div class="buy">
           <a href="<?php echo "desc.php?cid=123"?>" page.html"> <button>Buy</button></a>
          </div>
          </div>
        </div>
          

            
          
           <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3 p0" align="center">
         <div class="sub_products_all"> 
      <a href="<?php echo "desc.php?cid=123"?>">  <div class="images_machine">
        <img src="image/tv_one.jpg" class="img-responsive"> 
        </div></a>
        <a href="when_u_click_to_sub_category_single_page_open_this page.html"><div class="headig_title p0">Silva Schneider LED-Fernseher 81 cm 32 Zoll 32.60 Bildschirm Screen HD ready</div></a>
          <div class="p0" style="color: gold;"><i class="fa fa-star fa-lg" aria-hidden="true"></i><i class="fa fa-star fa-lg" aria-hidden="true"></i><i class="fa fa-star fa-lg" aria-hidden="true"></i><i class="fa fa-star fa-lg" aria-hidden="true"></i><i class="fa fa-star fa-lg" aria-hidden="true"></i></div> 

          <div class="rate">255.40$</div>
          <div class="buy">
          <a href="when_u_click_to_sub_category_single_page_open_this page.html"> <button>Buy</button></a>
          </div>
          </div>
        </div>
            
              <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3 p0" align="center">
         <div class="sub_products_all"> 
      <a href="<?php echo "desc.php?cid=123"?>">  <div class="images_machine">
        <img src="image/tv_one.jpg" class="img-responsive"> 
        </div></a>
        <a href="when_u_click_to_sub_category_single_page_open_this page.html"><div class="headig_title p0">Silva Schneider LED-Fernseher 81 cm 32 Zoll 32.60 Bildschirm Screen HD ready</div></a>
          <div class="p0" style="color: gold;"><i class="fa fa-star fa-lg" aria-hidden="true"></i><i class="fa fa-star fa-lg" aria-hidden="true"></i><i class="fa fa-star fa-lg" aria-hidden="true"></i><i class="fa fa-star fa-lg" aria-hidden="true"></i><i class="fa fa-star fa-lg" aria-hidden="true"></i></div> 

          <div class="rate">255.40$</div>
          <div class="buy">
         <a href="<?php echo "desc.php?cid=123"?>">   <button>Buy</button></a>
          </div>
          </div>
        </div>

             <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3 p0" align="center">
         <div class="sub_products_all"> 
       <a href="when_u_click_to_sub_category_single_page_open_this page.html"> <div class="images_machine">
        <img src="image/tv_one.jpg" class="img-responsive"> 
        </div></a>
        <a href="when_u_click_to_sub_category_single_page_open_this page.html"><div class="headig_title p0">Silva Schneider LED-Fernseher 81 cm 32 Zoll 32.60 Bildschirm Screen HD ready</div></a>
          <div class="p0" style="color: gold;"><i class="fa fa-star fa-lg" aria-hidden="true"></i><i class="fa fa-star fa-lg" aria-hidden="true"></i><i class="fa fa-star fa-lg" aria-hidden="true"></i><i class="fa fa-star fa-lg" aria-hidden="true"></i><i class="fa fa-star fa-lg" aria-hidden="true"></i></div> 

          <div class="rate">255.40$</div>
          <div class="buy">
          <a href="when_u_click_to_sub_category_single_page_open_this page.html">  <button>Buy</button></a>
          </div>
          </div>
        </div>
            
            
            
         
            
            
            
            
            
          
           
           
            
          
            
           

                  
            
            
       
      </div>
       

      
        

    
    
</div> <!--main container div ends-->
   
   <script src="js/jquery-2.2.3.js" type="text/javascript"></script>
  <script src="js/bootstrap.min.js" type="text/javascript"></script>

 


 
</body>
</html>
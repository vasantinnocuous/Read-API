<!DOCTYPE html>
<html>
<head>
	<title>Products</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/products.css">

	<!--  <script id="source" language="javascript" type="text/javascript">

  $('.my_search').Keyup(function(){
    //-----------------------------------------------------------------------
    // 2) Send a http request with AJAX http://api.jquery.com/jQuery.ajax/
    //-----------------------------------------------------------------------
    $.ajax({                                      
      url: 'fetch.php',                  //the script to call to get data          
      data: $('.my_search').val(),                        //you can insert url argumnets here to pass to api.php
                                       //for example "id=5&parent=6"
      dataType: 'json',                //data format      
      success: function(data)          //on recieve of reply
      {
        var id = data[0];              //get id
        var vname = data[1]; 
			alert(id);
			alert(vname);
		//get name
        //--------------------------------------------------------------------
        // 3) Update html content
        //--------------------------------------------------------------------
        $('#output').html("<b>id: </b>"+id+"<b> name: </b>"+vname); //Set output element html
        //recommend reading up on jquery selectors they are awesome 
        // http://api.jquery.com/category/selectors/
      } 
    });
  }); 

  </script>-->
	 
</head>
<?php
 $host = "localhost";
  $user = "root";
  $pass = "mysql";

  $databaseName = "test";
  $tableName = "product_category";
  
include('json.php'); 

  $con = mysqli_connect($host,$user,$pass);
  $dbs = mysqli_select_db($con,$databaseName);
  
if(!empty($_POST['submit'])){
$prd = $_POST['search_product']; 

//echo "SELECT cid,category_name FROM product_category where category_name like '%$prd%'"; exit;
 $result = mysqli_query($con,"SELECT cid,category_name FROM product_category where category_name like '%$prd%' ") or die(mysqli_error($con));;       
 //query
 $array = mysqli_fetch_array($result);   
//print_r($array);exit;
$categ = strtok($array[1], '>');
 }
?>

<body>
 <form action="" method="post" >
 <div class="container-fluid p0">

      
        <div class="col-sm-12 col-md-12 col-lg-12">

        <div class="search_input" align="center">
           <div class="form-group">
                <div class="input-group input-group-sm">
                   
                    <div class="icon-addon addon-sm">
                      <input type="text" placeholder="Search Category..."  name = "search_product" class="form-control my_search"/>
                    </div>
					
                    <span class="input-group-btn">
                        <input type= "submit" class="btn btn-default search_button" name="submit">Go!</button>
                    </span>
					
                </div>
				<marquee>Happy Shopping</marquee> 
            </div>
        </div>
            
        <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3 p0 top_div" align="center">
          <a href="<?php echo "psc.php?cid=123;" ?>"><div class="product_name"><?php if(!empty($_POST['submit'])){ echo $categ; }else{ echo "Computers";}?></div>
		  <input type="hidden" id="cid" value="">
        <div class="images_machine">
        <img src="image/fridge.jpg" class="img-responsive"> 
        </div>
           </a>
        </div>

<?php if(empty($_POST['submit'])){  ?>
        <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3 p0 top_div" align="center">
          <a href="when_u_click_to_single_product_this_file_open_sub_category.html"><div class="product_name1">Wood chair</div>
        <div class="images_machine">
        <img src="image/wood_chair.jpg" class="img-responsive"> 
        </div>
           </a>
        </div>
             
            <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3 p0 top_div" align="center">
         <a href="when_u_click_to_single_product_this_file_open_sub_category.html"> <div class="product_name2">Sprots</div>
        <div class="images_machine">
        <img src="image/sports.jpg" class="img-responsive"> 
        </div>
           </a>
        </div>
            
             <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3 p0 top_div" align="center">
         <a href="when_u_click_to_single_product_this_file_open_sub_category.html"> <div class="product_name3">Beauty</div>
        <div class="images_machine">
        <img src="image/maycup.jpg" class="img-responsive"> 
        </div>
           </a>
        </div>


<?php } ?>
       
      </div>
       

      
        

    
    
</div> <!--main container div ends-->
</form>
   
   <script src="js/jquery-2.2.3.js" type="text/javascript"></script>
  <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script src="js/script.js" type="text/javascript"></script>
  <link rel="stylesheet" href="http://code.jquery.com/ui/1.8.18/themes/base/jquery-ui.css" type="text/css" media="all" />

<!-- First get JQuery -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<!-- Then get JQuery UI -->
<script src="http://code.jquery.com/ui/1.8.18/jquery-ui.min.js"></script>
 
 


 
</body>
</html>
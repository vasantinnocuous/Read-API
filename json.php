<html>
  <head>
   
</head>
  <body >
    

<?php 

$connection = mysqli_connect('localhost','root','mysql','test');


$string = file_get_contents("http://exercise.wandome.com/offer/list?keyword=mac+mini&token=1234567890abcd.12345678");
$json_result = json_decode($string, true);

$collectionViewUrl = $json_result['data']['offers']['list'][0]['title'];
$desc = str_replace(',','',$json_result['data']['offers']['list'][0]['description']);
//echo "asas";exit;
//print_r($json_result['data']['offers']['list'][0]); exit;
if($collectionViewUrl!=""){


$query1="insert into products(title,description,brand,color,display_index,old_price,price,price_min,price_max,price_currency,shipping_price) 
        values('".$json_result['data']['offers']['list'][0]['title']."','".$desc."','".$json_result['data']['offers']['list'][0]['brand']."'
	     ,'".$json_result['data']['offers']['list'][0]['color']."','".$json_result['data']['offers']['list'][0]['display_index']."',
		'".$json_result['data']['offers']['list'][0]['old_price']."',
		'".$json_result['data']['offers']['list'][0]['price']."','".$json_result['data']['offers']['list'][0]['price_min']."',
		'".$json_result['data']['offers']['list'][0]['price_max']."','".$json_result['data']['offers']['list'][0]['price_currency']."',
		'".$json_result['data']['offers']['list'][0]['shipping_price']."')";


		
$query2="insert into product_category(category_name,category_slug,category_parents,pid) 
values('".$json_result['data']['offers']['list'][0]['category_name']."','".$json_result['data']['offers']['list'][0]['category_slug']."'
	     ,'".$json_result['data']['offers']['list'][0]['category_parents']."','123')";


/*		 echo "insert into product_merchant(merchant_category,merchant_logo_url,provider,is_special_offer,discount_percent,relevance_points,rating,similar_offer_keyword,top_seller,best_seller,filters) 
values('".$json_result['data']['offers']['list'][0]['merchant_category']."','".$json_result['data']['offers']['list'][0]['merchant_logo_url']."'
	     ,'".$json_result['data']['offers']['list'][0]['provider']."','".$json_result['data']['offers']['list'][0]['is_special_offer']."','".$json_result['data']['offers']['list'][0]['discount_percent']."',
		 '".$json_result['data']['offers']['list'][0]['relevance_points']."','".$json_result['data']['offers']['list'][0]['rating']."','".$json_result['data']['offers']['list'][0]['similar_offer_keyword']."'"; exit; */
$query3="insert into product_merchant(merchant_category,merchant_logo_url,provider,is_special_offer,discount_percent,relevance_points,rating,similar_offer_keyword,top_seller,best_seller,filters) 
values('".$json_result['data']['offers']['list'][0]['merchant_category']."','".$json_result['data']['offers']['list'][0]['merchant_logo_url']."'
	     ,'".$json_result['data']['offers']['list'][0]['provider']."','".$json_result['data']['offers']['list'][0]['is_special_offer']."','".$json_result['data']['offers']['list'][0]['discount_percent']."',
		 '".$json_result['data']['offers']['list'][0]['relevance_points']."','".$json_result['data']['offers']['list'][0]['rating']."','".$json_result['data']['offers']['list'][0]['similar_offer_keyword']."','".$json_result['data']['offers']['list'][0]['top_seller']."','".$json_result['data']['offers']['list'][0]['best_seller']."','".$json_result['data']['offers']['list'][0]['filters'][0]."')";

mysqli_query($connection,$query1);
mysqli_query($connection,$query2);
mysqli_query($connection,$query3);




//mysqli_query($query2);
//mysqli_query($query3);



//	echo "Success";
	//mysqli_close();	
}else{
	
	echo "failed"; die();
}	

		



?>
								
 </body>
</html>

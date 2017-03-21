$(document).ready(function(){

	//	$('.my_search').keyup(function(){
		
						$.ajax({
							url : 'fetch.php',
							dataType: "json",
							data: {
								'product_name':   $('.my_search').val(),
								
							},
							 async:false,
							 success: function(data) {
							 //alert('agsha');
							// var newString = data[1].substr(0,data[1].indexOf('>'));
						      var str = data[1];
							  var cat = str.substring(0, str.indexOf('>'));
							 // console.log(kk);
							 // $('.product_name').append(cat);
							  $('#cid').val(data[0]);
							 
							}
								 
						});
		  
		//	});	

	
	});
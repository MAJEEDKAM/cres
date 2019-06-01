$(document).ready(function()
{
	Insert_record();
	edit();
	update();
	get();
	app_edit();
	getUrlVars();
	$('#mop').on('change', function() {
      if ( this.value == 'cheque')
      {
        $("#myDIV").show();
      }
      else
      {
        $("#myDIV").hide();
      }
    });
	
	
	
})


function getUrlVars()
{
    var vars = [], hash;
    var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
    for(var i = 0; i < hashes.length; i++)
    {
        hash = hashes[i].split('=%20');
        vars.push(hash[0]);
        vars[hash[0]] = hash[1];
    }
     var ids = vars['id'];
	
	
	if(ids!=''){
		
		
			
			$.ajax(
				{
					url : 'get_loandetails.php',
					method : 'post',
					data :{ids:ids},
					dataType :"JSON",
					success:function(data){
					
						$('#Adhaarnumber').val(data.Adhaarnumber);
						$('#firstname').val(data.firstname);
						$('#lastname').val(data.lastname);
						$('#dateofbirth').val(data.dateofbirth);
						$('#number').val(data.mobilenumber);
						$('#address').val(data.addrss);
						$('#town').val(data.town);
						$('#adhaar').val(data.Adhaarnumber);
						$.ajax(
						{
							url : 'table_loan.php',
							method : 'post',
							data :{ids:ids},
							success:function(data){
								
									$('#table').html(data);
								
							}
						});
						
					}
					
			
		});
			
			
	
}
}
function get(){
	$(document).on('click','#go',function(){
		var ids =$('#input').val();
		
		if(ids != ''){
			$.ajax(
				{
					url : 'get_loandetails.php',
					method : 'post',
					data :{ids:ids},
					dataType :"JSON",
					success:function(data){
						$('#Adhaarnumber').val(data.Adhaarnumber);
						$('#firstname').val(data.firstname);
						$('#lastname').val(data.lastname);
						$('#dateofbirth').val(data.dateofbirth);
						$('#number').val(data.mobilenumber);
						$('#address').val(data.addrss);
						$('#town').val(data.town);
						$('#adhaar').val(data.Adhaarnumber);
						window.open('jewelloanold.php?id= '+data.Adhaarnumber,'_self');
						$.ajax(
							{
								url : 'table_loan.php',
								method : 'post',
								data :{ids:ids},
								success:function(data){
									
										$('#table').html(data );
										
								}
							});
						
					}
					
			
		});
		
	}
});
}
function Insert_record()
{	
	$('#insert_det').submit(function(e)
	{
		e.preventDefault();
		var Adhaarnumber = $('#adhaar').val();
		var Application = $('#Application_No').val();
		var dateoftransaction = $('#Date_of_transaction').val();
		var AmountReq = $('#Amount_Req').val();
		var Weight = $('#weight').val();
		var remarks = $('#Details').val();  
		
		if(Adhaarnumber== "" || Application == ""){
			alert("Check the data");
		
			
		}else{
			$.ajax(
			{
				url : 'loanapplication.php',
				method : 'post',
				data :{Adhaar:Adhaarnumber,App:Application,dot:dateoftransaction,Amount:AmountReq,weight:Weight,detail:remarks},
			
				success:function(data){
					
									window.open('medicalold.php?id= '+Adhaarnumber,'_self');
									if (confirm('Inserted Successfully'+"\nDo you want to print?")) {
												  
												  window.open('invoice-db.php?id='+Application);
												  
												  
										} else {
										  txt = "You pressed Cancel!";
										}
									$('insert_det')[0].reset();
									$('#newform').modal('hide'); 
									
									
								
						
				}
				
			});
			
		}
	});
}
function app_edit(){
	$(document).on('click','#new_app',function(){
		var adha=$('#Adhaarnumber').val();
		$.ajax(
			{
				url : "app_loandata.php",
				method : 'post',
				data : {adhaar:adha},
				dataType :"JSON",
				beforeSend:function(){  
							
                          $('#new_app').val("Updating");				  
                     },
				success:function(data){
					
					$('#Application_No').val(++data[0]);
					
					$('#newform').modal('show');
					
				}
				
		
		});
	});
}
function edit(){
	$(document).on('click','#editfrm1',function(){
		var Appli=$(this).attr('data-id');
		$.ajax(
				{
					url : 'get_loandata.php',
					method : 'post',
					data :{App:Appli},
					dataType :"JSON",
					success:function(data){
						$('#Amount_due').val(data.one);
						$('#Up_status').val(data.status1);
						$('#Application_No1').val(data.Application_No)
						$('#form1').modal('show');
						
					}
					
			
		});
		
		
					
				
});
$(document).on('click','#editfrm2',function(){
		var Appli=$(this).attr('data-id');
		$.ajax(
				{
					url : 'get_loandata.php',
					method : 'post',
					data :{App:Appli},
					dataType :"JSON",
					success:function(data){
						$('#Amount_due1').val(data.one);
						$('#Up_status1').val(data.status1);
						$('#Application_No2').val(data.Application_No)
						$('#form2').modal('show');
						
					}
					
			
		});
		

});
$(document).on('click','#editfrm3',function(){
		var Appli=$(this).attr('data-id');
		$.ajax(
				{
					url : 'get_loandata.php',
					method : 'post',
					data :{App:Appli},
					dataType :"JSON",
					success:function(data){
						$('#Amount_due2').val(data.one);
						$('#Up_status2').val(data.status1);
						$('#Application_No3').val(data.Application_No)
						$('#form3').modal('show');
						
					}
					
			
		});
});
$(document).on('click','#editfrm4',function(){
		var Appli=$(this).attr('data-id');
		$.ajax(
				{
					url : 'get_loandata.php',
					method : 'post',
					data :{App:Appli},
					dataType :"JSON",
					success:function(data){
						$('#Amount_due3').val(data.one);
						$('#Up_status3').val(data.status1);
						$('#Application_No4').val(data.Application_No)
						$('#form4').modal('show');
						
					}
					
			
		});
});
$(document).on('click','#editfrm5',function(){
		var Appli=$(this).attr('data-id');
		$.ajax(
				{
					url : 'get_loandata.php',
					method : 'post',
					data :{App:Appli},
					dataType :"JSON",
					success:function(data){
						$('#Amount_due4').val(data.one);
						$('#Up_status4').val(data.status1);
						$('#Application_No5').val(data.Application_No)
						$('#form5').modal('show');
						
					}
					
			
		});
});
$(document).on('click','#editfrm6',function(){
		var Appli=$(this).attr('data-id');
		$.ajax(
				{
					url : 'get_loandata.php',
					method : 'post',
					data :{App:Appli},
					dataType :"JSON",
					success:function(data){
						$('#Amount_due5').val(data.one);
						$('#Up_status5').val(data.status1);
						$('#Application_No6').val(data.Application_No)
						$('#form6').modal('show');
						
					}
					
			
		});
});
$(document).on('click','#editfrm7',function(){
		var Appli=$(this).attr('data-id');
		$.ajax(
				{
					url : 'get_loandata.php',
					method : 'post',
					data :{App:Appli},
					dataType :"JSON",
					success:function(data){
						$('#Amount_due6').val(data.one);
						$('#Up_status6').val(data.status1);
						$('#Application_No7').val(data.Application_No)
						$('#form7').modal('show');
						
					}
					
			
		});
});
$(document).on('click','#editfrm8',function(){
		var Appli=$(this).attr('data-id');
		$.ajax(
				{
					url : 'get_loandata.php',
					method : 'post',
					data :{App:Appli},
					dataType :"JSON",
					success:function(data){
						$('#Amount_due7').val(data.one);
						$('#Up_status7').val(data.status1);
						$('#Application_No8').val(data.Application_No)
						$('#form8').modal('show');
						
					}
					
			
		});
});
$(document).on('click','#editfrm9',function(){
		var Appli=$(this).attr('data-id');
		$.ajax(
				{
					url : 'get_loandata.php',
					method : 'post',
					data :{App:Appli},
					dataType :"JSON",
					success:function(data){
						$('#Amount_due8').val(data.one);
						$('#Up_status8').val(data.status1);
						$('#Application_No9').val(data.Application_No)
					
						$('#form9').modal('show');
						
					}
					
			
		});
});
$(document).on('click','#editfrm10',function(){
		var Appli=$(this).attr('data-id');
		$.ajax(
				{
					url : 'get_loandata.php',
					method : 'post',
					data :{App:Appli},
					dataType :"JSON",
					success:function(data){
						$('#Amount_due9').val(data.one);
						$('#Up_status9').val(data.status1);
						$('#Application_No10').val(data.Application_No)
						$('#form10').modal('show');
						
					}
					
			
		});
});
}
function update(){
	$('#forms1').submit(function(e){  
				
							
                $.ajax({ 
					 url:'updateloan1.php',  
                     method:"post",  
                     data:new FormData(this),
					 contentType:false,
					 processData:false,
                     success:function(data){
						  alert(data);
                          $('#forms1')[0].reset();  
                          $('#form1').modal('hide'); 
                          e.preventDefault();
					 } 
                });  
          
      });  
	  $('#forms2').submit(function(){  
				
							
                $.ajax({ 
					 url:'updateloan2.php',  
                     method:"post",  
                     data:new FormData(this),   
                     beforeSend:function(){  
                          $('#update').val("Updating");  
                     },  
                     success:function(data){  
                          $('#forms2')[0].reset();  
                          $('#form2').modal('hide'); 
						  e.preventDefault();
					 } 
                });  
          
      });
	  $('#forms3').submit(function(){  
				
							
                $.ajax({ 
					 url:'updateloan3.php',  
                     method:"post",  
                     data:new FormData(this),  
                     beforeSend:function(){  
                          $('#update').val("Updating");  
                     },  
                     success:function(data){  
                          $('#forms3')[0].reset();  
                          $('#form3').modal('hide'); 
						  e.preventDefault();
					 } 
                });  
          
      });
	  $('#forms4').submit(function(){  
							
                $.ajax({ 
					 url:'updateloan4.php',  
                     method:"post",  
                     data:new FormData(this),   
                     beforeSend:function(){  
                          $('#update').val("Updating");  
                     },  
                     success:function(data){  
                          $('#forms4')[0].reset();  
                          $('#form4').modal('hide'); 
						  e.preventDefault();
                });  
          
      });
	  $('#forms5').submit(function(){  
				
							
                $.ajax({ 
					 url:'updateloan5.php',  
                     method:"post",  
                     data:new FormData(this), 
                     beforeSend:function(){  
                          $('#update').val("Updating");  
                     },  
                     success:function(data){  
                          $('#forms5')[0].reset();  
                          $('#form5').modal('hide'); 
						  e.preventDefault();
					 } 
                });  
          
      });
	  $('#forms6').submit(function(){  
				
			
							
                $.ajax({ 
					 url:'updateloan6.php',  
                     method:"post",  
                     data:new FormData(this),  
                     beforeSend:function(){  
                          $('#update').val("Updating");  
                     },  
                     success:function(data){  
                          $('#forms6')[0].reset();  
                          $('#form6').modal('hide'); 
						  e.preventDefault();
					 } 
                });  
          
      });
	  $('#forms7').submit(function(){  
				
							
                $.ajax({ 
					 url:'updateloan7.php',  
                     method:"post",  
                     data:new FormData(this),
                     beforeSend:function(){  
                          $('#update').val("Updating");  
                     },  
                     success:function(data){  
                          $('#forms7')[0].reset();  
                          $('#form7').modal('hide'); 
						  e.preventDefault();
					 } 
                });  
          
      });
	  $('#forms8').submit(function(){  
		
                $.ajax({ 
					 url:'updateloan8.php',  
                     method:"post",  
                     data:new FormData(this),  
                     beforeSend:function(){  
                          $('#update').val("Updating");  
                     },  
                     success:function(data){  
                          $('#forms8')[0].reset();  
                          $('#form8').modal('hide'); 
						 e.preventDefault();
					 } 
                });  
          
      });
	  $('#forms9').submit(function(){  
				
				
							
                $.ajax({ 
					 url:'updateloan9.php',  
                     method:"post",  
                     data:new FormData(this),   
                     beforeSend:function(){  
                          $('#update').val("Updating");  
                     },  
                     success:function(data){  
                          $('#forms9')[0].reset();  
                          $('#form9').modal('hide'); 
						  e.preventDefault();
					 } 
                });  
          
      });
	  $('#forms10').submit(function(){  
				
			
                $.ajax({ 
					 url:'updateloan10.php',  
                     method:"post",  
                     data:new FormData(this),  
                     beforeSend:function(){  
                          $('#update').val("Updating");  
                     },  
                     success:function(data){  
                          $('#forms10')[0].reset();  
                          $('#form10').modal('hide'); 
						  e.preventDefault();
					 } 
                });  
          
      });
	
}


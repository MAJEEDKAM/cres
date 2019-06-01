<!DOCTYPE html>
 <html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Crescent Welfare Association </title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- jQuery custom content scroller -->
    <link href="../vendors/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.min.css" rel="stylesheet"/>

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
	

	<script>
		 function validate_adhaar() 
          {
            var fnameval=document.getElementById("Adhaarnumber").value;
            var fnamelen=Number(fnameval.length);
               if(fnamelen==0||fnamelen<=11||fnamelen>=13)
               {
                  document.getElementById("Adhaarnumber").style.borderColor = "#e74c3c";
				  
		  }else{
			  document.getElementById("Adhaarnumber").style.borderColor = "#2ecc71";
		  }
		  }
		  function validate_first() 
          {
            var fnameval=document.getElementById("firstname").value;
            var fnamelen=Number(fnameval.length);
               if(fnamelen==0)
               {
                  document.getElementById("firstname").style.borderColor = "#e74c3c";
		  }else{
			  document.getElementById("firstname").style.borderColor = "#2ecc71";
		  }
		  }
		  function validate_last() 
          {
            var fnameval=document.getElementById("lastname").value;
            var fnamelen=Number(fnameval.length);
               if(fnamelen==0)
               {
                  document.getElementById("lastname").style.borderColor = "#e74c3c";
		  }else{
			  document.getElementById("lastname").style.borderColor = "#2ecc71";
		  }
		  } 
		  function validate_number() 
          {
            var fnameval=document.getElementById("number").value;
            var fnamelen=Number(fnameval.length);
               if(fnamelen==0||fnamelen<=9||fnamelen>=11)
               {
                  document.getElementById("number").style.borderColor = "#e74c3c";
		  }else{
			  document.getElementById("number").style.borderColor = "#2ecc71";
		  }
		  }
		  function validate_address() 
          {
            var fnameval=document.getElementById("address").value;
            var fnamelen=Number(fnameval.length);
               if(fnamelen==0)
               {
                  document.getElementById("address").style.borderColor = "#e74c3c";
		  }else{
			  document.getElementById("address").style.borderColor = "#2ecc71";
		  }
		  }
		  function validate_town() 
          {
            var fnameval=document.getElementById("town").value;
            var fnamelen=Number(fnameval.length);
               if(fnamelen==0)
               {
                  document.getElementById("town").style.borderColor = "#e74c3c";
		  }else{
			  document.getElementById("town").style.borderColor = "#2ecc71";
		  }
		  }
		  function validate_adhaar1() 
          {
            var fnameval=document.getElementById("anumber1").value;
            var fnamelen=Number(fnameval.length);
               if(fnamelen==0||fnamelen<=11||fnamelen>=13)
               {
                  document.getElementById("anumber1").style.borderColor = "#e74c3c";
		  }else{
			  document.getElementById("anumber1").style.borderColor = "#2ecc71";
		  }
		  }
		  function validate_first1() 
          {
            var fnameval=document.getElementById("firstname1").value;
            var fnamelen=Number(fnameval.length);
               if(fnamelen==0)
               {
                  document.getElementById("firstname1").style.borderColor = "#e74c3c";
		  }else{
			  document.getElementById("firstname1").style.borderColor = "#2ecc71";
		  }
		  }
		  function validate_last1() 
          {
            var fnameval=document.getElementById("lastname1").value;
            var fnamelen=Number(fnameval.length);
               if(fnamelen==0)
               {
                  document.getElementById("lastname1").style.borderColor = "#e74c3c";
		  }else{
			  document.getElementById("lastname1").style.borderColor = "#2ecc71";
		  }
		  } 
		  function validate_number1() 
          {
            var fnameval=document.getElementById("number1").value;
            var fnamelen=Number(fnameval.length);
               if(fnamelen==0||fnamelen<=9||fnamelen>=11)
               {
                  document.getElementById("number1").style.borderColor = "#e74c3c";
		  }else{
			  document.getElementById("number1").style.borderColor = "#2ecc71";
		  }
		  }
		  function validate_address1() 
          {
            var fnameval=document.getElementById("address1").value;
            var fnamelen=Number(fnameval.length);
               if(fnamelen==0)
               {
                  document.getElementById("address1").style.borderColor = "#e74c3c";
		  }else{
			  document.getElementById("address1").style.borderColor = "#2ecc71";
		  }
		  }
		  function validate_town1() 
          {
            var fnameval=document.getElementById("town1").value;
            var fnamelen=Number(fnameval.length);
               if(fnamelen==0)
               {
                  document.getElementById("town1").style.borderColor = "#e74c3c";
		  }else{
			  document.getElementById("town1").style.borderColor = "#2ecc71";
		  }
		  }
		 
		  </script>
		  
  </head>

  <body class="nav-md footer_fixed">
    <div class="container body">
      <div class="main_container">
       <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-moon-o"></i> <span>CRESCENT</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>Admin</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                    <ul class="nav side-menu">
                  <li><a><i class="fa fa-home"></i> Home </a>
                    
                  </li>
                  <li><a><i class="fa fa-edit"></i> Dashboard <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="form.html">General Form</a></li>
                    </ul>
                  </li>
                  
				  <li><a><i class="fa fa-heartbeat"></i>Medical Aid <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="form.html">General Form</a></li>
                    </ul>
                  </li>
				  
				  <li><a><i class="fa fa-graduation-cap"></i>Educational Aid <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="form.html">General Form</a></li>
                    </ul>
                  </li>
				  
				  <li><a><i class="fa fa-diamond"></i> Jewel Loan <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="form.html">General Form</a></li>
                    </ul>
                  </li>
				  
                </ul>
                  </li>
                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/img.jpg" alt="">Admin
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;"> Profile</a></li>
                    <li>
                      <a href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                    </li>
                    <li><a href="javascript:;">Help</a></li>
                    <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>

        </div>

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>JEWELLARY LOAN</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                              <button class="btn btn-default" type="button">Go!</button>
                          </span>
                  </div>
                </div>
              </div>
            </div>
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>NEW APPLICANT<small>for jewellary Loan</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <div class="" role="tabpanel" data-example-id="togglable-tabs">
                      <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Applicant</a>
                        </li>
                        <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Alternative</a>
                        </li>
                        
                      </ul>
                      <div id="myTabContent" class="tab-content">
                        <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
					<p id="message"></p>	
                    <form  method="post" id="form1" >
                     

                      <div class="item form-group">
                        <label style="margin-left:45px;color:black" ><strong>Adhaar No: <span class="required">*</span>&nbsp;</strong>
                        </label>
                        <input type="number" id="Adhaarnumber" name="Adhaarnumber" title="Enter 12 digit number" maxlength="12" style="padding-bottom:6px;width:200px;"  onblur="validate_adhaar()"  required="required" >
                      </div>
                      <div class="item form-group">
                        <label style="margin-left:45px;color:black"  ><strong>First Name: <span class="required">*</span>&nbsp;</strong>
                        </label>
                        <input type="text" id="firstname" name="firstname" required="required" onblur="validate_first()" placeholder="" style="padding-bottom:6px;width:200px;">
                     
                        <label style="padding-left:103px;color:black" ><strong>Last Name: <span class="required">*</span>&nbsp;</strong>
                        </label>
                        <input type="text" id="lastname" name="lastname" onblur="validate_last()"  placeholder="" required="required" style="padding-bottom:6px;width:200px;">
						<label style="padding-left:70px;color:black;" for="dateofbirth"><strong>Date Of Birth: <span class="required">*</span>&nbsp;</strong>
						<input type="date"  required="required" id="dateofbirth" name="dateofbirth" style="padding-bottom:6px;width:133px;">
					  </div>
                      <div class="item form-group">
                        <label style="margin-left:45px;color:black;" ><strong>Mobile No: <span class="required">*</span>&nbsp;</strong>
                        </label>
                        <input type="number" id="number" name="mobilenumber" required="required" onblur="validate_number()" maxlength="12"  style="padding-bottom:6px;width:200px;"> 
                      </div>
					  
					  <div class="item form-group">
                        <label style="padding-left:60px;color:black;" ><strong>Address: <span class="required">*</span>&nbsp;</strong>
                        </label>
                        <input type="text" id="address" name="address" required="required" onblur="validate_address()" style="padding-bottom:6px;width:250px;">
                      
                        <label style="padding-left:58px;color:black;"><strong>Town/City: <span class="required">*</span>&nbsp;</strong>
                        </label>
                        <input id="town" type="text" name="town" onblur="validate_town()" style="padding-bottom:6px;width:150px;">
                        
                      </div>
                      
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          <button id="refr" class="btn btn-primary">Cancel</button>
                          <button id="add" name="add" class="btn btn-success">submit</button>
                        </div>
                      </div>
                    </form>
                        </div>
                        
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
     <footer>
          <div class="pull-right">
            Copyright ©  <a href="https://juntossoft.com">juntos software solution.</a> All rights reserved.
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>
	
    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- jQuery custom content scroller -->
    <script src="../vendors/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
 
    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
  </body>
</html>
<script>
$(document).ready(function()
{
	Insert_record();
	
})

function Insert_record()
{	
	$(document).on('click','#add',function()
	{
		var Adhaarnumber = $('#Adhaarnumber').val();
		var firstname = $('#firstname').val();
		var lastname = $('#lastname').val();
		var dateofbirth = $('#dateofbirth').val();
		var mobilenumber = $('#number').val();
		var address = $('#address').val();
		var town = $('#town').val();
		if(Adhaarnumber == "" || firstname == "" || lastname == "" || mobilenumber =="" || address =="" || town =="" || dateofbirth == ""){
			alert("Fill All the fields");
		}else{
			$.ajax(
			{
				url : 'insertloan.php',
				method : 'post',
				data :{Adhaar:Adhaarnumber,fname:firstname,lname:lastname,dob:dateofbirth,mobile:mobilenumber,addr:address,tow:town},
				success:function(data){
				if(data==true){
					alert(data);
					window.open('medicalold.php?id= '+Adhaarnumber,'_self');
					
				}else{
						alert(data);
						window.open('medicalold.php?id= '+Adhaarnumber,'_self');
				}
				}
				
			})
		}
	})
	$(document).on('click','#refr',function()
	{
		$('#form1').trigger('reset');
	})
}
</script>
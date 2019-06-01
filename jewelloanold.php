<?php
require_once('includes/config.php');
//getting id from url


//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM loan ;");

	

?>





<!DOCTYPE html>
 <html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Crescent Welfare Association</title>

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

                <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green">6</span>
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class="text-center">
                        <a>
                          <strong>See All Alerts</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>

        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>MEDICAL AID</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
				<form id="demo" >
                  <div class="input-group">
					<input  class="form-control" list="search" name="input" id="input">
					<datalist id="search">
						<?php
							while($row= mysqli_fetch_array($result)){
								echo '<option type="text" value="'.$row['Adhaarnumber'].'" class="form-control" >'.$row['lastname'].'</option>';
								}
							 
						?>
					 
					 </datalist>
                    <span class="input-group-btn">
                              <button id="go" name="go"class="btn btn-default" type="submit">Go!</button>

                          </span>
                  </div>
				  </form>
                </div>
              </div>
            </div>
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>NEW APPLICANT<small>for Educational aid</small></h2>
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
                        
                        
                      </ul>
                      <div id="myTabContent" class="tab-content">
                        <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
						
                    
                     

                      <div class="item form-group">
                        <label style="margin-left:30px;color:black" ><strong>Adhaar No / ID : <span class="required">*</span>&nbsp;</strong>
                        </label>
                        <input type="number" id="Adhaarnumber" name="Adhaarnumber"  maxlength="12" style="padding-bottom:6px;width:200px;" readonly >
                        
                      </div>
                      <div class="item form-group">
                        <label style="margin-left:54px;color:black"  ><strong>First Name: <span class="required">*</span>&nbsp;</strong>
                        </label>
                        <input type="text" id="firstname" name="firstname" readonly placeholder="" style="padding-bottom:6px;width:200px;">
                     
                        <label style="padding-left:60px;color:black" ><strong>Last Name: <span class="required">*</span>&nbsp;</strong>
                        </label>
                        <input type="text" id="lastname" name="lastname"  readonly placeholder="" style="padding-bottom:6px;width:200px;">
						<label style="padding-left:70px;color:black" for="dateofbirth"><strong>Date Of Birth: <span class="required">*</span>&nbsp;</strong>
						<input type="date" id="dateofbirth" name="dateofbirth" readonly style="padding-bottom:6px;width:128px;">
					  </div>
                      <div class="item form-group">
            			<label style="margin-left:58px;color:black" ><strong>Mobile No: <span class="required">*</span>&nbsp;</strong>
                        </label>
                        <input type="number" id="number" name="mobilenumber"  readonly  style="padding-bottom:6px;width:200px;"> 
                      </div>
                      <div class="item form-group">
                        <label style="padding-left:75px;color:black" ><strong>Address: <span class="required">*</span>&nbsp;</strong>
                        </label>
                        <input type="text" id="address" name="address" readonly style="padding-bottom:6px;width:200px;">
                      
                        <label style="padding-left:70px;color:black"><strong>Town/City: <span class="required">*</span>&nbsp;</strong>
                        </label>
                        <input id="town" type="text" name="town"  readonly style="padding-bottom:6px;width:200px;">
                        
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          <button  class="btn btn-primary">Cancel</button>
                          <button id="new_app" class="btn btn-success">New Application</button>
                        </div>
                      </div>
                    
                        </div>
             
                        
                      </div>

                    </div>
                  </div>
                </div>
				
				
				  <div id="table">
					
					  
					</div>
				  <br>
				  <br>
				  <!-- Modal -->
				  <div class="modal fade bs-example-modal-lg" id="newform" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">

                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                          </button>
                          <h4 class="modal-title" id="myModalLabel">New Application</h4>
						  
                        </div>
                        <div class="modal-body">
						<p id="message"></p>
						<form id="insert_det">
							 <div class="form-group">
								<input type="hidden" name = "adhaar" id="adhaar">
								<label style="padding-left:100px;"><strong>Application No.:&nbsp;</strong></label>
								<input name="Application_No" id="Application_No" type="text" style="padding-bottom:6px;width:200px;" readonly>
								
								<label style="padding-left:70px;"><strong>Date of transaction:&nbsp;</strong></label>
								<input type="text" value="<?php echo date("Y-m-d"); ?>"  name="Date_of_transaction" id="Date_of_transaction" style="padding-bottom:6px;width:128px;"> 
							 
							 </div>
							 <div class="form-group">
								<label style="margin-left:76px;padding-left:3px"><strong>Amount Required:&nbsp;</strong></label>
								<input id="Amount_Req" name="Amount_Req" type="text" style="padding-bottom:6px;width:200px;">
								
							
							</div>
							<div class="form-group">
								<div class="col">
								<label style="margin-left:76px;padding-left:3px"><strong>Weight Of Jewel:&nbsp;</strong></label>
								<input id="weight" name="weight" type="text" style="padding-bottom:6px;width:200px;">
								</div>
							</div>
							<div class="form-group">
							<br>
							<div class="col"><label style="margin-left:80px"><strong>Remarks: &nbsp;</strong></label><input name="Details" id="Details" type="textarea" style="padding-bottom:6px;width:580px;"></div>
							</div>
												
							  
						  
							<div class="modal-footer">
							  
						  <div >
							<div class="col-md-6 col-sm-6 col-xs-12">
							  <div>
							  <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
							  <button type="submit" class="btn btn-success" name="enter" id="enter">Submit</button>
							  </div>
							  
							</div>
						  </div>
					  </form>
                        </div>

                      </div>
                    </div>
                  </div>
				  </div>
				  <div class="modal fade bs-example-modal-lg" id="form1" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">

                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                          </button>
                          <h4 class="modal-title" id="myModalLabel">Edit</h4>
						  
                        </div>
                        <div class="modal-body">
						<p id="message"></p>
						<form id="forms1">
							 <div class="form-group">
								<input type="hidden" name = "Application_No1" id="Application_No1">
								<label style="padding-left:100px;"><strong>Application No.:&nbsp;1/10</strong></label>
								
								
							 </div>
							 <div class="form-group">
								<label style="margin-left:76px;padding-left:3px"><strong>Due Amount:&nbsp;</strong></label>
								<input id="Amount_due" name="Amount_due" type="text" style="padding-bottom:6px;width:200px;">
								
							
							</div>
							<div class="form-group">
								<div class="col">
								<label style="padding-left:70px;"><strong>Date of transaction:&nbsp;</strong></label>
								<input type="text" value="<?php echo date("Y-m-d"); ?>"  name="Date_of_transaction1" id="Date_of_transaction1" style="padding-bottom:6px;width:128px;"> 
								</div>
							</div>
							<div class="form-group">
							<br>
							<div class="col"><label><strong>Status&nbsp;</strong></label>
							<select id="Up_status" name="Up_status">
								<option ></option>
								<option value="submitted">Paid</option>
								<option value="notsubmitted">Not Paid</option></select>
								<br></div>
												
							  
						  
							<div class="modal-footer">
							  
						  <div >
							<div class="col-md-6 col-sm-6 col-xs-12">
							  <div>
							  <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
							  <button type="submit" class="btn btn-success" name="enter" id="enter">Submit</button>
							  </div>
							  
							</div>
						  </div>
					  </form>
                        </div>

                      </div>
                    </div>
                  </div>
				  </div>
				  </div>
				<div class="modal fade bs-example-modal-lg" id="form2" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">

                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                          </button>
                          <h4 class="modal-title" id="myModalLabel">Edit</h4>
						  
                        </div>
                        <div class="modal-body">
						<p id="message"></p>
						<form id="forms2">
							 <div class="form-group">
							 <input type="hidden" name = "Application_No2" id="Application_No2">
								<label style="padding-left:100px;"><strong>Application No.:&nbsp;2/10</strong></label>
								
							 </div>
							 <div class="form-group">
								<label style="margin-left:76px;padding-left:3px"><strong>Due Amount:&nbsp;</strong></label>
								<input id="Amount_due1" name="Amount_due1" type="text" style="padding-bottom:6px;width:200px;">
								
							
							</div>
							<div class="form-group">
								<div class="col">
								<label style="padding-left:70px;"><strong>Date of transaction:&nbsp;</strong></label>
								<input type="text" value="<?php echo date("Y-m-d"); ?>"  name="Date_of_transaction2" id="Date_of_transaction2" style="padding-bottom:6px;width:128px;"> 
								</div>
							</div>
							<div class="form-group">
							<br>
							<div class="col"><label><strong>Status&nbsp;</strong></label>
							<select id="Up_status2" name="Up_status2">
								<option ></option>
								<option value="submitted">Paid</option>
								<option value="notsubmitted">Not Paid</option></select>
								<br></div>
												
							  
						  
							<div class="modal-footer">
							  
						  <div >
							<div class="col-md-6 col-sm-6 col-xs-12">
							  <div>
							  <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
							  <button type="submit" class="btn btn-success" name="enter1" id="enter1">Submit</button>
							  </div>
							  
							</div>
						  </div>
					  </form>
                        </div>

                      </div>
                    </div>
                  </div>
				  </div>
				  </div>
				  <div class="modal fade bs-example-modal-lg" id="form3" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">

                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                          </button>
                          <h4 class="modal-title" id="myModalLabel">Edit</h4>
						  
                        </div>
                        <div class="modal-body">
						<p id="message"></p>
						<form id="forms3">
							 <div class="form-group">
							 <input type="hidden" name = "Application_No3" id="Application_No3">
								<label style="padding-left:100px;"><strong>Application No.:&nbsp;3/10</strong></label>
								
								
							 </div>
							 <div class="form-group">
								<label style="margin-left:76px;padding-left:3px"><strong>Due Amount:&nbsp;</strong></label>
								<input id="Amount_Due2" name="Amount_Due2" type="text" style="padding-bottom:6px;width:200px;">
								
							
							</div>
							<div class="form-group">
								<div class="col">
								<label style="padding-left:70px;"><strong>Date of transaction:&nbsp;</strong></label>
								<input type="text" value="<?php echo date("Y-m-d"); ?>"  name="Date_of_transaction2" id="Date_of_transaction2" style="padding-bottom:6px;width:128px;"> 
								</div>
							</div>
							<div class="form-group">
							<br>
							<div class="col"><label><strong>Status&nbsp;</strong></label>
							<select id="Up_status3" name="Up_status3">
								<option ></option>
								<option value="submitted">Paid</option>
								<option value="notsubmitted">Not Paid</option></select>
								<br></div>
												
							  
						  
							<div class="modal-footer">
							  
						  <div >
							<div class="col-md-6 col-sm-6 col-xs-12">
							  <div>
							  <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
							  <button type="submit" class="btn btn-success" name="enter2" id="enter2">Submit</button>
							  </div>
							  
							</div>
						  </div>
					  </form>
                        </div>

                      </div>
                    </div>
                  </div>
				  </div>
				  </div>
				  <div class="modal fade bs-example-modal-lg" id="form4" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">

                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                          </button>
                          <h4 class="modal-title" id="myModalLabel">Edit</h4>
						  
                        </div>
                        <div class="modal-body">
						<p id="message"></p>
						<form id="forms4">
							 <div class="form-group">
							 <input type="hidden" name = "Application_No4" id="Application_No4">
								<label style="padding-left:100px;"><strong>Application No.:&nbsp;4/10</strong></label>
								
							 </div>
							 <div class="form-group">
								<label style="margin-left:76px;padding-left:3px"><strong>Due Amount:&nbsp;</strong></label>
								<input id="Amount_Due3" name="Amount_Due3" type="text" style="padding-bottom:6px;width:200px;">
								
							
							</div>
							<div class="form-group">
								<div class="col">
								<label style="padding-left:70px;"><strong>Date of transaction:&nbsp;</strong></label>
								<input type="text" value="<?php echo date("Y-m-d"); ?>"  name="Date_of_transaction3" id="Date_of_transaction3" style="padding-bottom:6px;width:128px;"> 
								</div>
							</div>
							<div class="form-group">
							<br>
							<div class="col"><label><strong>Status&nbsp;</strong></label>
							<select id="Up_status4" name="Up_status4">
								<option ></option>
								<option value="submitted">Paid</option>
								<option value="notsubmitted">Not Paid</option></select>
								<br></div>					
							  
						  
							<div class="modal-footer">
							  
						  <div >
							<div class="col-md-6 col-sm-6 col-xs-12">
							  <div>
							  <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
							  <button type="submit" class="btn btn-success" name="enter3" id="enter3">Submit</button>
							  </div>
							  
							</div>
						  </div>
					  </form>
                        </div>

                      </div>
                    </div>
                  </div>
				  </div>
				  </div>
				  <div class="modal fade bs-example-modal-lg" id="form5" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">

                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                          </button>
                          <h4 class="modal-title" id="myModalLabel">Edit</h4>
						  
                        </div>
                        <div class="modal-body">
						<p id="message"></p>
						<form id="forms5">
							 <div class="form-group">
							 <input type="hidden" name = "Application_No5" id="Application_No5">
								<label style="padding-left:100px;"><strong>Application No.:&nbsp;5/10</strong></label>
								
								
							 </div>
							 <div class="form-group">
								<label style="margin-left:76px;padding-left:3px"><strong>Due Amount:&nbsp;</strong></label>
								<input id="Amount_Due4" name="Amount_Due4" type="text" style="padding-bottom:6px;width:200px;">
								
							
							</div>
							<div class="form-group">
								<div class="col">
								<label style="padding-left:70px;"><strong>Date of transaction:&nbsp;</strong></label>
								<input type="text" value="<?php echo date("Y-m-d"); ?>"  name="Date_of_transaction4" id="Date_of_transaction4" style="padding-bottom:6px;width:128px;"> 
								</div>
							</div>
							<div class="form-group">
							<br>
							<div class="col"><label><strong>Status&nbsp;</strong></label>
							<select id="Up_status5" name="Up_status5">
								<option ></option>
								<option value="submitted">Paid</option>
								<option value="notsubmitted">Not Paid</option></select>
								<br></div>
												
							  
						  
							<div class="modal-footer">
							  
						  <div >
							<div class="col-md-6 col-sm-6 col-xs-12">
							  <div>
							  <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
							  <button type="submit" class="btn btn-success" name="enter4" id="enter4">Submit</button>
							  </div>
							  
							</div>
						  </div>
					  </form>
                        </div>

                      </div>
                    </div>
                  </div>
				  </div>
				  </div>
				  <div class="modal fade bs-example-modal-lg" id="form6" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">

                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                          </button>
                          <h4 class="modal-title" id="myModalLabel">Edit</h4>
						  
                        </div>
                        <div class="modal-body">
						<p id="message"></p>
						<form id="forms6">
							 <div class="form-group">
							 <input type="hidden" name = "Application_No6" id="Application_No6">
								<label style="padding-left:100px;"><strong>Application No.:6/10&nbsp;</strong></label>
								
							 </div>
							 <div class="form-group">
								<label style="margin-left:76px;padding-left:3px"><strong>Due Amount:&nbsp;</strong></label>
								<input id="Amount_Due5" name="Amount_Due5" type="text" style="padding-bottom:6px;width:200px;">
								
							
							</div>
							<div class="form-group">
								<div class="col">
								<label style="padding-left:70px;"><strong>Date of transaction:&nbsp;</strong></label>
								<input type="text" value="<?php echo date("Y-m-d"); ?>"  name="Date_of_transaction5" id="Date_of_transaction5" style="padding-bottom:6px;width:128px;"> 
								</div>
							</div>
							<div class="form-group">
							<br>
							<div class="col"><label><strong>Status&nbsp;</strong></label>
							<select id="Up_status6" name="Up_status6">
								<option ></option>
								<option value="submitted">Paid</option>
								<option value="notsubmitted">Not Paid</option></select>
								<br></div> 
						  
							<div class="modal-footer">
							  
						  <div >
							<div class="col-md-6 col-sm-6 col-xs-12">
							  <div>
							  <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
							  <button type="submit" class="btn btn-success" name="enter5" id="enter5">Submit</button>
							  </div>
							  
							</div>
						  </div>
					  </form>
                        </div>

                      </div>
                    </div>
                  </div>
				  </div>
				  </div>
				  <div class="modal fade bs-example-modal-lg" id="form7" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">

                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                          </button>
                          <h4 class="modal-title" id="myModalLabel">Edit</h4>
						  
                        </div>
                        <div class="modal-body">
						<p id="message"></p>
						<form id="forms7">
							 <div class="form-group">
							 <input type="hidden" name = "Application_No7" id="Application_No7">
								<label style="padding-left:100px;"><strong>Application No.:&nbsp;7/10</strong></label>
								
							 </div>
							 <div class="form-group">
								<label style="margin-left:76px;padding-left:3px"><strong>Due Amount:&nbsp;</strong></label>
								<input id="Amount_Due6" name="Amount_Due6" type="text" style="padding-bottom:6px;width:200px;">
								
							
							</div>
							<div class="form-group">
								<div class="col">
								<label style="padding-left:70px;"><strong>Date of transaction:&nbsp;</strong></label>
								<input type="text" value="<?php echo date("Y-m-d"); ?>"  name="Date_of_transaction6" id="Date_of_transaction6" style="padding-bottom:6px;width:128px;"> 
								</div>
							</div>
							<div class="form-group">
							<br>
							<div class="col"><label><strong>Status&nbsp;</strong></label>
							<select id="Up_status7" name="Up_status7">
								<option ></option>
								<option value="submitted">Paid</option>
								<option value="notsubmitted">Not Paid</option></select>
								<br></div> 
						  
							<div class="modal-footer">
							  
						  <div >
							<div class="col-md-6 col-sm-6 col-xs-12">
							  <div>
							  <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
							  <button type="submit" class="btn btn-success" name="enter6" id="enter6">Submit</button>
							  </div>
							  
							</div>
						  </div>
					  </form>
                        </div>

                      </div>
                    </div>
                  </div>
				  </div>
				  </div>
				  <div class="modal fade bs-example-modal-lg" id="form8" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">

                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                          </button>
                          <h4 class="modal-title" id="myModalLabel">Edit</h4>
						  
                        </div>
                        <div class="modal-body">
						<p id="message"></p>
						<form id="forms8">
							 <div class="form-group">
							 <input type="hidden" name = "Application_No8" id="Application_No8">
								<label style="padding-left:100px;"><strong>Application No.:&nbsp;8/10</strong></label>
							 </div>
							 <div class="form-group">
								<label style="margin-left:76px;padding-left:3px"><strong>Due Amount:&nbsp;</strong></label>
								<input id="Amount_Due7" name="Amount_Due7" type="text" style="padding-bottom:6px;width:200px;">
								
							
							</div>
							<div class="form-group">
								<div class="col">
								<label style="padding-left:70px;"><strong>Date of transaction:&nbsp;</strong></label>
								<input type="text" value="<?php echo date("Y-m-d"); ?>"  name="Date_of_transaction7" id="Date_of_transaction7" style="padding-bottom:6px;width:128px;"> 
								</div>
							</div>
							<div class="form-group">
							<br>
							<div class="col"><label><strong>Status&nbsp;</strong></label>
							<select id="Up_status8" name="Up_status8">
								<option ></option>
								<option value="submitted">Paid</option>
								<option value="notsubmitted">Not Paid</option></select>
								<br></div>					
							  
						  
							<div class="modal-footer">
							  
						  <div >
							<div class="col-md-6 col-sm-6 col-xs-12">
							  <div>
							  <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
							  <button type="submit" class="btn btn-success" name="enter7" id="enter7">Submit</button>
							  </div>
							  
							</div>
						  </div>
					  </form>
                        </div>

                      </div>
                    </div>
                  </div>
				  </div>
				  </div>
				  
				  <div class="modal fade bs-example-modal-lg" id="form9" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">

                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                          </button>
                          <h4 class="modal-title" id="myModalLabel">Edit</h4>
						  
                        </div>
                        <div class="modal-body">
						<p id="message"></p>
						<form id="forms9">
							 <div class="form-group"><input type="hidden" name = "Application_No9" id="Application_No9">
								<label style="padding-left:100px;"><strong>Application No.:&nbsp;9/10</strong></label>
							 </div>
							 <div class="form-group">
								<label style="margin-left:76px;padding-left:3px"><strong>Due Amount:&nbsp;</strong></label>
								<input id="Amount_Due8" name="Amount_Due8" type="text" style="padding-bottom:6px;width:200px;">
								
							
							</div>
							<div class="form-group">
								<div class="col">
								<label style="padding-left:70px;"><strong>Date of transaction:&nbsp;</strong></label>
								<input type="text" value="<?php echo date("Y-m-d"); ?>"  name="Date_of_transaction8" id="Date_of_transaction8" style="padding-bottom:6px;width:128px;"> 
								</div>
							</div>
							<div class="form-group">
							<br>
							<div class="col"><label><strong>Status&nbsp;</strong></label>
							<select id="Up_status9" name="Up_status9">
								<option ></option>
								<option value="submitted">Paid</option>
								<option value="notsubmitted">Not Paid</option></select>
								<br></div>					
							  
						  
							<div class="modal-footer">
							  
						  <div >
							<div class="col-md-6 col-sm-6 col-xs-12">
							  <div>
							  <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
							  <button type="submit" class="btn btn-success" name="enter8" id="enter8">Submit</button>
							  </div>
							  
							</div>
						  </div>
					  </form>
                        </div>

                      </div>
                    </div>
                  </div>
				  </div>
				  </div>
				  <div class="modal fade bs-example-modal-lg" id="form10" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">

                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                          </button>
                          <h4 class="modal-title" id="myModalLabel">Edit</h4>
						  
                        </div>
                        <div class="modal-body">
						<p id="message"></p>
						<form id="forms10">
							 <div class="form-group">
							 <input type="hidden" name = "Application_No10" id="Application_No10">
								<label style="padding-left:100px;"><strong>Application No.:&nbsp;10/10</strong></label>
								
							 </div>
							 <div class="form-group">
								<label style="margin-left:76px;padding-left:3px"><strong>Due Amount:&nbsp;</strong></label>
								<input id="Amount_Due9" name="Amount_Due9" type="text" style="padding-bottom:6px;width:200px;">
								
							
							</div>
							<div class="form-group">
								<div class="col">
								<label style="padding-left:70px;"><strong>Date of transaction:&nbsp;</strong></label>
								<input type="text" value="<?php echo date("Y-m-d"); ?>"  name="Date_of_transaction9" id="Date_of_transaction9" style="padding-bottom:6px;width:128px;"> 
								</div>
							</div>
							<div class="form-group">
							<br>
							<div class="col"><label><strong>Status&nbsp;</strong></label>
							<select id="Up_status10" name="Up_status10">
								<option ></option>
								<option value="submitted">Paid</option>
								<option value="notsubmitted">Not Paid</option></select>
								<br></div>					
							  
						  
							<div class="modal-footer">
							  
						  <div >
							<div class="col-md-6 col-sm-6 col-xs-12">
							  <div>
							  <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
							  <button type="submit" class="btn btn-success" name="enter9" id="enter9">Submit</button>
							  </div>
							  
							</div>
						  </div>
					  </form>
                        </div>

                      </div>
                    </div>
                  </div>
				  </div>
				 
                  </div>
				  
		
				  <!--Modalend-->
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
	<script src="functionloan.js"></script>
	
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- jQuery custom content scroller -->
    <script src="../vendors/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- validator -->
    <script src="../vendors/validator/validator.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
  </body>
</html>

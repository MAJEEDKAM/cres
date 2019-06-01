<?php 
	require_once('config.php');
	
	function Insertrecordloan(){
		global $mysqli;
		 $Adhaar_No = $_POST['Adhaar'];
		 $First_Name = $_POST['fname'];
         $Last_Name = $_POST['lname'];
         $Date_of_birth = $_POST['dob'];
         $Age = floor((time() - strtotime($Date_of_birth)) / 31556926);
	     $Mobile_No= $_POST['mobile'];
	     $Address = $_POST['addr'];
	     $Town_City = $_POST['tow'];
		 
		
		$SELECT = "SELECT Adhaarnumber From loan Where Adhaarnumber = '$Adhaar_No' Limit 1";
        $INSERT = "INSERT Into loan (Adhaarnumber, firstname, lastname, dateofbirth, mobilenumber, addrss, town) values('$Adhaar_No', '$First_Name', '$Last_Name', '$Date_of_birth', '$Mobile_No', '$Address', '$Town_City')";
		 //Prepare statement
         $stmt = $mysqli->prepare($SELECT);
         $stmt->execute();
         $stmt->bind_result($Adhaar_No);
         $stmt->store_result();
         $rnum = $stmt->num_rows;
         if ($rnum==0) {
          $stmt->close();
          $stmt = $mysqli->prepare($INSERT);
          $stmt->execute();
		  
		  echo true;
    	
         } else {
		 
		  echo false;
		 
		 }
         $stmt->close();
         $mysqli->close();
		
	}
	
	
	function get_loandata(){
		global $mysqli;
		$Adhaar=$_POST['ids'];
		$query="SELECT * FROM loan WHERE Adhaarnumber='$Adhaar'";
		$result=mysqli_query($mysqli,$query);
		$row = mysqli_fetch_array($result);  
		echo json_encode($row);  
	}
	
	
	function get_records(){
		global $mysqli;
		$Application_No=$_POST['App'];
		$query="select * from loanapp where Application_No='$Application_No'";
		$result=mysqli_query($mysqli,$query);
		$row = mysqli_fetch_array($result);  
		echo json_encode($row);  
	} 
	
	
	function get_loanapp_records(){
		
		global $mysqli;
		$app=$_POST['adhaar'];
		$query="SELECT MAX(Application_No) FROM loanapp";
		$result=mysqli_query($mysqli,$query);
		$row = mysqli_fetch_array($result);
		echo json_encode($row);
		
	}
	
	function loanapplication(){
		
		global $mysqli;
		$aadhar_id = $_POST['Adhaar'];
		$Application_No = $_POST['App'];
		$Date_of_transaction = $_POST['dot'];
		$Date1 = date('Y-m-d', strtotime("+1 months", strtotime($Date_of_transaction)));
		$Date2 = date('Y-m-d', strtotime("+2 months", strtotime($Date_of_transaction)));
		$Date3 = date('Y-m-d', strtotime("+3 months", strtotime($Date_of_transaction)));
		$Date4 = date('Y-m-d', strtotime("+4 months", strtotime($Date_of_transaction)));
		$Date5 = date('Y-m-d', strtotime("+5 months", strtotime($Date_of_transaction)));
		$Date6 = date('Y-m-d', strtotime("+6 months", strtotime($Date_of_transaction)));
		$Date7 = date('Y-m-d', strtotime("+7 months", strtotime($Date_of_transaction)));
		$Date8 = date('Y-m-d', strtotime("+8 months", strtotime($Date_of_transaction)));
		$Date9 = date('Y-m-d', strtotime("+9 months", strtotime($Date_of_transaction)));
		$Date10 = date('Y-m-d', strtotime("+10 months", strtotime($Date_of_transaction)));
		$Amount_Req = $_POST['Amount'];
		$one=$Amount_Req/10;
		$Weight = $_POST['weight'];
		$remarks = $_POST['detail'];
		 
		
		
		$INSERT = "INSERT Into loanapp (Application_No,Adhaarnumber, AmountReq, weight, dateofTransaction,remarks,onedate,twodate,threedate,fourdate,fivedate,sixdate,sevendate,eightdate,ninedate,tendate,one,two,three,four,five,six,seven,eight,nine,ten) values('$Application_No','$aadhar_id', '$Amount_Req', '$Weight', '$Date_of_transaction','$remarks','$Date1','$Date2','$Date3','$Date4','$Date5','$Date6','$Date7','$Date8','$Date9','$Date10','$one','$one','$one','$one','$one','$one','$one','$one','$one','$one')";
		 //Prepare statement
		$result=mysqli_query($mysqli,$INSERT);
		if($result){
			echo true;
    	
         } else {
		 
		  echo false;
		 
		 }
	}
	

	function loanupdate(){
		
		global $mysqli;
		$aadhar_id = $_POST['Adhaar'];
		$Application_No = $_POST['App'];
		$Date_of_transaction = $_POST['dot'];
		$Date1 = date('Y-m-d', strtotime("+1 months", strtotime($Date_of_transaction)));
		$Date2 = date('Y-m-d', strtotime("+2 months", strtotime($Date_of_transaction)));
		$Date3 = date('Y-m-d', strtotime("+3 months", strtotime($Date_of_transaction)));
		$Date4 = date('Y-m-d', strtotime("+4 months", strtotime($Date_of_transaction)));
		$Date5 = date('Y-m-d', strtotime("+5 months", strtotime($Date_of_transaction)));
		$Date6 = date('Y-m-d', strtotime("+6 months", strtotime($Date_of_transaction)));
		$Date7 = date('Y-m-d', strtotime("+7 months", strtotime($Date_of_transaction)));
		$Date8 = date('Y-m-d', strtotime("+8 months", strtotime($Date_of_transaction)));
		$Date9 = date('Y-m-d', strtotime("+9 months", strtotime($Date_of_transaction)));
		$Date10 = date('Y-m-d', strtotime("+10 months", strtotime($Date_of_transaction)));
		$Amount_Req = $_POST['Amount'];
		$one=$Amount_Req/10;
		$Weight = $_POST['weight'];
		$remarks = $_POST['detail'];
		 
		
		
		$INSERT = "INSERT Into loanapp (Application_No,Adhaarnumber, AmountReq, weight, dateofTransaction,remarks,onedate,twodate,threedate,fourdate,fivedate,sixdate,sevendate,eightdate,ninedate,tendate,one,two,three,four,five,six,seven,eight,nine,ten) values('$Application_No','$aadhar_id', '$Amount_Req', '$Weight', '$Date_of_transaction','$remarks','$Date1','$Date2','$Date3','$Date4','$Date5','$Date6','$Date7','$Date8','$Date9','$Date10','$one','$one','$one','$one','$one','$one','$one','$one','$one','$one')";
		 //Prepare statement
		$result=mysqli_query($mysqli,$INSERT);
		if($result){
			echo true;
    	
         } else {
		 
		  echo false;
		 
		 }
	}

	function update1(){
		global $mysqli;
		$Application_No=$_POST['Application_No1'];
		$pd=$_POST['Date_of_transaction1'];
		$st=$_POST['Up_status'];
		
           $query = "  
           UPDATE loanapp   
           SET datepay1='$pd',
		   status='$st'
           WHERE Application_No='$Application_No';"; 
		   if(mysqli_query($mysqli,$query)){
			   echo "Updated";
		   }else{
			   echo "sorry";
		   }
		
		
	}
	function update2(){
		global $mysqli;
		$Application_No=$_POST['Application_No1'];
		$pd=$_POST['Date_of_transaction1'];
		$st=$_POST['Up_status'];
		
           $query = "  
           UPDATE loanapp   
           SET datepay2='$pd',
		   status1='$st'
           WHERE Application_No='$Application_No';"; 
		   if(mysqli_query($mysqli,$query)){
			   echo "Updated";
		   }else{
			   echo "sorry";
		   }
		
		
	}
	function update3(){
		global $mysqli;
		$Application_No=$_POST['Application_No1'];
		$pd=$_POST['Date_of_transaction1'];
		$st=$_POST['Up_status'];
		
           $query = "  
           UPDATE loanapp   
           SET datepay9='$pd',
		   status2='$st'
           WHERE Application_No='$Application_No';"; 
		   if(mysqli_query($mysqli,$query)){
			   echo "Updated";
		   }else{
			   echo "sorry";
		   }
		
		
	}
	function update4(){
		global $mysqli;
		$Application_No=$_POST['Application_No1'];
		$pd=$_POST['Date_of_transaction1'];
		$st=$_POST['Up_status'];
		
           $query = "  
           UPDATE loanapp   
           SET datepay4='$pd',
		   status3='$st'
           WHERE Application_No='$Application_No';"; 
		   if(mysqli_query($mysqli,$query)){
			   echo "Updated";
		   }else{
			   echo "sorry";
		   }
		
		
	}
	function update5(){
		global $mysqli;
		$Application_No=$_POST['Application_No1'];
		$pd=$_POST['Date_of_transaction1'];
		$st=$_POST['Up_status'];
		
           $query = "  
           UPDATE loanapp   
           SET datepay5='$pd',
		   status4='$st'
           WHERE Application_No='$Application_No';"; 
		   if(mysqli_query($mysqli,$query)){
			   echo "Updated";
		   }else{
			   echo "sorry";
		   }
		
		
	}
	function update6(){
		global $mysqli;
		$Application_No=$_POST['Application_No1'];
		$pd=$_POST['Date_of_transaction1'];
		$st=$_POST['Up_status'];
		
           $query = "  
           UPDATE loanapp   
           SET datepay6='$pd',
		   status5='$st'
           WHERE Application_No='$Application_No';"; 
		   if(mysqli_query($mysqli,$query)){
			   echo "Updated";
		   }else{
			   echo "sorry";
		   }
		
		
	}
	function update7(){
		global $mysqli;
		$Application_No=$_POST['Application_No1'];
		$pd=$_POST['Date_of_transaction1'];
		$st=$_POST['Up_status'];
		
           $query = "  
           UPDATE loanapp   
           SET datepay7='$pd',
		   status6='$st'
           WHERE Application_No='$Application_No';"; 
		   if(mysqli_query($mysqli,$query)){
			   echo "Updated";
		   }else{
			   echo "sorry";
		   }
		
		
	}
	function update8(){
		global $mysqli;
		$Application_No=$_POST['Application_No1'];
		$pd=$_POST['Date_of_transaction1'];
		$st=$_POST['Up_status'];
		
           $query = "  
           UPDATE loanapp   
           SET datepay8='$pd',
		   status7='$st'
           WHERE Application_No='$Application_No';"; 
		   if(mysqli_query($mysqli,$query)){
			   echo "Updated";
		   }else{
			   echo "sorry";
		   }
		
		
	}
	function update9(){
		global $mysqli;
		$Application_No=$_POST['Application_No1'];
		$pd=$_POST['Date_of_transaction1'];
		$st=$_POST['Up_status'];
		
           $query = "  
           UPDATE loanapp   
           SET datepay9='$pd',
		   status8='$st'
           WHERE Application_No='$Application_No';"; 
		   if(mysqli_query($mysqli,$query)){
			   echo "Updated";
		   }else{
			   echo "sorry";
		   }
		
		
	}
	function update10(){
		global $mysqli;
		$Application_No=$_POST['Application_No1'];
		$pd=$_POST['Date_of_transaction1'];
		$st=$_POST['Up_status'];
		
           $query = "  
           UPDATE loanapp   
           SET datepay10='$pd',
		   status9='$st'
           WHERE Application_No='$Application_No';"; 
		   if(mysqli_query($mysqli,$query)){
			   echo "Updated";
		   }else{
			   echo "sorry";
		   }
		
		
	}
	
	function table(){
		global $mysqli;
		$Adhaar=$_POST['ids'];
		$valu="";
		$valu='<div class="row">
					  <div class="col-md-12">
						<div class="x_panel">
						  <div class="x_title">
							<h2>History</h2>
							<ul class="nav navbar-right panel_toolbox">
							  <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
							  </li>
							  <li><a class="close-link"><i class="fa fa-close"></i></a>
							  </li>
							</ul>
							<div class="clearfix"></div>
						  </div>
						  <div class="x_content" ><center><h2>No records found!</h2></center></div>
						</div>
					  </div>
					  
					</div>';
					
		$value="";
		$value='<div class="row">
					  <div class="col-md-12">
						<div class="x_panel">
						  <div class="x_title">
							<h2>History</h2>
							<ul class="nav navbar-right panel_toolbox">
							  
							 
							</ul>
							<div class="clearfix"></div>
						  </div>
						  ';
						 
						  $sql = "SELECT * FROM loanapp
									INNER JOIN loan ON loanapp.Adhaarnumber=loan.Adhaarnumber Where loanapp.Adhaarnumber ='$Adhaar' ";
									  $result = $mysqli->query($sql);
									  if ($result->num_rows > 0) {
										   while($row = $result->fetch_assoc()) {
											  
											  
									$value.='<div class="card">
      <div class="card-header">
        <a class="collapsed card-link" data-toggle="collapse" href="#'.$row["Application_No"].'">
        APPLICATION:   '.$row["Application_No"].'    LOAN AMOUNT:   '.$row["AmountReq"].'  WEIGHT:  '.$row["weight"].' DATE OF ISSUE:'.$row["dateofTransaction"].'
		
      </a>
      </div>
										   <br><div id="'.$row["Application_No"].'" class="collapse" data-parent="#accordion">
        <div class="card-body">
		<table class="table table-striped projects">
		<thead>
		  <tr>			
			<th>No. of dues</th>
			<th>Installments</th>	
				<th>Due Date</th>
		  </tr>
		</thead>
		<tbody>	
		
							 <tr>	
							<td>1</td>
				  <td>'.$row['one'].'</td>
				  <td>'.$row['onedate'].'</td>
				  <td><button  class="btn btn-info btn-xs" id="editfrm1"  data-id='.$row["Application_No"].'><i class="fa fa-pencil"></i> Edit </button></td>
					</tr>
					<tr>		
						<td>2</td>
				  <td>'.$row['two'].'</td>
				  <td>'.$row['twodate'].'</td>
				  <td><button  class="btn btn-info btn-xs" id="editfrm2"  data-id='.$row["Application_No"].'><i class="fa fa-pencil"></i> Edit </button></td>
					</tr><tr>
					<td>3</td>					
				  <td>'.$row['three'].'</td>
				  <td>'.$row['threedate'].'</td>
				  <td><button  class="btn btn-info btn-xs" id="editfrm3"  data-id='.$row["Application_No"].'><i class="fa fa-pencil"></i> Edit </button></td>
					</tr>
					<tr>
						<td>4</td>
				  <td>'.$row['four'].'</td>
				  <td>'.$row['fourdate'].'</td>
				  <td><button  class="btn btn-info btn-xs" id="editfrm4"  data-id='.$row["Application_No"].'><i class="fa fa-pencil"></i> Edit </button></td>
					</tr>
					<tr>	
						<td>5</td>
				  <td>'.$row['five'].'</td>
				  <td>'.$row['fivedate'].'</td>
				  <td><button  class="btn btn-info btn-xs" id="editfrm5"  data-id='.$row["Application_No"].'><i class="fa fa-pencil"></i> Edit </button></td>
					</tr>
					<tr>	
						<td>6</td>
				  <td>'.$row['six'].'</td>
				  <td>'.$row['sixdate'].'</td>
				  <td><button  class="btn btn-info btn-xs" id="editfrm6"  data-id='.$row["Application_No"].'><i class="fa fa-pencil"></i> Edit </button></td>
					</tr>
					<tr>		
						<td>7</td>
				  <td>'.$row['seven'].'</td>
				  <td>'.$row['sevendate'].'</td>
				  <td><button  class="btn btn-info btn-xs" id="editfrm7"  data-id='.$row["Application_No"].'><i class="fa fa-pencil"></i> Edit </button></td>
					</tr>
					<tr>	
						<td>8</td>
				  <td>'.$row['eight'].'</td>
				  <td>'.$row['eightdate'].'</td>
				  <td><button  class="btn btn-info btn-xs" id="editfrm8"  data-id='.$row["Application_No"].'><i class="fa fa-pencil"></i> Edit </button></td>
					</tr>
					<tr>	
						<td>9</td>
				  <td>'.$row['nine'].'</td>
				  <td>'.$row['ninedate'].'</td>
				  <td><button  class="btn btn-info btn-xs" id="editfrm9"  data-id='.$row["Application_No"].'><i class="fa fa-pencil"></i> Edit </button></td>
					</tr>
					<tr>	
						<td>10</td>
				  <td>'.$row['ten'].'</td>
				  <td>'.$row['tendate'].'</td>
				  <td><button  class="btn btn-info btn-xs" id="editfrm10"  data-id='.$row["Application_No"].'><i class="fa fa-pencil"></i> Edit </button></td>
					</tr>
					</tbody>
							</table>
        
     </div>  
       </div>
	    
	   ';
	   }
				  $value.='
			
  </div>
	</div>
							</div>
						</div>
									 ';
									 
									 
							  echo $value;

									 }else {
								  echo $valu;
							  }
							$mysqli->close();

	}
	
	
	
?>
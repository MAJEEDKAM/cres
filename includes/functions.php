<?php 
	require_once('config.php');
	
	function Insertrecord(){
		global $mysqli;
		 $Adhaar_No = $_POST['Adhaar'];
		 $First_Name = $_POST['fname'];
         $Last_Name = $_POST['lname'];
         $Date_of_birth = $_POST['dob'];
         $Age = floor((time() - strtotime($Date_of_birth)) / 31556926);
	     $Mobile_No= $_POST['mobile'];
	     $Address = $_POST['addr'];
	     $Town_City = $_POST['tow'];
		 
		
		$SELECT = "SELECT Adhaarnumber From med Where Adhaarnumber = '$Adhaar_No' Limit 1";
        $INSERT = "INSERT Into med (Adhaarnumber, firstname, lastname, dateofbirth, mobilenumber, addrss, town) values('$Adhaar_No', '$First_Name', '$Last_Name', '$Date_of_birth', '$Mobile_No', '$Address', '$Town_City')";
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
		  
		 echo "Inserted Successfully";
    	
         } else {
		 
		  echo "Someone else has already used the same Id \n Press ok to diaplay the details";
		 }
         $stmt->close();
         $mysqli->close();
		
	}
	
	
	
	
	
	
function medicalapplication(){
		
		if($_POST["action"] == "insert")
			global $mysqli;
			$aadhar_id = $_POST['adhaar'];
			$Application_No = $_POST['Application_No'];
			$Date_of_transaction = $_POST['Date_of_transaction'];
			$Frequet = $_POST['freq'];
			$purpose = $_POST['purpose'];
			$Details = $_POST['Details'];
			//$Amount_Sanctioned_words= getIndianCurrency($Amount_Sanctioned);
			$dischargerep = $_POST['disrep'];
			$meth_payment = $_POST['mop'];
			$Amount_Requested = $_POST['Amount_Requested'];
			$Amount_Sanctioned = $_POST['Amount_Sanctioned'];
			$Chequeno = $_POST['chequeno'];
			$file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
			
			
			$INSERT = "INSERT Into mednew (Application_No,Adhaarnumber, dateoftransaction, frequency, purpose, Detail,Discharge, mop, Amnt_req, Amnt_sanc, chequeno,name) values('$Application_No','$aadhar_id', '$Date_of_transaction', '$Frequet', '$purpose', '$Details', '$dischargerep', ' $meth_payment', ' $Amount_Requested', ' $Amount_Sanctioned', ' $Chequeno','$file')";
			 //Prepare statement
			
			
			if(mysqli_query($mysqli,$INSERT)){
				echo "inserted successfully";
			
			 } else {
			 
			  echo "Not Inserted";
			 
			 }
	}
	


		
		
	function getIndianCurrency(float $number)
							{
								$decimal = round($number - ($no = floor($number)), 2) * 100;
								$hundred = null;
								$digits_length = strlen($no);
								$i = 0;
								$str = array();
								$words = array(0 => '', 1 => 'one', 2 => 'two',
									3 => 'three', 4 => 'four', 5 => 'five', 6 => 'six',
									7 => 'seven', 8 => 'eight', 9 => 'nine',
									10 => 'ten', 11 => 'eleven', 12 => 'twelve',
									13 => 'thirteen', 14 => 'fourteen', 15 => 'fifteen',
									16 => 'sixteen', 17 => 'seventeen', 18 => 'eighteen',
									19 => 'nineteen', 20 => 'twenty', 30 => 'thirty',
									40 => 'forty', 50 => 'fifty', 60 => 'sixty',
									70 => 'seventy', 80 => 'eighty', 90 => 'ninety');
								$digits = array('', 'hundred','thousand','lakh', 'crore');

								while( $i < $digits_length ) {
									$divider = ($i == 2) ? 10 : 100;
									$number = floor($no % $divider);
									$no = floor($no / $divider);
									$i += $divider == 10 ? 1 : 2;
									if ($number) {
										$plural = (($counter = count($str)) && $number > 9) ? 's' : null;
										$hundred = ($counter == 1 && $str[0]) ? ' and ' : null;
										$str [] = ($number < 21) ? $words[$number].' '. $digits[$counter]. $plural.' '.$hundred:$words[floor($number / 10) * 10].' '.$words[$number % 10]. ' '.$digits[$counter].$plural.' '.$hundred;
									} else $str[] = null;
								}

								$rupees = implode('', array_reverse($str));
								$paise = '';

								if ($decimal) {
									$paise = 'and ';
									$decimal_length = strlen($decimal);

									if ($decimal_length == 2) {
										if ($decimal >= 20) {
											$dc = $decimal % 10;
											$td = $decimal - $dc;
											$ps = ($dc == 0) ? '' : '-' . $words[$dc];

											$paise .= $words[$td] . $ps;
										} else {
											$paise .= $words[$decimal];
										}
									} else {
										$paise .= $words[$decimal % 10];
									}

									$paise .= ' paise';
								}

								return ($rupees ? $rupees . 'rupees ' : '') . $paise ;
	}
	
	
	
	function get_data(){
		global $mysqli;
		$Adhaar=$_POST['ids'];
		$query="SELECT * FROM med WHERE Adhaarnumber='$Adhaar'";
		$result=mysqli_query($mysqli,$query);
		$row = mysqli_fetch_array($result);  
		echo json_encode($row);  
	}
	
	
	function get_records(){
		global $mysqli;
		$Application_No=$_POST['App'];
		$query="select Application_No,Adhaarnumber,Detail,Amnt_Sanc,Amnt_req,Discharge,dateoftransaction from mednew where Application_No='$Application_No'";
		$result=mysqli_query($mysqli,$query);
		$row = mysqli_fetch_array($result);  
		echo json_encode($row);  
	} 
	
	
	function get_app_records(){
		
		global $mysqli;
		$app=$_POST['adhaar'];
		$query="SELECT MAX(Application_No) From mednew";
		$result=mysqli_query($mysqli,$query);
		$row = mysqli_fetch_array($result);
		echo json_encode($row);
		
	}
	
	
	
	
	
	function update(){
		global $mysqli;
		$aadhar_id = $_POST['Adhaar'];
		$Application_No = $_POST['App'];
		$Date_of_transaction = $_POST['dateoft'];
		$Details = $_POST['Detail'];
		$Amount_Sanctioned = $_POST['AmountSanc'];
		$Amount_Requested = $_POST['AmountReq'];
		$Dischargereport = $_POST['Dr'];
		
		if($Application_No!= ''||$Amount_Sanctioned!=''||$Dischargereport!=''||$Details!='')  
      {  
           $query = "  
           UPDATE mednew   
           SET Detail='$Details',   
           Amnt_Sanc='$Amount_Sanctioned',
		   Discharge='$Dischargereport',
		   status = 'close'
           WHERE Application_No='$Application_No';"; 
		   if(mysqli_query($mysqli,$query)){
			   echo "Updated";
		   }else{
			   echo "sorry";
		   }
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
							  <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
							  </li>
							  
							  <li><a class="close-link"><i class="fa fa-close"></i></a>
							  </li>
							</ul>
							<div class="clearfix"></div>
						  </div>
						  <div class="x_content" >
						  <table class="table table-striped projects">
							  <thead>
								<tr>
								  <th style="width: 8.9%">Application No.</th>
								  <th style="width: 10%">Adhaar No.</th>
								  <th style="width: 10%">Purpose</th>
								  <th style="width: 10%">Type</th>
								  <th style="width: 10%">Amount Requested</th>
								  <th style="width: 10%">Amount Sanctioned</th>
								  <th style="width: 10%">Date of Sanctioned</th>
								  <th style="width: 10%">Concern Letter</th>
								  <th style="width: 10%">Discharge Report</th>
								  <th style="width: 5%">Update</th>
								  <th style="width: 10%">Remarks</th>
								</tr>
							  </thead>
							  <tbody>';
								
									
									$sql = "SELECT mednew.Application_No, mednew.Adhaarnumber,mednew.frequency, mednew.purpose,mednew.Amnt_req,mednew.Amnt_Sanc,mednew.dateoftransaction,mednew.Discharge, mednew.Detail ,mednew.name
									FROM mednew
									INNER JOIN med ON mednew.Adhaarnumber=med.Adhaarnumber Where mednew.Adhaarnumber  = '$Adhaar' ;

									";
									  $result = $mysqli->query($sql);
									  if ($result->num_rows > 0) {
									   
									   while($row = $result->fetch_assoc()) {
										$value.="<tr><td>" . $row["Application_No"]. "</td><td>" . $row["Adhaarnumber"] . "</td><td>". $row["frequency"] ."</td><td>" . $row["purpose"] . "</td><td>" . $row["Amnt_req"] . "</td><td>". $row["Amnt_Sanc"] . "</td><td>" . $row["dateoftransaction"] . "</td>";
										$value.='<td></td><td><button type="button"  class="btn btn-info btn-xs editfrm"  name="editfrm"  data-id='.$row["Application_No"].'><i class="fa fa-pencil"></i> Edit </button></td>';
										$value.="<td>" . $row["Discharge"]. "</td>";
										$value.='<td><img alt="no image" id="myImg" class="myImg' . $row["Application_No"]. '" src="data:image/jpeg;base64,'.base64_encode($row['name'] ).'" height="60" width="75" class="img-thumbnail" /></td><td>' . $row["Detail"] .'</td></tr>';
									}
									$value.="</tbody>
							</table>
							</div>
						</div>
					  </div>
					  
					</div>";
							echo $value;
									} else { echo 
									$valu;
 }
									$mysqli->close();
							
								
							  
							
	}
?>
<?php 
	require_once('config.php');
	
	function Insertrecordedu(){
		global $mysqli;
		 $Adhaar_No = $_POST['Adhaar'];
		 $First_Name = $_POST['fname'];
         $Last_Name = $_POST['lname'];
         $Date_of_birth = $_POST['dob'];
		 $Father_Name = $_POST['fatname'];
         $Age = floor((time() - strtotime($Date_of_birth)) / 31556926);
	     $Mobile_No= $_POST['mobile'];
	     $Address = $_POST['addr'];
	     $Town_City = $_POST['tow'];
		 
		
		$SELECT = "SELECT Adhaarnumber From edu Where Adhaarnumber = '$Adhaar_No' Limit 1";
        $INSERT = "INSERT Into edu (Adhaarnumber, firstname, lastname, dateofbirth, fathername, mobilenumber, addrss, town) values('$Adhaar_No', '$First_Name', '$Last_Name', '$Date_of_birth', '$Father_Name', '$Mobile_No', '$Address', '$Town_City')";
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
	
	
	function get_edudata(){
		global $mysqli;
		$Adhaar=$_POST['ids'];
		$query="SELECT * FROM edu WHERE Adhaarnumber='$Adhaar'";
		$result=mysqli_query($mysqli,$query);
		$row = mysqli_fetch_array($result);  
		echo json_encode($row);  
	}
	
	
	function get_eduapp_records(){
		
		global $mysqli;
		$app=$_POST['adhaar'];
		$query="SELECT MAX(APPNO) FROM (SELECT MAX(Application_No) AS APPNO From edunew1 UNION SELECT MAX(Application_No) AS APPNO From edunew2 UNION SELECT MAX(Application_No) AS APPNO From edunew3 UNION SELECT MAX(Application_No) AS APPNO From edunew4) AS X ";
		$result=mysqli_query($mysqli,$query);
		$row = mysqli_fetch_array($result);
		echo json_encode($row);
		
	}
	
	function year1(){
		
		global $mysqli;
		$aadhar_id = $_POST['Adhaar'];
		$Application_No = $_POST['App'];
		$Date_of_transaction = $_POST['dateoftransaction'];
		$courseduration = $_POST['courseduration'];
		$course = $_POST['course'];
		$institution = $_POST['institution'];
		$fees = $_POST['fees'];
		$marks = $_POST['marks'];
		$last = $_POST['last'];
		//$file = addslashes(file_get_contents($_FILES['image']["tmp_name"]));
		$remarks = $_POST['remarks'];
		 
		
		
		$INSERT = "INSERT Into edunew1 (Application_No,Adhaarnumber, Courseapplied, Courseduration, Feesstruture, Marksobtained, dateofsanctioned) values('$Application_No','$aadhar_id', '$course', '$courseduration', '$fees','$marks' ,' $Date_of_transaction')";
		 //Prepare statement
		
		if(mysqli_query($mysqli,$INSERT)){
			echo "Inserted Successfully";
    	
         } else {
		 
		  echo "Not Inserted";
		 
		 }
	}
	
	function year2(){
		
		global $mysqli;
		$aadhar_id = $_POST['Adhaar'];
		$Application_No = $_POST['App'];
		$Date_of_transaction = $_POST['dateoftransaction'];
		$courseduration = $_POST['courseduration'];
		$course = $_POST['course'];
		$institution = $_POST['institution'];
		$fees = $_POST['fees'];
		$marks = $_POST['marks'];
		$last = $_POST['last'];
		//$file = addslashes(file_get_contents($_FILES['image']["tmp_name"]));
		$remarks = $_POST['remarks'];
		 
		
		
		$INSERT = "INSERT Into edunew2 (Application_No,Adhaarnumber, courseapplied, courseduration, Fees_Structure, marksobtained,dateofsanctioned) values('$Application_No','$aadhar_id', '$course', '$courseduration', '$fees','$marks' ,' $Date_of_transaction')";
		 //Prepare statement
		
		if(mysqli_query($mysqli,$INSERT)){
			echo "Inserted Successfully";
    	
         } else {
		 
		  echo "Not Inserted";
		 
		 }
	}
	
	function year3(){
		
		global $mysqli;
		$aadhar_id = $_POST['Adhaar'];
		$Application_No = $_POST['App'];
		$Date_of_transaction = $_POST['dateoftransaction'];
		$courseduration = $_POST['courseduration'];
		$course = $_POST['course'];
		$institution = $_POST['institution'];
		$fees = $_POST['fees'];
		$marks = $_POST['marks'];
		$last = $_POST['last'];
		//$file = addslashes(file_get_contents($_FILES['image']["tmp_name"]));
		$remarks = $_POST['remarks'];
		 
		
		
		$INSERT = "INSERT Into edunew3 (Application_No,Adhaarnumber, courseapplied, courseduration, Feesstruture, marksobtained,dateofsanctioned) values('$Application_No','$aadhar_id', '$course', '$courseduration', '$fees','$marks' ,' $Date_of_transaction')";
		 //Prepare statement
		
		if(mysqli_query($mysqli,$INSERT)){
			echo "Inserted Successfully";
    	
         } else {
		 
		  echo "Not Inserted";
		 
		 }
	}
	
	function year4(){
		
		global $mysqli;
		$aadhar_id = $_POST['Adhaar'];
		$Application_No = $_POST['App'];
		$Date_of_transaction = $_POST['dateoftransaction'];
		$courseduration = $_POST['courseduration'];
		$course = $_POST['course'];
		$institution = $_POST['institution'];
		$fees = $_POST['fees'];
		$marks = $_POST['marks'];
		$last = $_POST['last'];
		//$file = addslashes(file_get_contents($_FILES['image']["tmp_name"]));
		$remarks = $_POST['remarks'];
		 
		
		
		$INSERT = "INSERT Into edunew4 (Application_No,Adhaarnumber, courseapplied, courseduration, Feesstruture, marksobtained,dateoftransaction) values('$Application_No','$aadhar_id', '$course', '$courseduration', '$fees','$marks' ,' $Date_of_transaction')";
		 //Prepare statement
		
		if(mysqli_query($mysqli,$INSERT)){
			echo "Inserted Successfully";
    	
         } else {
		 
		  echo "Not Inserted";
		 
		 }
	}
	
	
	function get_records(){
		global $mysqli;
		$Application_No=$_POST['App'];
		$query="select Application_No,Feesstruture from edunew1 where Application_No='$Application_No'";
		$result=mysqli_query($mysqli,$query);
		$row = mysqli_fetch_array($result);  
		echo json_encode($row);  
	} 
	
	function get_records21(){
		global $mysqli;
		$Application_No=$_POST['App'];
		$query="select Application_No,Fees_Structure from edunew2 where Application_No='$Application_No'";
		$result=mysqli_query($mysqli,$query);
		$row = mysqli_fetch_array($result);  
		echo json_encode($row);  
	} 
	
	function get_records31(){
		global $mysqli;
		$Application_No=$_POST['App'];
		$query="select Application_No,Feesstruture from edunew3 where Application_No='$Application_No'";
		$result=mysqli_query($mysqli,$query);
		$row = mysqli_fetch_array($result);  
		echo json_encode($row);  
	}

	
	
	function get_records41(){
		global $mysqli;
		$Application_No=$_POST['App'];
		$query="select Application_No,Feesstruture from edunew4 where Application_No='$Application_No'";
		$result=mysqli_query($mysqli,$query);
		$row = mysqli_fetch_array($result);  
		echo json_encode($row);  
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
		$value='
		<div class="row">
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
								  <th style="width: 10%">Course</th>
								  <th style="width: 10%">Duration</th>
								  <th style="width: 10%">Fees Structure </th>
								  <th style="width: 5%">Year</th>
								  <th style="width: 10%">Marks </th>
								  <th style="width: 10%">Arrears</th>
								  <th style="width: 10%">Date of Sanctioned</th>
								  <th style="width: 10%">Amount Sanctioned</th>
								  <th style="width: 10%">Update</th>
								  <th style="width: 10%">Edit</th>
								  <th style="width: 10%">Remarks</th>
								</tr>
							  </thead>
							  <tbody>';
								
								if(true){	
									$sql = "SELECT * FROM edunew1
									INNER JOIN edu ON edunew1.Adhaarnumber=edu.Adhaarnumber Where edunew1.Adhaarnumber  = '$Adhaar' ;

									";
									  $result = $mysqli->query($sql);
									  if ($result->num_rows > 0) {
									   
									   while($row = $result->fetch_assoc()) {
										$value.="<tr><td>" . $row["Application_No"]. "</td><td>". $row["Courseapplied"] ."</td><td>" . $row["Courseduration"] . "</td><td>" . $row["Feesstruture"] . "</td><td>1</td><td>". $row["Marksobtained"] . "</td><td></td>";
										$value.='<td>' . $row["dateofsanctioned"] . '</td><td>' . $row["Amountsanctioned"]. '</td>';
										$value.='<td><img alt="no image" id="myImg" class="myImg' . $row["Application_No"]. '" src="data:image/jpeg;base64,'.base64_encode($row['image'] ).'" height="60" width="75" class="img-thumbnail" /></td>';
										$value.='<td><button  class="btn btn-info btn-xs" id="editfrm"  data-id='.$row["Application_No"].'><i class="fa fa-pencil"></i> Edit </button></td><td></td></tr>';
									
									}
									  }else{
										  $value.="";
									  }
									
									$sql1 = "SELECT * FROM edunew2
									INNER JOIN edu ON edunew2.Adhaarnumber=edu.Adhaarnumber Where edunew2.Adhaarnumber  = '$Adhaar' ;

									";
									  $result1 = $mysqli->query($sql1);
									  if ($result1->num_rows > 0) {
									   
									   while($row1 = $result1->fetch_assoc()) {
										$value.="<tr><td rowspan='2'><br><br>" . $row1["Application_No"]. "</td><td rowspan='2'><br><br>". $row1["courseapplied"] ."</td><td rowspan='2'><br><br>" . $row1["courseduration"] . "</td><td rowspan='2'>" . $row1["Fees_Structure"] . "</td><td>1</td><td>". $row1["Marksobtained"] . "</td><td></td>";
										$value.='<td>' . $row1["dateofsanctioned"] . '</td><td>' . $row1["Amountsanctioned"]. '</td>';
										$value.='<td><img alt="no image" id="myImg" class="myImg' . $row1["Application_No"]. '" src="data:image/jpeg;base64,'.base64_encode($row1['image2'] ).'" height="60" width="75" class="img-thumbnail" /></td>';
										$value.='<td><button  class="btn btn-info btn-xs" id="editfrm21"  data-id='.$row1["Application_No"].'><i class="fa fa-pencil"></i> Edit </button></td><td></td></tr>';
										$value.="<tr><td>2</td><td></td><td></td>";
										$value.='<td>' . $row1["dateofsanctioned2"] . '</td><td>' . $row1["Amountsanctioned1"]. '</td>';
										$value.='<td><img alt="no image" id="myImg" class="myImg' . $row1["Application_No"]. '" src="data:image/jpeg;base64,'.base64_encode($row1['image21'] ).'" height="60" width="75" class="img-thumbnail" /></td>';
										$value.='<td><button  class="btn btn-info btn-xs" id="editfrm22"  data-id='.$row1["Application_No"].'><i class="fa fa-pencil"></i> Edit </button></td><td></td></tr>';
									  
									  }
									}else{
										$value.="";
									}
									$sql2 = "SELECT * FROM edunew3
									INNER JOIN edu ON edunew3.Adhaarnumber=edu.Adhaarnumber Where edunew3.Adhaarnumber  = '$Adhaar' ;

									";
									  $result2 = $mysqli->query($sql2);
									  if ($result2->num_rows > 0) {
									   
									   while($row = $result2->fetch_assoc()) {
										$value.="<tr><td rowspan='3'><br><br><br>" . $row["Application_No"]. "</td><td rowspan='3'><br><br><br>". $row["courseapplied"] ."</td><td rowspan='3'>" . $row["courseduration"] . "</td><td rowspan='3'>" . $row["Feesstruture"] . "</td><td>1</td><td>". $row["marksobtained"] . "</td><td></td>";
										$value.='<td>' . $row["dateofsanctioned"] . '</td><td>' . $row["amountsanctioned"]. '</td>';
										$value.='<td><img alt="no image" id="myImg" class="myImg' . $row["Application_No"]. '" src="data:image/jpeg;base64,'.base64_encode($row['image3'] ).'" height="60" width="75" class="img-thumbnail" /></td>';
										$value.='<td><button  class="btn btn-info btn-xs" id="editfrm31"  data-id='.$row["Application_No"].'><i class="fa fa-pencil"></i> Edit </button></td><td></td></tr>';
										$value.="<tr><td>2</td><td></td><td></td>";
										$value.='<td>' . $row["dateofsanctioned1"] . '</td><td>' . $row["amountsanctioned"]. '</td>';
										$value.='<td><img alt="no image" id="myImg" class="myImg' . $row["Application_No"]. '" src="data:image/jpeg;base64,'.base64_encode($row['image31'] ).'" height="60" width="75" class="img-thumbnail" /></td>';
										$value.='<td><button  class="btn btn-info btn-xs" id="editfrm32"  data-id='.$row["Application_No"].'><i class="fa fa-pencil"></i> Edit </button></td><td></td></tr>';
										$value.="<tr><td>3</td><td></td><td></td>";
										$value.='<td>' . $row["dateofsanctioned2"] . '</td><td>' . $row["amountsanctioned"]. '</td>';
										$value.='<td><img alt="no image" id="myImg" class="myImg' . $row["Application_No"]. '" src="data:image/jpeg;base64,'.base64_encode($row['image32'] ).'" height="60" width="75" class="img-thumbnail" /></td>';
										$value.='<td><button  class="btn btn-info btn-xs" id="editfrm33"  data-id='.$row["Application_No"].'><i class="fa fa-pencil"></i> Edit </button></td><td></td></tr>';
									}
									  }else{
										  $value.="";
									  }
									  $sql3 = "SELECT * FROM edunew4
									INNER JOIN edu ON edunew4.Adhaarnumber=edu.Adhaarnumber Where edunew4.Adhaarnumber  = '$Adhaar' ;

									";
									  $result3 = $mysqli->query($sql3);
									  if ($result3->num_rows > 0) {
									   
									   while($row = $result3->fetch_assoc()) {
										$value.="<tr><td rowspan='4'><br><br><br><br>" . $row["Application_No"]. "</td><td rowspan='4'><br><br><br><br>". $row["courseapplied"] ."</td><td rowspan='4'>" . $row["courseduration"] . "</td><td rowspan='4'>" . $row["Feesstruture"] . "</td><td>1</td><td>". $row["marksobtained"] . "</td><td></td>";
										$value.='<td>' . $row["dateoftransaction"] . '</td><td>' . $row["amountsanctioned"]. '</td>';
										$value.='<td><img alt="no image" id="myImg" class="myImg' . $row["Application_No"]. '" src="data:image/jpeg;base64,'.base64_encode($row['image4'] ).'" height="60" width="75" class="img-thumbnail" /></td>';
										$value.='<td><button  class="btn btn-info btn-xs" id="editfrm41"  data-id='.$row["Application_No"].'><i class="fa fa-pencil"></i> Edit </button></td><td></td></tr>';
										$value.="<tr><td>2</td><td></td><td></td>";
										$value.='<td>' . $row["dateoftransaction1"] . '</td><td>' . $row["amountsanctioned1"]. '</td>';
										$value.='<td><img alt="no image" id="myImg" class="myImg' . $row["Application_No"]. '" src="data:image/jpeg;base64,'.base64_encode($row['image41'] ).'" height="60" width="75" class="img-thumbnail" /></td>';
										$value.='<td><button  class="btn btn-info btn-xs" id="editfrm42"  data-id='.$row["Application_No"].'><i class="fa fa-pencil"></i> Edit </button></td><td></td></tr>';
										$value.="<tr><td>3</td><td></td><td></td>";
										$value.='<td>' . $row["dateoftransaction2"] . '</td><td>' . $row["amountsanctioned2"]. '</td>';
										$value.='<td><img alt="no image" id="myImg" class="myImg' . $row["Application_No"]. '" src="data:image/jpeg;base64,'.base64_encode($row['image42'] ).'" height="60" width="75" class="img-thumbnail" /></td>';
										$value.='<td><button  class="btn btn-info btn-xs" id="editfrm43"  data-id='.$row["Application_No"].'><i class="fa fa-pencil"></i> Edit </button></td><td></td></tr>';
										$value.="<tr><td>4</td><td></td><td></td>";
										$value.='<td>' . $row["dateoftransaction3"] . '</td><td>' . $row["amountsanctioned3"]. '</td>';
										$value.='<td><img alt="no image" id="myImg" class="myImg' . $row["Application_No"]. '" src="data:image/jpeg;base64,'.base64_encode($row['image43'] ).'" height="60" width="75" class="img-thumbnail" /></td>';
										$value.='<td><button  class="btn btn-info btn-xs" id="editfrm44"  data-id='.$row["Application_No"].'><i class="fa fa-pencil"></i> Edit </button></td><td></td></tr>';
									}
									  }else{
										  $value.="";
									  }
									
							echo $value;
								} else 
									{ 
									echo $valu; 
									}
									$mysqli->close();
							
								
							  
							
	}
	
	
	function update1(){
		if($_POST["action"] == "insert"){
		global $mysqli;
		$Application_No = $_POST['Up_App1'];
		$Date_of_transaction = $_POST['dot1'];
		$Marks = $_POST['Up_marks1'];
		$Amount_Sanctioned = $_POST['Up_Amount1'];
		$file = addslashes(file_get_contents($_FILES["Up_marksheet1"]["tmp_name"]));
		if($Application_No!= '')  
      {  
           $query = "  
           UPDATE edunew1   
           SET dateofsanctioned='$Date_of_transaction',   
           Marksobtained='$Marks',
		   Amountsanctioned='$Amount_Sanctioned',
		   image='$file'
           WHERE Application_No='$Application_No';"; 
		 
		   if(mysqli_query($mysqli,$query)){
			   echo "Updated";
		   }else{
			   echo "sorry";
		   }
	  }
      } 
	}
	
	function update2(){
		global $mysqli;
		$Application_No = $_POST['Up_App2'];
		$Date_of_transaction = $_POST['dot2'];
		$Marks = $_POST['Up_marks2'];
		$Amount_Sanctioned = $_POST['Up_Amount2'];
		$file = addslashes(file_get_contents($_FILES["Up_marksheet2"]["tmp_name"]));
		if($Application_No!= '')  
      {  
           $query = "  
           UPDATE edunew2   
           SET dateofsanctioned='$Date_of_transaction',   
           Marksobtained='$Marks',
		   Amountsanctioned='$Amount_Sanctioned',
		   image2='$file'
           WHERE Application_No='$Application_No';"; 
	
		   if(mysqli_query($mysqli,$query)){
			   echo "Updated";
		   }else{
			   echo "sorry";
		   }
      } 
	}
	
	function update3(){
		global $mysqli;
		$Application_No = $_POST['Up_App21'];
		$Date_of_transaction = $_POST['dot21'];
		$Arrear = $_POST['Up_Arrear21'];
		$Marks1 = $_POST['Up_marks21'];
		$Amount_Sanctioned = $_POST['Up_Amount21'];
		$file = addslashes(file_get_contents($_FILES["Up_marksheet21"]["tmp_name"]));
		if($Application_No!= '')  
      {  
           $query = "  
           UPDATE edunew2   
           SET dateofsanctioned2='$Date_of_transaction',   
           Amountsanctioned1='$Amount_Sanctioned',
		   Marksobtained1='$Marks1',
		   arrears='$Arrear',
		   image21='$file'
           WHERE Application_No='$Application_No';";
		   if(mysqli_query($mysqli,$query)){
			   echo "Updated";
		   }else{
			   echo "sorry";
		   }
      } 
	}
	
	function update4(){
		global $mysqli;
		$Application_No = $_POST['Up_App31'];
		$Date_of_transaction = $_POST['dot31'];
		$Marks = $_POST['Up_marks31'];
		$Amount_Sanctioned = $_POST['Up_Amount31'];
		$file = addslashes(file_get_contents($_FILES["Up_marksheet31"]["tmp_name"]));
		if($Application_No!= '')  
      {  
           $query = "  
           UPDATE edunew3   
           SET dateofsanctioned='$Date_of_transaction',
			marksobtained='$Marks',		   
           Amountsanctioned='$Amount_Sanctioned',
		   image3='$file'
           WHERE Application_No='$Application_No';"; 
		   if(mysqli_query($mysqli,$query)){
			   echo "Updated";
		   }else{
			   echo "sorry";
		   }
      } 
	}
	
	function update5(){
		global $mysqli;
		$Application_No = $_POST['Up_App32'];
		$Date_of_transaction = $_POST['dot32'];
		$Arrear = $_POST['Up_Arrear32'];
		$Marks1 = $_POST['Up_marks32'];
		$Amount_Sanctioned = $_POST['Up_Amount32'];
		$file = addslashes(file_get_contents($_FILES["Up_marksheet32"]["tmp_name"]));
		if($Application_No!= '')  
      {  
           $query = "  
           UPDATE edunew3   
           SET dateofsanctioned1='$Date_of_transaction',   
           Amountsanctioned1='$Amount_Sanctioned',
           marksobtained1='$Marks1',
		   arrears='$Arrear',
		   image31='$file'
		   WHERE Application_No='$Application_No';"; 
		   if(mysqli_query($mysqli,$query)){
			   echo "Updated";
		   }else{
			   echo "sorry";
		   }
      } 
	}
	
	function update6(){
		global $mysqli;
		$Application_No = $_POST['Up_App33'];
		$Date_of_transaction = $_POST['dot33'];
		$Arrear1 = $_POST['Up_Arrear33'];
		$Marks2 = $_POST['Up_marks33'];
		$Amount_Sanctioned = $_POST['Up_Amount33'];
		$file = addslashes(file_get_contents($_FILES["Up_marksheet33"]["tmp_name"]));
		if($Application_No!= '')  
      {  
           $query = "  
           UPDATE edunew3   
           SET dateofsanctioned2='$Date_of_transaction',   
           Amountsanctioned2='$Amount_Sanctioned',
           marksobtained2='$Marks2',
		   arrears1='$Arrear1',
		   image32='$file'
		   WHERE Application_No='$Application_No';"; 
		   if(mysqli_query($mysqli,$query)){
			   echo "Updated";
		   }else{
			   echo "sorry";
		   }
      } 
	}
	
	function update7(){
		global $mysqli;
		$Application_No = $_POST['Up_App41'];
		$Date_of_transaction = $_POST['dot41'];
		$Marks = $_POST['Up_marks41'];
		$Amount_Sanctioned = $_POST['Up_Amount41'];
		$file = addslashes(file_get_contents($_FILES["Up_marksheet41"]["tmp_name"]));
		if($Application_No!= '')  
      {  
           $query = "  
           UPDATE edunew4   
           SET dateoftransaction='$Date_of_transaction',
		    marksobtained='$Marks',		   
           Amountsanctioned='$Amount_Sanctioned',
		   image4='$file'
           WHERE Application_No='$Application_No';"; 
		   if(mysqli_query($mysqli,$query)){
			   echo "Updated";
		   }else{
			   echo "sorry";
		   }
      } 
	}
	
	function update8(){
		global $mysqli;
		$Application_No = $_POST['Up_App42'];
		$Date_of_transaction = $_POST['dot42'];
		$Arrear = $_POST['Up_Arrear42'];
		$Marks1 = $_POST['Up_marks42'];
		$Amount_Sanctioned = $_POST['Up_Amount42'];
		$file = addslashes(file_get_contents($_FILES["Up_marksheet42"]["tmp_name"]));
		if($Application_No!= '')  
      {  
           $query = "  
           UPDATE edunew4   
           SET dateoftransaction1='$Date_of_transaction',   
           Amountsanctioned1='$Amount_Sanctioned',
		   marksobtained1='$Marks1',
           arrears='$Arrear',
		   image41='$file'
		   WHERE Application_No='$Application_No';"; 
		   if(mysqli_query($mysqli,$query)){
			   echo "Updated";
		   }else{
			   echo "sorry";
		   }
      } 
	}
	
	function update9(){
		global $mysqli;
		$Application_No = $_POST['Up_App43'];
		$Date_of_transaction = $_POST['dot43'];
		$Arrear1 = $_POST['Up_Arrear43'];
		$Marks2 = $_POST['Up_marks43'];
		$Amount_Sanctioned = $_POST['Up_Amount43'];
		$file = addslashes(file_get_contents($_FILES["Up_marksheet43"]["tmp_name"]));
		if($Application_No!= '')  
      {  
           $query = "  
           UPDATE edunew4   
           SET dateoftransaction2='$Date_of_transaction',   
           Amountsanctioned2='$Amount_Sanctioned',
		   marksobtained2='$Marks2',
		   arrears1='$Arrear1',
		   image42='$file'
           WHERE Application_No='$Application_No';"; 
		   if(mysqli_query($mysqli,$query)){
			   echo "Updated";
		   }else{
			   echo "sorry";
		   }
      } 
	}
	
	function update10(){
		global $mysqli;
		$Application_No = $_POST['Up_App44'];
		$Date_of_transaction = $_POST['dot44'];
		$Arrear2 = $_POST['Up_Arrear44'];
		$Marks3 = $_POST['Up_marks44'];
		$Amount_Sanctioned = $_POST['Up_Amount44'];
		$file = addslashes(file_get_contents($_FILES["Up_marksheet44"]["tmp_name"]));
		if($Application_No!= '')  
      {  
           $query = "  
           UPDATE edunew4   
           SET dateoftransaction3='$Date_of_transaction',   
           Amountsanctioned3='$Amount_Sanctioned',
		   marksobtained3='$Marks3',
		   arrears2='$Arrear2',
		   image43='$file'
           WHERE Application_No='$Application_No';"; 
		   if(mysqli_query($mysqli,$query)){
			   echo "Updated";
		   }else{
			   echo "sorry";
		   }
      } 
	}

	
?>
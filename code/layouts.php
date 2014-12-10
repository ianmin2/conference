<?php

chdir("../");
	$id = "index.php";
	$connect = true;
	include 'r_main.php';
chdir('code');

	$action = $_REQUEST["action"];
	
	switch ($action) {

//Add Atendee Layout Displayer
		case 'atendees':
$val = '
		<div class="alert alert-success alert-bold-border block-center fade in alert-dismissable" >
			<input type="text" id="_name" placeholder="Guest Name" style="min-width: 200px; min-height: 35px; text-align: center;" > 
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="_age" placeholder="Guest Age" style="min-width: 200px; min-height: 35px; text-align: center;" >
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="_telephone" placeholder="Guest Telephone" style="min-width: 200px; min-height: 35px; text-align: center;" >
			
			<br><br><input type="text" id="_church" placeholder="Church" style="min-width: 200px; min-height: 35px; text-align: center;" > 
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="_division" placeholder="Church Conference" style="min-width: 200px; min-height: 35px; text-align: center;" >
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select id="_gender" style="min-width: 200px; min-height: 35px; text-align: center;">
				<option value="" selected >Gender</option>
				<option value="M" >Male</option>
				<option value="F">Female</option>
			</select>
			
			<br><br><input type="text" id="_email" placeholder="email address" style="min-width: 200px; min-height: 35px; text-align: center;" >
			
			<br><br><input type="button" style="min-height: 35px;" class="btn btn-success" value="Add Guest" id="addAtendee"> 
			<div id="response"></div>
		</div>
		';
echo ($val);
		break;

//Add workshop layout displayer
		case 'workshops':
$val = '
		<div class="alert alert-info alert-bold-border block-center fade in alert-dismissable" >
			<input type="text" id="_name" placeholder="Workshop Name" style="min-width: 200px; min-height: 35px; text-align: center;" > 
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="_topic" placeholder="Topic" style="min-width: 200px; min-height: 35px; text-align: center;" >
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="_day" placeholder="Date" style="min-width: 200px; min-height: 35px; text-align: center;" >
			
			<br><br><select id="_time" style="min-width: 200px; min-height: 35px; text-align: center;">
				<option value="" selected >Workshop Time </option>
				<option value="0500HRS" >05:00</option>			
				<option value="0600HRS" >06:00</option>
				<option value="0700HRS" >07:00</option>
				<option value="0800HRS" >08:00</option>
				<option value="0900HRS" >09:00</option>
				<option value="1000HRS" >10:00</option>
				<option value="1100HRS" >11:00</option>
				<option value="1200HRS" >12:00</option>
				<option value="1300HRS" >13:00</option>
				<option value="1400HRS" >14:00</option>
				<option value="1500HRS" >15:00</option>
				<option value="1600HRS" >16:00</option>
				<option value="1700HRS" >17:00</option>
				<option value="1800HRS" >18:00</option>
				<option value="1900HRS" >19:00</option>
				<option value="2000HRS" >20:00</option>
				<option value="2100HRS" >21:00</option>
				<option value="2200HRS" >22:00</option>			
			</select>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select id="_facilitator" style="min-width: 200px; min-height: 35px; text-align: center;">
				<option value="" selected >Facilitator </option>';
				
			   
			       $query = $connection->query("SELECT * FROM facilitators");
			       while ($data = mysqli_fetch_array($query)) {
			           $val .= '<option value="'.$data['id'].'"  >'.$data['_name'].'</option>';
			      }
			 
				
		$val .= '	</select>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select id="_room" style="min-width: 200px; min-height: 35px; text-align: center;">
				<option value="" selected >Room | venue </option>';
		 
			       $query = $connection->query("SELECT * FROM rooms ");
			       while ($data = mysqli_fetch_array($query)) {
			            $val .= '<option value="'.$data['id'].'"  >'.$data['_name'].'</option>';
			      }
   				
			$val .= '</select>
			
			<br><br><textarea rows="7" cols="91" id="_description" style="padding: 10px;" placeholder="Workshop description"></textarea>
			
			<br><br><input type="button" style="min-height: 35px;" class="btn btn-primary" value="Add Workshop" id="addWorkshop"> 
			<div id="response"></div>
		</div>';
echo ($val);
		break;
		
//Add Facilitator display handler
		case 'facilitators':
$val = <<<EOF
<div class="alert alert-danger alert-bold-border block-center fade in alert-dismissable" >
	<input type="text" id="_name" placeholder="Facilitator Name" style="min-width: 200px; min-height: 35px; text-align: center;" > 
	<input type="button" style="min-height: 35px;" class="btn btn-danger" value="Add Facilitator" id="addFacilitator">
	<div id="response"></div> 
</div>
EOF;
echo ($val);
		break;
		
//Add Room display handler
		case 'rooms':
$val = '
<form action="#" class="addRoom">
<!-- Adding Rooms -->
<div class="alert alert-warning alert-bold-border block-center fade in alert-dismissable" >
	<input type="text" id="_name" placeholder="Room name/title" style="min-width: 200px; min-height: 35px; text-align: center;" > 
	<input type="button" style="min-height: 35px;" class="btn btn-warning" value="Add Room" id="addRoom"> 
	<div id="response"></div>
</div>
</form>
';
echo ($val);
		break;

//Undefined display request handler
		default:
$val = <<<EOF
<div class="alert alert-danger alert-bold-border block-center fade in alert-dismissable" >
	<div><code>FAILED TO LOAD REQUESTED RESOURCE!</code></div>
</div>
EOF;
echo ($val);
		break;
	}

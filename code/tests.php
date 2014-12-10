<?php
	
	require_once 'conference.php';
	$c = new conference();

?>
<!-- BOOTSTRAP CSS (REQUIRED ALL PAGE)-->
		<link href="assets/css/bootstrap.min.css" rel="stylesheet">
		
		<!-- PLUGINS CSS -->
		
		<link href="assets/plugins/morris-chart/morris.min.css" rel="stylesheet">
				
		<!-- MAIN CSS (REQUIRED ALL PAGE)-->
		<link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
		<link href="assets/css/style.css" rel="stylesheet">
		<link href="assets/css/style-responsive.css" rel="stylesheet">
        <link href="assets/css/custom.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/plugins/jquery-ui/jquery-ui.min.css">
		<link rel="stylesheet" href="assets/plugins/jquery-ui/jquery-ui.theme.min.css">
 <!-- MAIN JAVASRCIPT (REQUIRED ALL PAGE)-->
		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/plugins/retina/retina.min.js"></script>
		<script src="assets/plugins/nicescroll/jquery.nicescroll.js"></script>
		<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
		<script src="assets/plugins/backstretch/jquery.backstretch.min.js"></script>
               
		<!-- PLUGINS -->
	
		<!-- MORRIS JS -->
		<script src="assets/plugins/morris-chart/raphael.min.js"></script>
		<script src="assets/plugins/morris-chart/morris.min.js"></script>
		<script src="assets/plugins/jquery-ui/jquery-ui.min.js"></script>
		
		<!-- MAIN APPS JS -->
		<script src="assets/js/apps.js"></script>
		<style>
		
			.border{
				border: 1px solid #ccc;
			}
			
			.darkb{
				border: 1px solid #999; 
				font-weight: bold;
				text-align: center;
			}
		
		</style>
<!--  -->
<!--  -->
<div class="row ">				
<div class=" block-center  col-lg-11 container-fluid" >
	
	<div class="row ">
	<div class="col-lg-12">
	
		<div class="col-sm-1 bold">TIME</div>
		<div class="col-sm-2 bg-info">Sunday</div>
		<div class="col-sm-2 bg-success">Monday</div>
		<div class="col-sm-2 bg-primary">Tuesday</div>
		<div class="col-sm-2 bg-warning">Wednesday</div>
		<div class="col-sm-2 bg-danger">Thursday</div>
		<div class="col-sm-1 dark">Friday</div>
	
	</div>
	</div>
	
	
	<div class="row ">
	<!-- 5:00 - 5:45 Physical fitness -->
	<div class="col-lg-12 ">	
		<div class="col-sm-1 ">0500</div>
		<div class="col-sm-2 border">&nbsp;</div>
		<div class="col-sm-9 text-center border darker" style="color: gray !important;">Physical Fitness</div>	
	</div>
	</div>
	
	
	<div class="row ">
	<!-- 6:00 - 7:00 Devotion -->
	<div class="col-lg-12 ">	
		<div class="col-sm-1 darkb">0600</div>
		<div class="col-sm-2 ">&nbsp;</div>
		<div class="col-sm-9 text-center border bg-info">Devotion</div>	
	</div>
	</div>
	
	
	<div class="row ">
	<!-- 7:00 - 8:00 Breakfast -->
	<div class="col-lg-12 ">	
		<div class="col-sm-1  ">0700</div>
		<div class="col-sm-2 border">&nbsp;</div>
		<div class="col-sm-9 text-center border bg-success">Breakfast</div>	
	</div>
	</div>
	
	
	<div class="row ">
	<!-- 8:00 -9:00 Workshop -->
	<div class="col-lg-12">
	
		<div class="col-sm-1 darkb">0800</div>
		<div class="col-sm-2 text-center">ARRIVAL</div>
		<div class="col-sm-2 border  text-danger"><select id="_w1a"><option selected>Workshop 1a</option> 
			<?php
				$pl = $c->getWorkshops("0800HRS", "12/22/2014");
				$p = $pl["data"]["message"];
				
				foreach($p as $v ){
					echo '<option value="'.$v['_room'].'">'.$v['_name'].'</option>';
				}
			?>
		</select></div>
		<div class="col-sm-2 border  text-danger"><select id="_w3a"><option selected>Workshop 3a</option> 
			<?php
				$pl = $c->getWorkshops("0800HRS", "12/23/2014");
				$p = $pl["data"]["message"];
				
				foreach($p as $v ){
					echo '<option value="'.$v['_room'].'">'.$v['_name'].'</option>';
				}
			?>
		</select></div>
		<div class="col-sm-2 border  text-danger"><select id="_w5a"><option selected>Workshop 5a</option> 
			<?php
				$pl = $c->getWorkshops("0800HRS", "12/24/2014");
				$p = $pl["data"]["message"];
				
				foreach($p as $v ){
					echo '<option value="'.$v['_room'].'">'.$v['_name'].'</option>';
				}
			?>
		</select></div>
		<div class="col-sm-2 dark darkb">&nbsp;</div>
		<div class="col-sm-1 border  text-danger"><select id="_w7a"><option selected>Workshop 7a</option> 
			<?php
				$pl = $c->getWorkshops("0800HRS", "12/27/2014");
				$p = $pl["data"]["message"];
				
				foreach($p as $v ){
					echo '<option value="'.$v['_room'].'">'.$v['_name'].'</option>';
				}
			?>
		</select></div>
	
	</div>
	</div>
	
	<div class="row ">
	<!-- 9:00 - 10:00 Workshop -->
	<div class="col-lg-12">
	
		<div class="col-sm-1 ">0900</div>
		<div class="col-sm-2 border">&nbsp;</div>
			<div class="col-sm-2 border  text-danger"><select id="_w1b"><option selected>Workshop 1b</option> 
			<?php
				$pl = $c->getWorkshops("0900HRS", "12/22/2014");
				$p = $pl["data"]["message"];
				
				foreach($p as $v ){
					echo '<option value="'.$v['_room'].'">'.$v['_name'].'</option>';
				}
			?>
			</select></div>
		<div class="col-sm-2 border  text-danger"><select id="_w3b"><option selected>Workshop 3b</option> 
			<?php
				$pl = $c->getWorkshops("0900HRS", "12/23/2014");
				$p = $pl["data"]["message"];
				
				foreach($p as $v ){
					echo '<option value="'.$v['_room'].'">'.$v['_name'].'</option>';
				}
			?>
		</select></div>
		<div class="col-sm-2 border  text-danger"><select id="_w5b"><option selected>Workshop 5b</option> 
			<?php
				$pl = $c->getWorkshops("0900HRS", "12/24/2014");
				$p = $pl["data"]["message"];
				
				foreach($p as $v ){
					echo '<option value="'.$v['_room'].'">'.$v['_name'].'</option>';
				}
			?>
		</select></div>
		<div class="col-sm-2 dark darkb">&nbsp;</div>
		<div class="col-sm-1 border  text-danger"><select id="_w7b"><option selected>Workshop 7b</option>
			<?php
				$pl = $c->getWorkshops("0900HRS", "12/26/2014");
				$p = $pl["data"]["message"];
				
				foreach($p as $v ){
					echo '<option value="'.$v['_room'].'">'.$v['_name'].'</option>';
				}
			?>
		</select></div>
	
	</div>
	</div>
	
	
	<div class="row ">
	<!-- 10:00 -10:15 Break -->
	<div class="col-lg-12">
	
		<div class="col-sm-1 darkb">1000</div>
		<div class="col-sm-2 text-center">&</div>
		<div class="col-sm-2 dark darkb">Break</div>
		<div class="col-sm-2 dark darkb">Songspiration</div>
		<div class="col-sm-2 dark darkb" >Break</div>
		<div class="col-sm-2 dark darkb text-center"  >TOURS,</div>
		<div class="col-sm-1 dark darkb">Break</div>
	
	</div>
	</div>
	
	
	<div class="row ">
	<!-- 10:15 - 11:15 Plenary -->
	<div class="col-lg-12">
	
		<div class="col-sm-1 ">1015</div>
		<div class="col-sm-2 border ">&nbsp;</div>
		<div class="col-sm-2 border  text-primary"><select id="_p1"><option selected>lPenary 1</option>
			<?php
				$pl = $c->getWorkshops("1015HRS", "12/22/2014");
				$p = $pl["data"]["message"];
				
				foreach($p as $v ){
					echo '<option value="'.$v['_room'].'">'.$v['_name'].'</option>';
				}
			?>
		</select></div>
		<div class="col-sm-2 dark darkb">&nbsp</div>
		<div class="col-sm-2 border  text-primary"><select id="_p4"><option selected>Plenary 4</option>
			<?php
				$pl = $c->getWorkshops("1015HRS", "12/24/2014");
				$p = $pl["data"]["message"];
				
				foreach($p as $v ){
					echo '<option value="'.$v['_room'].'">'.$v['_name'].'</option>';
				}
			?>
		</select></div>
		<div class="col-sm-2 dark darkb">&nbsp;</div>
		<div class="col-sm-1 border">let's talk</div>
	
	</div>
	</div>
	
	
	<div class="row ">
	<!-- 11:15 - 11:45 session -->
	<div class="col-lg-12">
	
		<div class="col-sm-1 darkb">1115</div>
		<div class="col-sm-2 text-center">REGISTRATION</div>
		<div class="col-sm-2 border bg-info">songspiration</div>
		<div class="col-sm-2 dark darkb text-center">OFFICIAL OPENING</div>
		<div class="col-sm-2 border bg-info">songspiration</div>
		<div class="col-sm-2 dark darkb text-center">RECREATION</div>
		<div class="col-sm-1 border bg-info">songspiration</div>
	
	</div>
	</div>
	
	<div class="row ">
	<!-- 11:45 - 13:00 Power Hour & sessions -->
	<div class="col-lg-12">
	
		<div class="col-sm-1 ">1145</div>
		<div class="col-sm-2 border">&nbsp;</div>
		<div class="col-sm-2 border text-info bold text-center">Power Hour</div>
		<div class="col-sm-2 dark darkb">&nbsp</div>
		<div class="col-sm-2 border text-info bold text-center">Power Hour</div>
		<div class="col-sm-2 dark darkb">&nbsp;</div>
		<div class="col-sm-1 border text-info text-center">P.H</div>
	
	</div>
	</div>
	
	
	<div class="row ">
	<!-- 13:00 - 14:00 Lunch -->
	<div class="col-lg-12 ">	
		<div class="col-sm-1  darkb">1300</div>
		<div class="col-sm-2 ">&nbsp;</div>
		<div class="col-sm-6 text-center border bg-success">Lunch</div>	
		<div class="col-sm-2 border dark darkb text-center">&</div>
		<div class="col-sm-1 text-center border bg-success">Lunch</div>
	</div>
	</div>
	
	<div class="row ">
	<!-- 14:00 -15:00 workshop -->
	<div class="col-lg-12">
	
		<div class="col-sm-1 ">1400</div>
		<div class="col-sm-2 border">&nbsp;</div>
		<div class="col-sm-2 border  text-danger"><select id="_w2a"><option selected>Workshop 2a</option> 
			<?php
				$pl = $c->getWorkshops("1400HRS", "12/22/2014");
				$p = $pl["data"]["message"];
				
				foreach($p as $v ){
					echo '<option value="'.$v['_room'].'">'.$v['_name'].'</option>';
				}
			?>
		</select></div>
		<div class="col-sm-2 border  text-danger"><select id="_w4a"><option selected>Workshop 4a</option> 
			<?php
				$pl = $c->getWorkshops("1400HRS", "12/23/2014");
				$p = $pl["data"]["message"];
				
				foreach($p as $v ){
					echo '<option value="'.$v['_room'].'">'.$v['_name'].'</option>';
				}
			?>
		</select></div>
		<div class="col-sm-2 border  text-danger"><select id="_w6a"><option selected>Workshop 6a</option> 
			<?php
				$pl = $c->getWorkshops("1400HRS", "12/24/2014");
				$p = $pl["data"]["message"];
				
				foreach($p as $v ){
					echo '<option value="'.$v['_room'].'">'.$v['_name'].'</option>';
				}
			?>
		</select></div>
		<div class="col-sm-2 dark darkb">&nbsp;</div>
		<div class="col-sm-1 "></div>
	
	</div>
	</div>
	
	<div class="row ">
	<!-- 15:00 -16:00 workshop -->
	<div class="col-lg-12">
	
		<div class="col-sm-1 darkb">1500</div>
		<div class="col-sm-2 ">&nbsp;</div>
		<div class="col-sm-2 border  text-danger"><select id="_w2b"><option selected>Workshop 2b</option> 
			<?php
				$pl = $c->getWorkshops("1500HRS", "12/22/2014");
				$p = $pl["data"]["message"];
				
				foreach($p as $v ){
					echo '<option value="'.$v['_room'].'">'.$v['_name'].'</option>';
				}
			?>
		</select></div>
		<div class="col-sm-2 border  text-danger"><select id="_w4b"><option selected>Workshop 4b</option> 
			<?php
				$pl = $c->getWorkshops("1500HRS", "12/23/2014");
				$p = $pl["data"]["message"];
				
				foreach($p as $v ){
					echo '<option value="'.$v['_room'].'">'.$v['_name'].'</option>';
				}
			?>
		</select></div>
		<div class="col-sm-2 border  text-danger"><select id="_w6b"><option selected>Workshop 6b</option> 
			<?php
				$pl = $c->getWorkshops("1500HRS", "12/24/2014");
				$p = $pl["data"]["message"];
				
				foreach($p as $v ){
					echo '<option value="'.$v['_room'].'">'.$v['_name'].'</option>';
				}
			?>
		</select></div>
		<div class="col-sm-2 dark darkb text-center">SPORT</div>
		<div class="col-sm-1 text-center">COMMUNITY</div>
	
	</div>
	</div>
	
	<div class="row ">
	<!-- 16:00 -17:00 plenary -->
	<div class="col-lg-12">
	
		<div class="col-sm-1 ">1600</div>
		<div class="col-sm-2 border">&nbsp;</div>
		<div class="col-sm-2 border  text-primary"><select id="_p2"><option selected>Plenary 2</option> 
			<?php
				$pl = $c->getWorkshops("1600HRS", "12/22/2014");
				$p = $pl["data"]["message"];
				
				foreach($p as $v ){
					echo '<option value="'.$v['_room'].'">'.$v['_name'].'</option>';
				}
			?>
		</select></div>
		<div class="col-sm-2 border  text-primary"><select id="_p3"><option selected>Plenary 3</option> 
			<?php
				$pl = $c->getWorkshops("1600HRS", "12/23/2014");
				$p = $pl["data"]["message"];
				
				foreach($p as $v ){
					echo '<option value="'.$v['_room'].'">'.$v['_name'].'</option>';
				}
			?>
		</select></div>
		<div class="col-sm-2 border  text-primary"><select id="_p5"><option selected>Plenary 5</option> 
			<?php
				$pl = $c->getWorkshops("1600HRS", "12/24/2014");
				$p = $pl["data"]["message"];
				
				foreach($p as $v ){
					echo '<option value="'.$v['_room'].'">'.$v['_name'].'</option>';
				}
			?>
		</select></div>
		<div class="col-sm-2 dark darkb">&nbsp;</div>
		<div class="col-sm-1 text-center">IMPACT</div>
	
	</div>
	</div>
	
	
	<div class="row ">
	<!-- 17:00 -18:00 sports -->
	<div class="col-lg-12">	
		<div class="col-sm-1 darkb">1700</div>
		<div class="col-sm-2 ">&nbsp;</div>
		<div class="col-sm-6  dark darkb text-center">Sports</div>
		<div class="col-sm-2 dark darkb" >&nbsp;</div>
		<div class="col-sm-1 ">&nbsp;</div>	
	</div>
	</div>
	
	<div class="row ">
	<!-- 18:00 - 19:00 Dinner -->
	<div class="col-lg-12 ">	
		<div class="col-sm-1 ">1800</div>
		<div class="col-sm-11 text-center border bg-success">Dinner</div>	
	</div>
	</div>
	
	<div class="row ">
	<!-- 19:00 - 19:30 Union Reports -->
	<div class="col-lg-12 ">	
		<div class="col-sm-1  darkb">1900</div>
		<div class="col-sm-10 text-center border dark">Union reports (video)</div>
		<div class="col-sm-1 text-center border bg-info">MUSIC</div>	
	</div>
	</div>

	<div class="row ">
	<!-- 19:30 - 20:00 Union Reports -->
	<div class="col-lg-12 ">	
		<div class="col-sm-1  ">1930</div>
		<div class="col-sm-10 text-center border bg-info">Songspiration</div>
		<div class="col-sm-1 text-center border bg-info">Extravaganza</div>	
	</div>
	</div>
	
<div class="row">	
	<!-- 20:00 - 21:00 Breakfast -->
	<div class="col-lg-12 ">	
		<div class="col-sm-1  darkb">2000</div>
		<div class="col-sm-11 text-center border darker" style="color: gray !important;">Vespers</div>	
	</div>
</div>


</div>
	
</div>

<br><br>
<input type="button" id=""



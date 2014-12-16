<?php

chdir("../");
$id = "index.php";
$connect = true;
include 'r_main.php';
chdir('code');

  
?>

<!DOCTYPE html>
<html lang="en" manifest="cache.appcache">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta name="description" content="SDA YOUTH CONFERENCE BARATON">
		<meta name="keywords" content="SDA, SDA Youth, AYS, Seventh Day Adventist Church, Adventist Youth Society Kenya, Youth conference 2014">
		<meta name="author" content="The Connection, IE Global, Iarasoft, let's code, Ian Innocent">
        <link rel="icon" href="favicon.ico">
        
		<title>ECD Youth Retreat| Guest Management </title>
 
		<!-- BOOTSTRAP CSS (REQUIRED ALL PAGE)-->
		<link href="assets/css/bootstrap.min.css" rel="stylesheet">
		
		<!-- PLUGINS CSS -->
		
		<link href="assets/plugins/morris-chart/morris.min.css" rel="stylesheet">
				
		<!-- MAIN CSS (REQUIRED ALL PAGE)-->
		<link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
		<link href="assets/css/style.css" rel="stylesheet">
		<link href="assets/css/style-responsive.css" rel="stylesheet">
        <link href="assets/css/custom.css" rel="stylesheet">
 
 		<script src="assets/js/jquery.min.js"></script>
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
 
	<body class="tooltips">
		
			
		
		<!--
		===========================================================
		BEGIN PAGE
		===========================================================
		-->
		<div class="wrapper">
			 
			 <!-- BEGIN TOP NAV -->
			<div class="top-navbar">
				<div class="top-navbar-inner">
					
					<!-- Begin Logo brand -->
					<div class="logo-brand">
						<a href="index.html"><img src="assets/img/sentir-logo-primary.png" alt="UEAB|Room Reservation"></a>
					</div><!-- /.logo-brand -->
					<!-- End Logo brand -->
					
					<div class="top-nav-content no-right-sidebar">
						
						<!-- Begin button sidebar left toggle -->
						<div class="btn-collapse-sidebar-left">
							<i class="fa fa-align-justify "></i>
						</div><!-- /.btn-collapse-sidebar-left -->
						<!-- End button sidebar left toggle -->
											
						
						<!-- Begin user session nav -->
						<ul class="nav-user navbar-right full">
							<li class="dropdown">
							  <a href="#notYet" class="dropdown-toggle" data-toggle="dropdown">
								<img src="assets/img/avatar/avatar-1.jpg" class="avatar img-circle" alt="Avatar">
                                                              
                                                                Hi, <strong style="text-transform: uppercase;">ADMIN</strong>
							  </a>
							  <ul class="dropdown-menu square primary margin-list-rounded with-triangle">
                                                              <li ><a href="#notYet" >Guest management</a></li>
                                                              	<li class="divider"></li>                                                                
                                                              <li><a href="proc.php?action=logout">Log out</a></li>
							  </ul>
							</li>
						</ul>
						<!-- End user session nav -->
						
						<!-- Begin Collapse menu nav -->
						<div class=" collapse navbar-collapse" id="main-fixed-nav">
							<!-- Begin nav search form -->
							<form class="navbar-form navbar-left" role="search">
								<div class="form-group">
									<code style="font-family:Courier New, Courier, monospace; font-size: 20px; font-weight: bold; color: green;text-shadow: 1px 1px blue;  ">ECD Youth Conference Management</code>
									<!-- <input type="text" id="search" class="form-control" placeholder="search for person">  -->
								</div>
							</form>
							<!-- End nav search form -->
                                                        
							
								
                                                                        
                                                </div><!-- /.navbar-collapse -->
						<!-- End Collapse menu nav -->
					</div><!-- /.top-nav-content -->
				</div><!-- /.top-navbar-inner -->
			</div><!-- /.top-navbar -->
			<!-- END TOP NAV -->
			
			
			
			<!-- BEGIN SIDEBAR LEFT -->
			<div class="sidebar-left sidebar-nicescroller">
				<ul class="sidebar-menu ">
					<li class=" active "><a href="#"><i class="fa fa-dashboard icon-sidebar"></i>DASHBOARD</a></li>
                                        <li><a href="#"><i class="fa fa-group icon-sidebar"></i>ATENDEES</a></li>
                                        <li><a href="#"><i class="fa fa-clock-o icon-sidebar"></i>WORKSHOPS</a></li>
                                        <li><a href="#"><i class="fa fa-user icon-sidebar"></i>FACILITATORS</a></li>
                                        <li><a href="#"><i class="fa fa-home icon-sidebar"></i>ROOMS</a></li>
                                        
					<li class=" ">
						<a href="#fakelink">
							<i class="fa fa-desktop icon-sidebar"></i>
							<i class="fa fa-angle-right chevron-icon-sidebar"></i>
							SETTINGS
							
							</a>
						<ul class="submenu">
							<li><a href="#link1">***</a></li>
							<li><a href="#link2">***</a></li>
							<li><a href="#link3">***</a></li>
						</ul>
					</li>
					
				</ul>
			</div><!-- /.sidebar-left -->
			<!-- END SIDEBAR LEFT -->
			
			
			
			
			<!-- BEGIN PAGE CONTENT -->
			<div class="page-content">
			
				<div class="container-fluid">
				
				<!-- Begin page heading -->
                              <!--   <h1 class="page-heading ">DASHBOARD <small>| sample text <?php  ?> </small></h1> -->
				<!-- End page heading -->
<?php


?>				
					<!-- BEGIN ALERT -->
					<div class="alert alert-success alert-bold-border fade in alert-dismissable" >
					 <!--  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> -->
                                          
					<!-- CONTENT -->			
					
					<!-- BEGIN SiTE INFORMATIONS -->
					<div class="row">
						<div class="col-sm-3">
							<div class="the-box no-border bg-success tiles-information fly-out-l">
								<i class="fa fa-users icon-bg "></i>
								<div class="tiles-inner text-center ">
									<p>ATENDEES</p>
									<h2 class="bolded">
                                                                            <?php 
		 
                                                                            ?>
                                                                        </h2> 
									<div class="progress no-rounded progress-xs">
									  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
									  </div><!-- /.progress-bar .progress-bar-success -->
									</div><!-- /.progress .no-rounded -->
									
								</div><!-- /.tiles-inner -->
							</div><!-- /.the-box no-border -->
						</div><!-- /.col-sm-3 -->
						<div class="col-sm-3">
							<div class="the-box no-border bg-primary tiles-information fly-out-l">
								<i class="fa fa-clock-o icon-bg"></i>
								<div class="tiles-inner text-center">
									<p>WORKSHOPS</p>
									<h1 class="bolded"></h1> 
									<div class="progress no-rounded progress-xs">
									  <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
									  </div><!-- /.progress-bar .progress-bar-primary -->
									</div><!-- /.progress .no-rounded -->
									
								</div><!-- /.tiles-inner -->
							</div><!-- /.the-box no-border -->
						</div><!-- /.col-sm-3 -->
						<div class="col-sm-3">
							<div class="the-box no-border bg-danger tiles-information fly-out-l">
								<i class="fa fa-user icon-bg"></i>
								<div class="tiles-inner text-center">
									<p>FACILITATORS</p>
									<h3 class="bolded"><?php  ?></h3> 
									<div class="progress no-rounded progress-xs">
									  <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
									  </div><!-- /.progress-bar .progress-bar-danger -->
									</div><!-- /.progress .no-rounded -->
									
								</div><!-- /.tiles-inner -->
							</div><!-- /.the-box no-border -->
						</div><!-- /.col-sm-3 -->
						<div class="col-sm-3">
							<div class="the-box no-border bg-warning tiles-information fly-out-l">
								<i class="fa fa-home icon-bg"></i>
								<div class="tiles-inner text-center">
									<p>ROOMS</p>
									<h2 class="bolded">
                                                                            <?php
                                                                                
                                                                             ?>
                                                                        </h2> 
									<div class="progress no-rounded progress-xs">
									  <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
									  </div><!-- /.progress-bar .progress-bar-warning -->
									</div><!-- /.progress .no-rounded -->
									
								</div><!-- /.tiles-inner -->
							</div><!-- /.the-box no-border -->
						</div><!-- /.col-sm-3 -->
					</div><!-- /.row -->
					<!-- END SITE INFORMATIONS -->
				
				<!-- EO CONTENT -->
		<hr>		
<!-- EXTRA CONTENT GOES UNDER THIS -->	
	<link rel="stylesheet" href="assets/plugins/jquery-ui/jquery-ui.min.css">
	<link rel="stylesheet" href="assets/plugins/jquery-ui/jquery-ui.theme.min.css">
	<script src="assets/plugins/jquery-ui/jquery-ui.min.js"></script>
	<div id="content">
		
		<form action="#" class="addRoom">
		<!-- Adding Rooms -->
		<div class="alert alert-warning alert-bold-border block-center fade in alert-dismissable" >
			<input type="text" id="_name" placeholder="Room name/title" style="min-width: 200px; min-height: 35px; text-align: center;" > 
			<input type="button" style="min-height: 35px;" class="btn btn-warning" value="Add Room" id="addRoom"> 
			<div id="response"></div>
		</div>
		</form>
		
		<!-- Adding Facilitators -->
		<div class="alert alert-danger alert-bold-border block-center fade in alert-dismissable" >
			<input type="text" id="_name" placeholder="Facilitator Name" style="min-width: 200px; min-height: 35px; text-align: center;" > 
			<input type="button" style="min-height: 35px;" class="btn btn-danger" value="Add Facilitator" id="addFacilitator">
			<div id="response"></div> 
		</div>
		
		<!-- Adding Workshops -->
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
				<option value="" selected >Facilitator </option>
				
			    <?php 
			       $query = $connection->query("SELECT * FROM facilitators");
			       while ($data = mysqli_fetch_array($query)) {
			            echo '<option value="'.$data['id'].'"  >'.$data['_name'].'</option>';
			      }
			   ?>
				
			</select>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select id="_room" style="min-width: 200px; min-height: 35px; text-align: center;">
				<option value="" selected >Room | venue </option>
				<?php 
			       $query = $connection->query("SELECT * FROM rooms ");
			       while ($data = mysqli_fetch_array($query)) {
			            echo '<option value="'.$data['id'].'"  >'.$data['_name'].'</option>';
			      }
   				?>
			</select>
			
			<br><br><textarea rows="7" cols="91" id="_description" style="padding: 10px;" placeholder="Workshop description"></textarea>
			
			<br><br><input type="button" style="min-height: 35px;" class="btn btn-primary" value="Add Workshop" id="addWorkshop"> 
			<div id="response"></div>
		</div>
		
		<!-- Adding Atendees -->
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
		
		<!--  JS Event handler -->
		<script type="text/javascript">
		$(function(){
		/* JQuery on init logic */
			
			
			//HANDLE ROOM ADDITION REQUESTS
			$("#addRoom").click(function(){
				
				$name = $("#_name").val();
				
				if($name.length > 4 ){
				
					$.post(
							'proc.php',	{ action: "addRoom", _name : $("#_name").val() },
							function(data, stats){
								alert(data)
							}
					);

				}else{
					$("#_name").focus();
					$("#response").html("Enter a long Enough Room name");
				}
			})
			

			//HANDLE FACILITATOR ADDITION REQUESTS
			$("#addFacilitator").click(function(){
				$name = $("#_name").val();
				
				if($name.length > 4 ){
				
					$.post(
							'proc.php',	{ action: "addFacilitator", _name : $("#_name").val() },
							function(data, stats){
							}
					);

				}else{
					$("#_name").focus();
					$("#response").html("Enter a long Enough Facilitator name");
				}
			})
			//
			

			//HANDLE WORKSHOP ADDITION REQUESTS
			$("#addWorkshop").click(function(){

				

			})

			
		/* End of JQuery on init logic */			
		});		
		</script>
		
	</div>	
		
					
<!-- EXTRA CONTENT ENDS HERE -->				
				</div>
					<!-- END  ALERT -->			

															
					
				
				</div><!-- /.container-fluid -->
				
				
				
				<!-- BEGIN FOOTER -->
				<footer id="footer">
					
				</footer>
				<!-- END FOOTER -->
				
				
			</div><!-- /.page-content -->
		</div><!-- /.wrapper -->
		<!-- END PAGE CONTENT -->
		
		
	
		
		
		
		<!--
		===========================================================
		END PAGE
		===========================================================
		-->
		
		<!--
		===========================================================
		Placed at the end of the document so the pages load faster
		===========================================================
		-->
		<!-- MAIN JAVASRCIPT (REQUIRED ALL PAGE)-->
		<script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/plugins/retina/retina.min.js"></script>
		<script src="assets/plugins/nicescroll/jquery.nicescroll.js"></script>
		<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
		<script src="assets/plugins/backstretch/jquery.backstretch.min.js"></script>
               
		<!-- PLUGINS -->
	
		<!-- MORRIS JS -->
		<script src="assets/plugins/morris-chart/raphael.min.js"></script>
		<script src="assets/plugins/morris-chart/morris.min.js"></script>
		
		<!-- MAIN APPS JS -->
		<script src="assets/js/apps.js"></script>
		
	</body>
</html>

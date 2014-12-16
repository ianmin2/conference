<!DOCTYPE html>
<html lang="en" >
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
		
				
		<!-- MAIN CSS (REQUIRED ALL PAGE)-->
		<link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
		<link href="assets/css/style.css" rel="stylesheet">
		<link href="assets/css/style-responsive.css" rel="stylesheet">
        <link href="assets/css/custom.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/plugins/jquery-ui/jquery-ui.min.css">
		<link rel="stylesheet" href="assets/plugins/jquery-ui/jquery-ui.theme.min.css">
 
 		
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
									<code style="font-family:Courier New, Courier, monospace; font-size: 25px; color: green;text-shadow: 1px 1px blue;  ">ECD Youth Conference Management</code>
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
						<div class="col-sm-3" style="cursor:pointer;" onclick="atendees()">
							<div class="the-box no-border bg-success tiles-information fly-out-l">
								<i class="fa fa-users icon-bg "></i>
								<div class="tiles-inner text-center ">
									<p></p>
									<h3 class="bolded" style="text-shadow: 1px 2px teal;">ATENDEES</h3> 
									<div class="progress no-rounded progress-xs">
									  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
									  </div><!-- /.progress-bar .progress-bar-success -->
									</div><!-- /.progress .no-rounded -->
									
								</div><!-- /.tiles-inner -->
							</div><!-- /.the-box no-border -->
						</div><!-- /.col-sm-3 -->
						
						<div class="col-sm-3" style="cursor:pointer;" onclick="workshops()">
							<div class="the-box no-border bg-primary tiles-information fly-out-l">
								<i class="fa fa-clock-o icon-bg"></i>
								<div class="tiles-inner text-center">
									<p></p>
									<h3 class="bolded" style="text-shadow: 1px 2px teal;"> WORKSHOPS </h3> 
									<div class="progress no-rounded progress-xs">
									  <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
									  </div><!-- /.progress-bar .progress-bar-primary -->
									</div><!-- /.progress .no-rounded -->
									
								</div><!-- /.tiles-inner -->
							</div><!-- /.the-box no-border -->
						</div><!-- /.col-sm-3 -->
						
						<div class="col-sm-3" style="cursor:pointer;" onclick="facilitators()">
							<div class="the-box no-border bg-danger tiles-information fly-out-l">
								<i class="fa fa-user icon-bg"></i>
								<div class="tiles-inner text-center">
									<p></p>
									<h3 class="bolded " style="text-shadow: 1px 2px teal;">FACILITATORS</h3> 
									<div class="progress no-rounded progress-xs">
									  <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
									  </div><!-- /.progress-bar .progress-bar-danger -->
									</div><!-- /.progress .no-rounded -->
									
								</div><!-- /.tiles-inner -->
							</div><!-- /.the-box no-border -->
						</div><!-- /.col-sm-3 -->
						
						<div class="col-sm-3" style="cursor:pointer;" onclick="rooms()">
							<div class="the-box no-border bg-warning tiles-information fly-out-l">
								<i class="fa fa-home icon-bg"></i>
								<div class="tiles-inner text-center">
									<p></p>
									<h3 class="bolded " style="text-shadow: 1px 2px teal;">ROOMS</h3> 
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
	
	
	<div id="content">
		
		
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
		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/plugins/nicescroll/jquery.nicescroll.js"></script>
		
               
		<!-- PLUGINS -->
	
		<!-- MORRIS JS -->
		<script src="assets/plugins/jquery-ui/jquery-ui.min.js"></script>
		
		<!-- MAIN APPS JS -->
		<script src="assets/js/apps.js"></script>
		
		<script type="text/javascript">

			function atendees(){
				//alert('Atendees function initiated');
				$.post("layouts.php",{ action: "atendees"},
					function(data, stats){

							$("#content").html(data);
							$(function(){

								$("#addAtendee").click(function(){

									_name 		= $("#_name").val()
									_age 		= $("#_age").val() 
									_nationality= $("#_nationality").val()
									_gender		= $("#_gender").val()
									_telephone	= $("#_telephone").val()
									_email		= $("#_email").val()
									_division	= $("#_division").val()
									_church		= $("#_church").val()

									if( _name.length < 5 ){
										$('#_name').focus();
									}else if( _age.length < 1){
										$('#_age').focus();
									}else if( _nationality.length < 2 ){
										$('#_nationality').focus();
									}else if( _gender.length === 0 ){
										$('#_gender').focus();
									}else if( _telephone.length < 10 ){
										$('#_telephone').focus();
									}else if( _division.length < 3 ){
										$('#_division').focus();
									}else if( _church.length < 3 ){
										$('#_church').focus();
									}else{

										$.post(
											'proc.php',
											{action: "addAtendee", _name: _name, _age:_age, _nationality:_nationality, _gender:_gender, _telephone: _telephone, _email:_email, _division:_division, _church:_church }, 
											function(data, status){
												d =JSON.parse(data)
												$("#response").html(d.data.message) 
											}
												);
										
									}
									
								})

							});

					}
				);
				
			}

			function workshops(){
				//alert('Workshops function initiated');
				$.post("layouts.php",{ action: "workshops"},
					function(data, stats){

							$("#content").html(data);
							$(function(){
								
								$("#_day").datepicker();
								$("#_day").datepicker("setDate", new Date)
								
								//ADD WORKSHOP HANDLER
								$("#addWorkshop").click(function(){
																	
									_name 			= $("#_name").val();
									_topic  		= $("#_topic").val();
									_day    		= $("#_day").val();
									_time  			= $("#_time").val();
									_facilitator	= $("#_facilitator").val();
									_room			= $("#_room").val();
									_description	= $("#_description").val();

									if( _name.length < 4 ){
										$("#_name").focus()
										
									}else if( _topic.length == 0 ){
										
										$("#_topic").focus()
										
									}else if( _day.length < 1 ){
										
										$("#_day").focus();
										
									}else if( _time.length < 1 ){
										
										$("#_time").focus();
										
									}else if( _facilitator.length == 0 ){
										
										$("#_facilitator").focus();
										
									}else if (_room.length == 0){
									
										$("#_room").focus();
										
									}else{

										$.post('proc.php',
											{ action: "addWorkshop", _name : _name, _topic: _topic, _day: _day,	_time: _time, _facilitator: _facilitator, _facilitator2 : $("#_facilitator2").val(),_room : _room, _description: _description  },
											 function(data, response){
												 $(function(){
													 d = JSON.parse(data)
													$("#response").html(d.data.message);
												 });
											})
										
									}		
									
								})
								//EO WORKSHOP HANDLER
							});

					}
				);
				
			}

			function facilitators(){
				//alert('Facilitators function initiated');
				$.post("layouts.php",{ action: "facilitators"},
					function(data, stats){

							$("#content").html(data);
							$(function(){

								//HANDLE FACILITATOR ADDITION REQUESTS
								$("#addFacilitator").click(function(){
									$name = $("#_name").val();
									
									if($name.length > 4 ){
									
										$.post(
												'proc.php',	{ action: "addFacilitator", _name : $("#_name").val() },
												function(data, stats){
													d = JSON.parse(data)
													$("#response").html(d.data.message);
												}
										);

									}else{
										$("#_name").focus();
										$("#response").html("Enter a long Enough Facilitator name");
									}
								})
								//
								
							});

					}
				);
				
			}

			function rooms(){
				//alert('Rooms function initiated');
				$.post("layouts.php",{ action: "rooms"},
					function(data, stats){

							$("#content").html(data);
							$(function(){
								
								//HANDLE ROOM ADDITION REQUESTS
								$("#addRoom").click(function(){
									
									$name = $("#_name").val();
									
									if($name.length > 4 ){
									
										$.post(
												'proc.php',	{ action: "addRoom", _name : $("#_name").val() },
												function(data, stats){
													d = JSON.parse(data)
													$("#response").html(d.data.message);
												}
										);
	
									}else{
										$("#_name").focus();
										$("#response").html("Enter a long Enough Room name");
									}
								})
								//
								
							});

					}
				);
			}

		</script>
		
		
	</body>
</html>
<?php

	require_once 'conference.php';
	$c = new conference ();

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
							
						</ul>
						<!-- End user session nav -->
						
						<!-- Begin Collapse menu nav -->
						<div class=" collapse navbar-collapse" id="main-fixed-nav">
							<!-- Begin nav search form -->
							<form class="navbar-form navbar-left" role="search">
								
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
				
			</div><!-- /.sidebar-left -->
			<!-- END SIDEBAR LEFT -->
			
			
			
			
			<!-- BEGIN PAGE CONTENT -->
			<div class="page-content">
			<br/><br>
				<div class="container-fluid">
				
				<!-- Begin page heading -->
                              <!--   <h1 class="page-heading ">DASHBOARD <small>| sample text <?php  ?> </small></h1> -->
				<!-- End page heading -->
<?php


?>				
					<!-- BEGIN ALERT -->
					<div class="alert alert-success alert-bold-border fade in alert-dismissable  col-lg-12" >
						
						<div class="alert alert-info alert-bold-border fade in alert-dismissable  col-lg-12" >
						<div class="col-lg-12 row text-info" style="font-family: fantasy;"> Instructions: </div>
						<div class="row col-lg-12" >
							<div class="text-info"> There are 7 categories of workshops each with two sessions.</div>
							<div class="text-info">* Please pick topics for each session and category </div>
							<div class="text-info">* Please pick different topics per category </div>
						</div>
						</div>
						
						<div class="alert alert-primary alert-bold-border fade in alert-dismissable  col-lg-6 row" >
							<div class="text-primary">  WORKSHOP 1</div>
							<div class="col-lg-12">
								<select class="btn btn-lg btn-default col-lg-12" style="max-width: 100% !important;" id="_w1a"  ><option value="" selected >Workshop 1a</option> 
									<?php
									$pl = $c->getWorkshops ( "0800HRS", "12/22/2014" );
									$p = $pl ["data"] ["message"];
									
									foreach ( $p as $v ) {
										echo '<option value="' . $v ['id'] . '">' . $v ['_name'] . '</option>';
									}
									?>
								</select>
							</div>
							
							<div class="col-lg-12">
								<select class="btn btn-lg btn-default col-lg-12" style="max-width: 100% !important;" id="_w1b"  ><option value="" selected >Workshop 1b</option> 
									<?php
									//$pl = $c->getWorkshops ( "0800HRS", "12/22/2014" );
									//$p = $pl ["data"] ["message"];
									
									foreach ( $p as $v ) {
										echo '<option value="' . $v ['id'] . '">' . $v ['_name'] . '</option>';
									}
									?>
								</select>
							</div>
						</div>
						
						<div class="alert alert-primary alert-bold-border fade in alert-dismissable  col-lg-6 row" >
							<div class="text-primary">  WORKSHOP 2</div>
							<div class="col-lg-12">
								<select class="btn btn-lg btn-default col-lg-12" style="max-width: 100% !important;" id="_w2a"  ><option value="" selected >Workshop 2a</option> 
									<?php
									$pl = $c->getWorkshops ( "1400HRS", "12/22/2014" );
									$p = $pl ["data"] ["message"];
									
									foreach ( $p as $v ) {
										echo '<option value="' . $v ['id'] . '">' . $v ['_name'] . '</option>';
									}
									?>
								</select>
							</div>
							<div class="col-lg-12">
								<select class="btn btn-lg btn-default col-lg-12" style="max-width: 100% !important;" id="_w2b"  ><option value="" selected >Workshop 2b</option> 
									<?php
									//$pl = $c->getWorkshops ( "1400HRS", "12/22/2014" );
									//$p = $pl ["data"] ["message"];
									
									foreach ( $p as $v ) {
										echo '<option value="' . $v ['id'] . '">' . $v ['_name'] . '</option>';
									}
									?>
								</select>
							</div>
						</div>
						
						<div class="alert alert-primary alert-bold-border fade in alert-dismissable  col-lg-6 row" >
							<div class="text-primary">  WORKSHOP 3</div>
							<div class="col-lg-12">
								<select class="btn btn-lg btn-default col-lg-12" style="max-width: 100% !important;" id="_w3a"  ><option value="" selected >Workshop 3a</option> 
									<?php
									$pl = $c->getWorkshops ( "0800HRS", "12/23/2014" );
									$p = $pl ["data"] ["message"];
									
									foreach ( $p as $v ) {
										echo '<option value="' . $v ['id'] . '">' . $v ['_name'] . '</option>';
									}
									?>
								</select>
							</div>
							<div class="col-lg-12">
								<select class="btn btn-lg btn-default col-lg-12" style="max-width: 100% !important;" id="_w3b"  ><option value="" selected >Workshop 3b</option> 
									<?php
									//$pl = $c->getWorkshops ( "0800HRS", "12/23/2014" );
									//$p = $pl ["data"] ["message"];
									
									foreach ( $p as $v ) {
										echo '<option value="' . $v ['id'] . '">' . $v ['_name'] . '</option>';
									}
									?>
								</select>
							</div>
						</div>
						
						<div class="alert alert-primary alert-bold-border fade in alert-dismissable  col-lg-6 row" >
							<div class="text-primary">  WORKSHOP 4</div>
							<div class="col-lg-12">
								<select class="btn btn-lg btn-default col-lg-12" style="max-width: 100% !important;" id="_w4a"  ><option value="" selected >Workshop 4a</option> 
									<?php
									$pl = $c->getWorkshops ( "1400HRS", "12/23/2014" );
									$p = $pl ["data"] ["message"];
									
									foreach ( $p as $v ) {
										echo '<option value="' . $v ['id'] . '">' . $v ['_name'] . '</option>';
									}
									?>
								</select>
							</div>
							<div class="col-lg-12">
								<select class="btn btn-lg btn-default col-lg-12" style="max-width: 100% !important;" id="_w4b"  ><option value="" selected >Workshop 4b</option> 
									<?php
									//$pl = $c->getWorkshops ( "1400HRS", "12/23/2014" );
									//$p = $pl ["data"] ["message"];
									
									foreach ( $p as $v ) {
										echo '<option value="' . $v ['id'] . '">' . $v ['_name'] . '</option>';
									}
									?>
								</select>
							</div>
						</div>
						
						<div class="alert alert-primary alert-bold-border fade in alert-dismissable  col-lg-6 row" >
							<div class="text-primary">  WORKSHOP 5</div>
							<div class="col-lg-12">
								<select class="btn btn-lg btn-default col-lg-12" style="max-width: 100% !important;" id="_w5a"  ><option value="" selected >Workshop 5a</option> 
									<?php
									$pl = $c->getWorkshops ( "0800HRS", "12/24/2014" );
									$p = $pl ["data"] ["message"];
									
									foreach ( $p as $v ) {
										echo '<option value="' . $v ['id'] . '">' . $v ['_name'] . '</option>';
									}
									?>
								</select>
							</div>
							<div class="col-lg-12">
								<select class="btn btn-lg btn-default col-lg-12" style="max-width: 100% !important;" id="_w5b"  ><option value="" selected >Workshop 5b</option> 
									<?php
									//$pl = $c->getWorkshops ( "0800HRS", "12/24/2014" );
									//$p = $pl ["data"] ["message"];
									
									foreach ( $p as $v ) {
										echo '<option value="' . $v ['id'] . '">' . $v ['_name'] . '</option>';
									}
									?>
								</select>
							</div>
						</div>
						
						<div class="alert alert-primary alert-bold-border fade in alert-dismissable  col-lg-6 row" >
							<div class="text-primary">  WORKSHOP 6</div>
							<div class="col-lg-12">
								<select class="btn btn-lg btn-default col-lg-12" style="max-width: 100% !important;" id="_w6a"  ><option value="" selected >Workshop 6a</option> 
									<?php
									$pl = $c->getWorkshops ( "1400HRS", "12/24/2014" );
									$p = $pl ["data"] ["message"];
									
									foreach ( $p as $v ) {
										echo '<option value="' . $v ['id'] . '">' . $v ['_name'] . '</option>';
									}
									?>
								</select>
							</div>
							<div class="col-lg-12">
								<select class="btn btn-lg btn-default col-lg-12" style="max-width: 100% !important;" id="_w6b"  ><option value="" selected >Workshop 6b</option> 
									<?php
									//$pl = $c->getWorkshops ( "1400HRS", "12/24/2014" );
									//$p = $pl ["data"] ["message"];
									
									foreach ( $p as $v ) {
										echo '<option value="' . $v ['id'] . '">' . $v ['_name'] . '</option>';
									}
									?>
								</select>
							</div>
						</div>
						
						<div class="alert alert-primary alert-bold-border fade in alert-dismissable  col-lg-6 row" >
							<div class="text-primary"> WORKSHOP 7</div>
							<div class="col-lg-12">
								<select class="btn btn-lg btn-default col-lg-12" style="max-width: 100% !important;" id="_w7a" ><option value="" selected > 7a</option> 
									<?php
									$pl = $c->getWorkshops ( "0800HRS", "12/26/2014" );
									$p = $pl ["data"] ["message"];
									
									foreach ( $p as $v ) {
										echo '<option value="' . $v ['id'] . '">' . $v ['_name'] . '</option>';
									}
									?>
								</select>
							</div>
							<div class="col-lg-12">
								<select class="btn btn-lg btn-default col-lg-12" style="max-width: 100% !important;"  id="_w7b" ><option value="" selected > 7b</option>
									<?php
									//$pl = $c->getWorkshops ( "0800HRS", "12/26/2014" );
									//$p = $pl ["data"] ["message"];
									
									foreach ( $p as $v ) {
										echo '<option value="' . $v ['id'] . '">' . $v ['_name'] . '</option>';
									}
									?>
								</select>
							</div>
						</div>
						
						<div class="alert alert-primary alert-bold-border fade in alert-dismissable  col-lg-6 row" >
							<div class="col-lg-12">
								<input type="button" id="addRecord" 
										value="REGISTER FOR WORKSHOPS" 
										style="min-width: 200px; min-height: 35px; text-align: center;"
										class="btn-success"
								>
							</div>
							<br/><br><br>
							<div class="col-lg-12">
								<div class="center-block" id="respo" style="font-family: cursive; color: black;">
								</div>
							</div>
						</div>
						
								
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
		
		<script>

	$(function(){
		$(".top-navbar").toggleClass("toggle");
		$(".sidebar-left").toggleClass("toggle");
		$(".page-content").toggleClass("toggle");

		$.post(
				'proc.php',
				{ action : 'hasHistory', id : localStorage.getItem("current") },
				function( data, result ){
					if( JSON.parse(data).response == "SUCCESS" ){
						window.location = 'print.html';
					}else{}
				}
			)
			

		$("#addRecord").click(function(){
				
			_atendee = localStorage.getItem("current");
			_w1a = $("#_w1a").val();
			_w1b = $("#_w1b").val();
			_w2a = $("#_w2a").val();
			_w2b = $("#_w2b").val();
			_w3a = $("#_w3a").val();
			_w3b = $("#_w3b").val();
			_w4a = $("#_w4a").val();
			_w4b = $("#_w4b").val();
			_w5a = $("#_w5a").val();
			_w5b = $("#_w5b").val();
			_w6a = $("#_w6a").val();
			_w6b = $("#_w6b").val();
			_w7a = $("#_w7a").val();
			_w7b = $("#_w7b").val();
			_p1 = $("#_p1").val();
			_p2 = $("#_p2").val();
			_p3 = $("#_p3").val();
			_p4 = $("#_p4").val();
			_p5 = $("#_p5").val();
			_r = $("#respo");
			
			//Evaluate to make sure that two consecutive workshops cannot be picked at the same time
				
		  /*if( _atendee == "" ){
				$('#_atendee').focus();
				
				
			} else */if (  _w1a == ""  ){
				_r.html("Please select a value for <i class='text-danger'> Workshop 1a</i>");
				_r.addClass('btn');
				_r.addClass("alert-warning");
				$("#_w1a").focus()
				
				
			} else if (  _w1b == "" ||  _w1a == _w1b ){	
				_r.html("Please select a <code>unique</code> value for <i class='text-danger'> Workshop 1b</i>");
				_r.addClass('btn');
				_r.addClass("alert-warning");
				$("#_w1b").focus()
				
			} else if (  _w2a == ""   ){
				_r.html("Please select a value for <i class='text-danger'> Workshop 2a</i>");
				_r.addClass('btn');
				_r.addClass("alert-warning");
				$("#_w2a").focus()
				
			} else if (   _w2b == ""  ||   _w2a == _w2b  ){
				_r.html("Please select a <code>unique</code> value for <i class='text-danger'> Workshop 2b</i>");
				_r.addClass('btn');
				_r.addClass("alert-warning");
				$('#_w2b').focus();
			
			} else if ( ( _w3a == "" )   ){
				_r.html("Please select a value for <i class='text-danger'> Workshop 3a</i>");
				_r.addClass('btn');
				_r.addClass("alert-warning");
				$("#_w3a").focus()
			
			} else if (  _w3b == ""  ||   _w3a == _w3b  ){
				_r.html("Please select a <code>unique</code> value for <i class='text-danger'> Workshop 3b</i>");
				_r.addClass('btn');
				_r.addClass("alert-warning");
				$('#_w3b').focus();
				
			} else if (  _w4a == ""   ){
				_r.html("Please select a value for <i class='text-danger'> Workshop 4a </i>");
				_r.addClass('btn');
				_r.addClass("alert-warning");
				$("#_w4a").focus()
			
			} else if (  _w4b == ""  ||   _w4a == _w4b  ){
				_r.html("Please select a <code>unique</code> value for <i class='text-danger'> Workshop 4b</i>");
				_r.addClass('btn');
				_r.addClass("alert-warning");
				$('#_w4b').focus();
				
			} else if (   _w5a == ""  ){
				_r.html("Please select a value for <i class='text-danger'> Workshop 5a </i>");
				_r.addClass('btn');
				_r.addClass("alert-warning");
				$("#_w5a").focus()
			
			} else if (  _w5b == ""   ||   _w5a == _w5b  ){
				_r.html("Please select a <code>unique</code> value for <i class='text-danger'> Workshop 5b</i>");
				_r.addClass('btn');
				_r.addClass("alert-warning");
				$('#_w5b').focus();
				
			} else if (  _w6a == ""  ){
				_r.html("Please select a value for <i class='text-danger'> Workshop 6a</i>");
				_r.addClass('btn');
				_r.addClass("alert-warning");
				$("#_w6a").focus()
			
			} else if (  _w6b == ""   ||   _w6a == _w6b  ){
				_r.html("Please select a <code>unique</code> value for <i class='text-danger'> Workshop 6b</i>");
				_r.addClass('btn');
				_r.addClass("alert-warning");
				$('#_w6b').focus();
			
			} else if ( ( _w7a == "" ) ){
				_r.html("Please select a value for <i class='text-danger'> Workshop 7a</i>");
				_r.addClass('btn');
				_r.addClass("alert-warning");
				$("#_w7a").focus()
				
			} else if ( _w7b == ""  ||   _w7a == _w7b  ){
				_r.html("Please select a <code>unique</code> value for <i class='text-danger'> Workshop 7b</i>");
				_r.addClass('btn');
				_r.addClass("alert-warning");
				$('#_w7b').focus();
				
			}else{

							
				/*AJAX REQUEST*/
				$.post(
						'proc.php',
						{ action: "addRecord", _atendee : _atendee, _w1a : _w1a, _w1b : _w1b, _w2a : _w2a, _w2b : _w2b, _w3a : _w3a, _w3b : _w3b, _w4a : _w4a, _w4b : _w4b, _w5a : _w5a, _w5b : _w5b, _w6a : _w6a, _w6b : _w6b, _w7a : _w7a, _w7b : _w7b, _p1 : _p1, _p2 : _p2, _p3 : _p3, _p4 : _p4, _p5 : _p5, },
						function( data, result ){
							d = JSON.parse(data);
							alert(d.data.message);

							if(d.response == "SUCCESS"){
								
								//alert("Successfully registered the user's choice of workshops");
								window.location = "print.html"
							}else{
								
								//alert("Failed to add the schedule\n\nPlease try again!");
							}
							
						}
					)
				/*EO AJAX REQUEST*/

				
			}

			
			
		});

	});

</script>
		

		
		
	</body>
</html>

<!doctype html>
<html>
<head>
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
			@media print
			{    
			    .no-print, .no-print *
			    {
			        display: none !important;
			    }
			}
		
		</style>
</head>
<body>




<script>
	//Fetch the atendee conference schedule
	 $(function(){
		

		//Make references to the locally stored objects
		fs = JSON.parse(localStorage.getItem("facilitators"));
		ws = JSON.parse(localStorage.getItem("workshops"))
		us = JSON.parse(localStorage.getItem("userSched"))
		ud = JSON.parse(localStorage.getItem("userDet"))
		rd = JSON.parse(localStorage.getItem("rooms"))
		wn = { _w1a : "w1a",
			   _w1b : "w1b", 
			   _w2a : "w2a", 
			   _w2b : "w2b", 
			   _w3a : "w3a",
			   _w3b : "w3b",
			   _w4a : "w4a", 
			   _w4b : "w4b",
			   _w5a : "w5a",
			   _w5b : "w5b",
			   _w6a : "w6a",
			   _w6b : "w6b",
			   _w7a : "w7a",
			   _w7b : "w7b"
			}
		wt = { _w1a : "0800 [Mon]",
			   _w1b : "0900 [Mon]", 
			   _w2a : "1400 [Mon]", 
			   _w2b : "1500 [Mon]", 
			   _w3a : "0800 [Tue]",
			   _w3b : "0900 [Tue]",
			   _w4a : "1400 [Tue]", 
			   _w4b : "1500 [Tue]",
			   _w5a : "0800 [Wed]",
			   _w5b : "0900 [Wed]",
			   _w6a : "1400 [Wed]",
			   _w6b : "1500 [Wed]",
			   _w7a : "0800 [Fri]",
			   _w7b : "0900 [Fri]"
			}
		/* 
			dom = "";
			for( $i = 1; $i <= 7; $i++ ){
				if( $i % 2 != 0 ){ dor = "a" }else{ dor = "b" }
				dom = dom + "_w"+$i+dor + ' : "' + 'w'+$i+dor + '",';
			}
			document.writeln(dom)
		*/

		
		//alert(ws)
		//console.log("\n\n"+ us[0]._w7a +" \n\n")
		fdata = '<table class="table table-striped table-bordered " style="font-family: courier; "><tr class="text-danger" style="font-family: arial;"><td width="2%">Workshop</td><td width="8%">Room</td><td style="overflow:hidden;" width="55%">topic</td><td width="35%">Facilitator</td></tr>'
		for( w in wn ){
			//console.log( w + " = " + ( us[w] ) + " => " + ws[ (us[w] - 1) ]._name)
			fdata  += ' <tr> <td width="12%"> '+ wn[w] +' @'+ wt[w] +' </td>  <td width="8%">'+ rd[ ws[ ( us[w] - 1  ) ]._room ] +'</td>  <td style="overflow:hidden;" width="55%">'+ ws[ ( us[w] - 1 )] ._topic +'</td> 	<td width="35%">' + fs[ ws[ (us[w] - 1) ]._facilitator ] + '</td> 		</tr>';
		}
		fdata += '</table> <br><br> <div style="font-family: courier;"> This schedule belongs to <b>' + ud[0]._fname + " " + ud[0]._lname +  '</b></div>'
		$("#schedule").html(fdata)
		//console.log(ws[w])
		//fdata =' <tr> <td width="2%"> Workshop</td>  <td width="8%">room</td>  <td style="overflow:hidden;" width="70%">topic</td> 	<td width="20%">Facilitator</td> 		</tr>';
	}); 
</script>
<div class="no-print btn btn-success" onclick="javascript:window.print()">Print Schedule</div>
<div class="no-print btn btn-success" onclick="javascript:window.location='layout.php'">View Program layout</div>
<table width="100% "  class="table table-striped">

	<div id="schedule"  ></div>
	
	
</table>


</body>
</html>

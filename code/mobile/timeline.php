<?php
/* 
	Author: The Connection 
	For: The University Of Eastern Africa Baraton
*/
//ini_set('display_errors', 1);
//error_reporting(E_ALL);
class timeline{
	
	public $id = "timeline.php";
	
	public function __construct($c = ''){
		
		//cracking crickets go crickety criikkk!!
	$this->c = $c;
	
	}
	

	public function getUser( $term = '' ){
		
		$term = htmlspecialchars($term);
		
		($term == '') ?  $mul = ' ORDER BY _fname ' : $mul = " WHERE _receipt LIKE '%$term%' OR _fname LIKE '%$term%' OR _lname LIKE '%$term%' OR _passport LIKE '%$term%' OR _telephone LIKE '%$term%' OR _email LIKE '%$term%' ORDER BY _fname ";
		
	$id = $this->id;
	$connect = true;
	chdir("../");
	include "r_main.php";
	chdir("code");
	//Start the filtered atendee view
	
	$at = "";
	
	 $at .= '<!-- BEGIN TIMELINE -->
		<ul class="timeline">
			<li class="centering-line"></li>';

			
		//Get the residence names and store them in an associative array in the order "residence_id" => "residence_name"
		// Add "WHERE gender='$_SESSION[u56_gender]'" to limit the gender of residences shown
		$peeps = $connection->query("SELECT * FROM atendees $mul" ,true);
		
		$people = array();
		while($peoples = mysqli_fetch_array($peeps)){
			$people[$peoples['id']] = array("_name"=>@$peoples['_fname']." ".@$peoples['_lname'], "_telephone"=>@$peoples['_telephone'], "_email"=>@$peoples['_email'], "_nationality"=>@$peoples['_nationality'], "_passport"=>@$peoples['_passport'] );
		}
		
			
				
				//Do matched members list display here

				/* PRINT STYLE PAGINATOR */
				if(@$rep){$at .= '<div style="page-break-before:always"></div>';}

				$at .=  '
						<ul class="timeline">
							<li class="centering-line"></li>
							
							<!-- BEGIN TIME CAT-->
							<li class="center-timeline-cat">
								<div class="inner">
								'.htmlentities(strtoupper($term)).'
								</div><!-- /.inner -->
							</li>
							<!-- END TIME CAT-->
						</ul>
						<ul class="timeline">
						<!-- BEGIN CENTERING LINE -->
						<li class="centering-line"></li>
						<!-- END CENTERING LINE -->	
					';
					
				
			foreach($people as $k => $person){
					
					
				$at .= '<!-- BEGIN ITEM TIMELINE -->
						<li class="item-timeline">
							<div class="buletan"></div>
							<div class="inner-content">
								
								<!-- BEGIN HEADING TIMELINE -->
								<div class="heading-timeline" style="cursor: pointer;" onclick="useUser('.$k.')">
									<!-- <img src="assets/img/avatar/avatar-1.jpg" class="avatar" alt="Avatar"> -->
									<div class="user-timeline-info">
										<p>
										'.htmlentities( @$person['_name'] ).'
										<small>['.htmlentities( @$person['_nationality'] ).']</small></p>
									</div><!-- /.user-timeline-info -->

								</div><!-- /.heading-timeline -->

								<!-- BEGIN HEADING TIMELINE -->
															
								<!-- BEGIN FOOTER TIMELINE -->
								<div class="footer-timeline" style="padding:6px;">
									<ul class="timeline-option">
										<li><i class="fa fa-user"></i>  '.@htmlentities($person['_telephone']).'</li>
										<li><i class="fa fa-phone"></i> '.@htmlentities($person['_email']).'</li>
										<li><i class="fa fa-book"></i>  '.@htmlentities($person['_passport']).'</li>
									</ul>
								
								<!-- END FOOTER TIMELINE -->
								
							</div><!-- /.inner-content -->
						</li>
						<!-- END ITEM TIMELINE -->';
					
					
				}
				
				$at .= '
				</div>
				</center>
				<br /><br /><br />';
				header("content-type: application/javascript");
				echo $this->c."(".json_encode($at).")";
				die;
				 
			}
			
		
	
	
	//End of Class
}

$t = new timeline($_REQUEST['callback']);
$t->getUser(@$_REQUEST['term']);	
			
?>

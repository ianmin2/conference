<?php

//header("content-type: application/javascript");
	
	$action = $_REQUEST['action'];
	include 'conference.php';
	$proc = new conference($_REQUEST);
	
	switch ($action) {
		
		case 'addWorkshop':
			echo json_encode($proc->addWorkshop());
			exit;
		break;
		
		case 'addRoom':	
			echo json_encode($proc->addRoom());
			exit;
		break;
		
		case 'addFacilitator':
			echo json_encode($proc->addFacilitator());
			exit;
		break;
		
		case 'addAtendee':
			echo json_encode($proc->addAtendee());
			exit;
		break;
		
		case 'addRecord':
			echo json_encode($proc->addRecord());
			exit;
		break;
		
		case 'getRooms':
			echo json_encode($proc->getRooms());
			exit;
		break;
				
		case 'getFacilitators':
			echo json_encode($proc->getFacilitators());
			exit;
		break;
		
		case 'getWorkshops':
			echo json_encode($proc->getWorkshops(@$_REQUEST['time'], @$_REQUEST['day']));
			exit;
		break;
		
		case 'getAtendees':
			echo json_encode($proc->getAtendees());
			exit;
		break;
		
		case 'getSchedule':
			echo json_encode($proc->getSchedule(@$_REQUEST['workshop']));
			exit;
		break;

		case 'test':
			echo json_encode( array("response" => "SUCCESS", "data"=> array("mesage"=>"Application successfully initialized! \n\r TEST COMPLETE!", "command"=>"")) );
			exit;
		break;
		
		default:
			echo json_encode( array("response" => "ERROR", "data"=> array("mesage"=>"Failed to initialize application \n\r An invalid request parameter was received!", "command"=>"")) );
			exit;
		break;
	}
	
	
	

?>
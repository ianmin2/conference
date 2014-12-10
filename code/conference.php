<?php

class conference{
	
	public $connection, $crypto, $req;
	
	public function __construct($req=array()){
		
		chdir("../");
			$id = 'index.php';
			$connect = true;
			include 'crypt.php';
			include 'r_main.php';
		chdir("code");
		
		$this->connection = $connection;
		$this->crypto = $crypto;
		$this->req = $req;
		unset($connection);
		unset($crypto);
		unset($req);
		
	}
	
//Adding a Workshop	
	public function addWorkshop(){
		
		$fields 	= array('_name', '_topic', '_day', '_time', '_facilitator', '_room', '_description');
		$required 	= array('_name', '_topic', '_day', '_time', '_facilitator', '_room');
		
		//Check if all the required fields are filled in
		foreach ( $required as $k => $v ){
			if(@$this->req[$v] == ""){
				return array("response" => "ERROR", "data"=> array("message"=>"Failed to get the workshop ".str_replace("_", " ", $v) , "command"=>"" ));
			}
		}
		
		//Insert the workshop values
		$query = "INSERT INTO workshops ( _name, _topic, _day, _time, _facilitator, _room, _description ) VALUES ( ";
		foreach ( $fields as $k => $v ){
			$query .= "'".@htmlentities($this->req[$v])."',";
		}
		$query = rtrim($query, ',');
		$query .= ")";
		
		$query = $this->connection->query($query);
		
		if($query){
			return array("response" => "SUCCESS", "data"=> array("message"=>"Workshop successfully added!" , "command"=>"" )); 
		}else{
			return array("response" => "ERROR", "data"=> array("message"=>"Failed to add the workshop \n\r please check that it does not already exist" , "command"=>"" ));
		}
		
	}

//Adding a room
	public function addRoom(){
		
		$fields = array('_name');
		$required = array('_name');
		
		//Check if all the required fields are filled in and build query string
		$query = "INSERT INTO rooms ( _name ) VALUE (" ;
		foreach ( $required as $k => $v ){
			if(@$this->req[$v] == ""){
				return array("response" => "ERROR", "data"=> array("message"=>"Failed to get the room ".str_replace("_", " ", $v) , "command"=>"" ));
			}else{
				$query .= "'".@htmlentities($this->req[$v])."'";
			}
		}
		$query .= ")";
		$query = $this->connection->query($query);
		
	if($query){
			return array("response" => "SUCCESS", "data"=> array("message"=>"Room successfully added!" , "command"=>"" )); 
		}else{
			return array("response" => "ERROR", "data"=> array("message"=>"Failed to add the room \n\r please check that it does not already exist" , "command"=>"" ));
		}
		
	}

	
//Adding a facilitator
	public function addFacilitator(){
		
		$fields = array('_name');
		$required = $fields;
		
		//Check if all the required fields are filled in and build query string
		$query = "INSERT INTO facilitators ( _name ) VALUE (" ;
		foreach ( $required as $k => $v ){
			if(@$this->req[$v] == ""){
				return array("response" => "ERROR", "data"=> array("message"=>"Failed to get the facilitator ".str_replace("_", " ", $v) , "command"=>"" ));
			}else{
				$query .= "'".@htmlentities($this->req[$v])."'";
			}
		}
		$query .= ")";
		$query = $this->connection->query($query);
		
		if($query){
			return array("response" => "SUCCESS", "data"=> array("message"=>"Facilitator successfully added!" , "command"=>"" ));
		}else{
			return array("response" => "ERROR", "data"=> array("message"=>"Failed to add the facilitator \n\r please check that the record is not a duplicate. " , "command"=>"" ));
		}
		
				
	}
	
	
//Adding an atendee	
	public function addAtendee(){
		
		$fields = array('_name', '_age', '_nationality', '_division', '_church', '_gender', '_telephone', '_email');
		$required = array('_name', '_age', '_nationality', '_gender', '_telephone');
		
		//Check if all the required fields are filled
		foreach ($required as $k => $v ){
			if(@$this->req[$v] == ""){
				return array("response" => "ERROR", "data"=> array("message"=>"Failed to get the atendee ".str_replace("_", " ", $v) , "command"=>"" ));
			}
		}
		
		//Construct the atendee addition query
		$query = "INSERT INTO atendees ( _name, _age, _nationality, _division, _church, _gender, _telephone, _email ) VALUES (";
		foreach($fields as $k => $v){
			$query .= "'".@htmlentities($this->req[$v])."',";
		}
		$query = rtrim($query, ",");
		$query .= ")";
		
		$query = $this->connection->query($query);
		
		if($query){
			return array("response" => "SUCCESS", "data"=> array("message"=>"Atendee successfully added!" , "command"=>"" ));
		}else{
			return array("response" => "ERROR", "data"=> array("message"=>"Failed to add the Atendee \n\r please check that this record is not a duplicate. " , "command"=>"" ));
		}
		
	}
	

//Adding a record of an atendee's class {schedule}
	public function addRecord(){
		
		$fields = array('_atendee', '_workshop', '_day', '_time', '_facilitator', '_route' );
		$required = array('_atendee', '_workshop', '_day', '_time', '_route' );
		
		//Check for all required fields
		foreach($required as $k => $v){
			if(@$this->req[$k] == ""){
				return array("response" => "ERROR", "data"=> array("message"=>"Failed to get the  ".str_replace("_", " ", $v) , "command"=>"" ));
			}
		}
		
		//Build the query string
		$query = "INSERT INTO schedule ( _atendee, _workshop, _day, _time, _facilitator, _route ) VALUES (";
		foreach($fields as $k => $v){
			$query .= "'".htmlentities(@$this->req[$v])."',";
		}
		$query = rtrim($query, ",");
		$query .= ")";
		
		$query = $this->connection->query($query);
		
		//Evaluate the execution of the query
		if($query){
			return array("response" => "SUCCESS", "data"=> array("message"=>"Record successfully updated!" , "command"=>"" ));
		}else{
			return array("response" => "ERROR", "data"=> array("message"=>"Failed to add the record \n\r please check that this record is not a duplicate. " , "command"=>"" ));
		}
		
	}
	
	
//Display rooms
	public function getRooms(){
		
		$rooms = $this->connection->printQueryresults("SELECT * FROM rooms", true);
		return array("response" => "SUCCESS", "data" => array("message" => $rooms , "command"=>"" ));
		
	}
	
//Display Facilitators
	public function getFacilitators(){
		
		$facilitators = $this->connection->printQueryResults("SELECT * FROM facilitators");
		return array("response" => "SUCCESS", "data"=> array("message"=>$facilitators , "command"=>"" ));
		
	}
	
//Display workshops by time
	public function getWorkshops( $time = "", $day = "" ){
		
		if($time != "" && $day != ""){
			$workshops = $this->connection->printQueryResults("SELECT * FROM workshops WHERE _day='".$day."' AND _time='".$time."'");
			return array("response" => "SUCCESS", "data"=> array("message"=>$workshops, "command"=>"" ));
		}else{
			$workshops = $this->connection->printQueryResults("SELECT * FROM workshops");
			return array("response" => "SUCCESS", "data"=> array("message"=>$workshops, "command"=>"" )); 
		}
		
	}
	
//Display Atendee information
	public function getAtendees(){
		
		$atendees = $this->connection->printQueryresults("SELECT * FROM atendees");
		return array("response" => "SUCCESS", "data"=> array("message"=>$workshops, "command"=>"" ));
		
	}
	
//Get schedules
	public function getSchedule( $workshop = "" ){
		
		if($workshop == ""){
			$schedule = $this->connection->printQueryResults("SELECT * FROM schedule");
			return array("response" => "SUCCESS", "data"=> array("message"=>$workshops, "command"=>"" ));
		}else{
			$schedule = $this->connection->printQueryResults("SELECT * FROM schedule WHERE _workshop='".$workshop."' ");
		}
		
	}
	//END OF CLASS
}



?>
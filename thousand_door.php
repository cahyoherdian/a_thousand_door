<?php
// Door Problem Solving Program
// Author : Cahyo Herdian
// Email : cahyoherdian@ymail.com

  $GLOBALS['employee'] = 1000;
	$GLOBALS['door'] = 1000;
		
	$employee_arr[$employee];
	$door_arr[$door];
	
	class Door
	{	
		var $id_door=0;
		var $bool_open=false;
		
		
		function __construct($new_id)
		{
			$this->id_door = $new_id;
			// echo "Create Door : ".$this->id_door."</br>";
		}
		
		function get_id()
		{
			return $this->id_door;
		}
		
		function update_door()
		{
			$this->bool_open = !$this->bool_open;
		}
		
		function isOpen()
		{
			return $this->bool_open;
		}
	
	}
	
	class Employee
	{
		var $id_emp=0;
		
		// function Employee($new_id)
		function __construct($new_id)
		{
			$this->id_emp = $new_id;
			// echo "Create Employee ID: ".$this->id_emp."</br>";
		}
			
		function get_id()
		{
			return $this->id_emp;
		}
		
		function go_to_door($door_arr)
		{
		
			if($this->id_emp == 0)
			{
				return;
			}
			if($this->id_emp == 1)
			{
				for($i=1;$i<=$GLOBALS['door'] ;$i++)
				{
					$door_arr[$i]->update_door();
					// echo "</br>update door ".$i." ";
					// echo $door_arr[$i]->isOpen() ? "door opened" : "door closed";
				}
			}else if($this->id_emp == $GLOBALS['employee']){
				$door_arr[1000]->update_door();
			}else{
				for($i=1;$i<=$GLOBALS['door'] ;$i++)
				{		
					
					if($door_arr[$i]->get_Id() % $this->id_emp == 0)
					{
						$door_arr[$i]->update_door();
						// echo "</br>update door ".$i." ";
						// echo $door_arr[$i]->isOpen() ? "door opened" : "door closed";
					}
				}
			}
		}
					
	}
	
	
	
	echo "==================== Init Door =============== </br></br>";
	
	for ($i = 1; $i <= $door; $i++) {
		$door_arr[$i] = new Door($i);
	}
	
	echo "</br> ==================== Init Employee =============== </br></br>";
	
	for ($i = 1; $i <= $employee; $i++) {
		$employee_arr[$i] = new Employee($i);
	}
	
	
	
	
	
	echo "</br> ==================== PROCESSING =============== </br></br>";
	
	// simple test
	// $employee_arr[1]->go_to_door($door_arr);
	// $employee_arr[2]->go_to_door($door_arr);
	// $employee_arr[5]->go_to_door($door_arr);
	// $employee_arr[10]->go_to_door($door_arr);
	
	//looping for all employee
	for ($i = 1; $i <= $employee; $i++) {
		$employee_arr[$i]->go_to_door($door_arr);
	}
	
	
	echo "</br> ==================== RESULT =============== </br></br>";
	
	for ($i = 1; $i <= $door; $i++) {
		echo "door ".$i;
		echo $door_arr[$i]->isOpen() ? " opened</br>" : " closed</br>";
	}
	

?>

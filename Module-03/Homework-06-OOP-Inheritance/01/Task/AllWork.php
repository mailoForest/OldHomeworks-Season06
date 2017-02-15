<?php

namespace Task2;

class AllWork
{
	private $tasks = [];
	private $freePlacesForTasks;
	private $currentUnassignedTask;
	
	private static $instance;
	
	const SIGNED = 1;
	const UNSUGNED = 0;
	
	public  function __construct()
   	{
// 		if (is_nan($this->currentUnassignedTask) || 
// 			is_nan($this->freePlacesForTasks) || 
// 			!is_array($this->tasks)){
// 			throw new \Exception('Wrong type of parameters!');
// 		}	
	}
	
	static public function instance()
	{
		if (!self::$instance){
			self::$instance = new AllWork();
		}
		return self::$instance;
	}
	
	public function addTask (Task $task)
	{
		if (count($this->tasks) >= 10){
			throw new \Exception('No free places for new tasks!');
		}
		$this->tasks[] = $task;
	}
	public function getNextTask ()
	{
		
	}
}
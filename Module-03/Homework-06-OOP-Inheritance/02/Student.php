<?php

class Student extends Person
{
	protected $score;
	
	public function __construct($name, $age, $isMale, $score)
	{
		parent::__construct($name, $age, $isMale);
		$this->setScore($score);
	}
	
	public function setScore($score)
	{
		if ($score > 2 && $score < 6){
			$this->score = $score;
		}
	}
	public function showStudentInfo()
	{
		return $this->showPersonInfo() . sprintf('Score: %d
				', $this->score);
	}
}
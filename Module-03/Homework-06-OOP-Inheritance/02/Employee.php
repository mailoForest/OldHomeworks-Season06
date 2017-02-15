<?php

class Employee extends Person
{
	const OVERTIME_BONUS = 1.5;
	const TIME_WORKING_DAY = 8;
	
	protected $daySalary;
	
	public function __construct($name, $age, $isMale, $daySalary)
	{
		parent::__construct($name, $age, $isMale);
		$this->setDaySalary($daySalary);
	}
	public function calculateOvertime($hours)
	{
		$moneyPerHour = $this->daySalary / self::TIME_WORKING_DAY;
		$overtimeMoney = round($moneyPerHour * self::OVERTIME_BONUS * $hours, 2);
		$result = "$this->name earns for overtime work: ";
		if ($this->age < 18){
			$this->daySalary += $overtimeMoney / self::OVERTIME_BONUS;
			return $result . round($overtimeMoney / self::OVERTIME_BONUS, 2);
		}
		$this->daySalary += $overtimeMoney;
		return $result . $overtimeMoney;
	}
	
	public function getDaySalary()
	{
		return $this->daySalary;
	}
	
	public function showEmployeeInfo()
	{
		return $this->showPersonInfo() . sprintf('Day salary: %d
				', $this->getDaySalary());
	}
}
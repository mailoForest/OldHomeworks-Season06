<?php

class Person
{
	protected $name;
	protected $age;
	protected $isMale;
	
	public function __construct($name, $age, $isMale)
	{
		$this->name = $name;
		$this->age = $age;
		$this->setIsMale($isMale);
	}
	
	public function getName()
	{
		return $this->name;
	}
	
	public function getIsMale()
	{
		return $this->isMale;
	}
	public function setIsMale($isMale)
	{
		if (!is_bool($isMale)){
			throw new Exception('Given value for $isMale is not a boolean!');
		}
		$this->isMale = $isMale;
	}
	public function getSex()
	{
		if ($this->getIsMale()){
			return 'Male';
		}
		return 'Female';
	}
	
	public function showPersonInfo()
	{
		return sprintf('
				Name:  %s
				Age:   %d
				Sex:   %s
				', $this->getName(), $this->getAge(), $this->getSex());
	}
}
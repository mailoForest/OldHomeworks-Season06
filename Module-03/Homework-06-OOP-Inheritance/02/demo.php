<?php

require_once 'autoload.php';

$person1 = new Person("Dobrina", 22, false);
$person2 = new Person("Ivo", 26, true);

$student1 = new Student('Kaloyan', 22, true, 4);
$student2 = new Student('Lia', 23, false, 5.5);

$employee1 = new Employee('Stanka', 50, false, 25);
$employee2 = new Employee('Rado', 17, true, 30);

$people = [$person1, $person2, $student1, $student2, $employee1, $employee2];

foreach ($people as $personel) {
	if($personel instanceof Student){
		echo $personel->showStudentInfo();
	
	} else if($personel instanceof Employee){
		echo $personel->showEmployeeInfo();
		
	} else  if ($personel instanceof Person){
		echo $personel->showPersonInfo();
		
	}
}

foreach ($people as $employee) {
	if($employee instanceof Employee){
		echo $employee->calculateOvertime(2), PHP_EOL;
	}
	
}

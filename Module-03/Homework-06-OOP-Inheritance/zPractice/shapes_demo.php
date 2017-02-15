<?php

	use Shape\Rectangle;
	use Shape\Square;
use Shape\Triangle;
	
	require_once 'autoload.php';
	
	$rectangle = new Rectangle(300, 300, 'rectangle.png');
	$square = new Square(300, 'square.png');
	$triangle = new Triangle(200, 200, 'triangle.png')

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8"/>
<title>Shapes</title>
</head>
<body>
	<h1><?= $rectangle->getDisplayTitle() ?></h1>
	<?php echo $rectangle->display()?>	
	<h1><?= $square->getDisplayTitle() ?></h1>
	<?php echo $square->display()?>	
	<h1><?= $triangle->getDisplayTitle() ?></h1>
	<?php echo $triangle->display()?>	
</body>
</html>
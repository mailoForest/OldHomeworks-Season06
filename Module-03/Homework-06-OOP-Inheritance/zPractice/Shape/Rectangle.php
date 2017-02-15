<?php

namespace Shape;

class Rectangle extends Shape
{
	public function getDisplayTitle()
	{
		return parent::getDisplayTitle() . " I am also a rectangle.";
	}
}
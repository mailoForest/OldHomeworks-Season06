<?php

namespace Shape;

class Triangle extends Shape
{
	public function getDisplayTitle()
	{
		return parent::getDisplayTitle(). ' I am also a triangle.';
	}
}
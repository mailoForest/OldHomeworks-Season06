<?php

namespace Shape;

class Square extends Rectangle
{
	public function __construct($width, $graphic)
	{
		parent::__construct($width, $width, $graphic);
	}
	public function getDisplayTitle()
	{
		return parent::getDisplayTitle() . " But I am also a square.";
	}
}
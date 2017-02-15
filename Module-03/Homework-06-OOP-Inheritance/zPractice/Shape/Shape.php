<?php

namespace Shape;

class Shape
{
	protected $width;
	protected $height;
	protected $graphic;
	
	public function __construct($width, $height, $graphic)
	{
		$this->graphic = $graphic;
		$this->height = $height;
		$this->width = $width;
	}
	
	public function resize($width, $height)
	{
		$this->height = $height;
		$this->width = $width;
	}
	
	public function display()
	{
		return sprintf('<img src="%s" width="$d" height="%d">', 'images/'.$this->graphic, $this->width, $this->height);
	}
	public function getDisplayTitle()
	{
		return 'I am a shape.';
	}
}
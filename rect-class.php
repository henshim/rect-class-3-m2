<?php
class rectangle
{
    public $width;
    public $height;

    public function __construct($width, $height)
    {
        $this->height = $height;
        $this->width = $width;
    }

    public function getArea()
    {
        return $this->width * $this->height;
    }

    public function getPerimeter()
    {
        return (($this->width + $this->height) * 2);
    }

    public function display()
    {
        return 'rectangle{' . 'width=' . $this->width . ', height= ' . $this->height . '}';
    }
}
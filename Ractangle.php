<?php
echo "Hello, World!";
echo "<br>";
class Rectangle
{
    private $width;
    private $length;
    public function __construct($width = 1.0, $length = 1.0)
    {
        $this->width = $width;
        $this->length = $length;
    }
    public function getWidth()
    {
        return $this->width;
    }
    public function getLength()
    {
        return $this->length;
    }
    public function setWidth($width)
    {
        $this->width = $width;
    }
    public function setLength($length)
    {
        return $this->length = $length;
    }
    public function __toString()
    {
        return "Rectangle[width=$this->width,length=$this->length]";
    }
    public function getArea()
    {
        return $this->width * $this->length;
    }
    public function getPerimeter()
    {
        return 2 * ($this->width + $this->length);
    }
}
$rectangle = new Rectangle(2.0, 3.0);
echo $rectangle->getArea();
echo "<br>";

<?php
echo "The Circle class represents a circle with a radius and color.";
echo "<br>";

class Circle
{
    private $radius;
    private $color;
    public function __construct($radius = 1.0, $color = "red")
    {
        $this->radius = $radius;
        $this->color = $color;
    }
    public function getRadius()
    {
        return $this->radius;
    }
    public function getColor()
    {
        return $this->color;
    }
    public function setRadius($radius)
    {
        $this->radius = $radius;
    }
    public function setColor($color)
    {
        return $this->color = $color;
    }
    public function __toString()
    {
        return "Circle[reduis=$this->radius,color=$this->color]";
    }
    public function gatArea()
    {
        return pi() * pow($this->radius, 2);
    }
}
echo "<br>";
$circle = new Circle(1.0, "blue");
echo $circle->gatArea();
echo "<br>";

echo $circle;
echo "<br>";

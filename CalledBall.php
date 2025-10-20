<?php
class CalledBell
{
    private $X;
    private $Y;
    private $radius;
    private $xDalete;
    private $yDalete;
    public function __construct($X, $Y, $radius, $xDalete, $yDalete)
    {
        $this->X = $X;
        $this->Y = $Y;
        $this->radius = $radius;
        $this->xDalete = $xDalete;
        $this->yDalete = $yDalete;
    }
    public function getX()
    {
        return $this->X;
    }
    public function getY()
    {
        return $this->Y;
    }
    public function getRadius()
    {
        return $this->radius;
    }
    public function setRadius($radius)
    {
        $this->radius = $radius;
    }
    public function getXDalete()
    {
        return $this->xDalete;
    }
    public function setXDalete($xDalete)
    {
        return $this->xDalete;
    }
    public function getyDalete()
    {
        return $this->xDalete;
    }
    public function setyDalete($xDalete)
    {
        return $this->xDalete;
    }
    public function move($xDalete, $yDalete)
    {
        $this->X += $xDalete;
        $this->Y += $yDalete;
    }
    public function reflectHorizontal()
    {
        $this->X = -$this->X;
    }
    public function reflectVertical()
    {
        $this->Y = -$this->Y;
    }
    public function __toString()
    {
        return "CalledBell[X=$this->X , Y=$this->Y , radius=$this->radius , xDalete=$this->xDalete , yDalete=$this->yDalete]";
    }
}
echo "<br>";
$bell = new CalledBell(10, 20, 5, 2, 3);
echo $bell->__toString();

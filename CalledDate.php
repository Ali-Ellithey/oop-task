<?php
class CalledDate
{
    private $day;
    private $month;
    private $year;
    public function __construct($day, $month, $year)
    {
        $this->day = $day;
        $this->month = $month;
        $this->year = $year;
    }
    public function getDay()
    {
        return $this->day;
    }
    public function getMonth()
    {
        return $this->month;
    }
    public function getYear()
    {
        return $this->year;
    }
    public function __toString()
    {
        return "CalledDate[day=$this->day,month=$this->month,year=$this->year]";
    }
}
echo "<br>";
$date = new CalledDate(15, 8, 2024);
echo $date->__toString();

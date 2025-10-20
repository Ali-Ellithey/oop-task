<?php
class CalledTime
{
    private $hours = [0 - 23];
    private $minutes = [0 - 59];
    private $seconds = [0 - 59];
    public function __construct($hours, $minutes, $seconds)
    {
        $this->hours = $hours;
        $this->minutes = $minutes;
        $this->seconds = $seconds;
    }
    public function getHours()
    {
        return $this->hours;
    }
    public function getMinutes()
    {
        return $this->minutes;
    }
    public function getSeconds()
    {
        return $this->seconds;
    }
    public function setHours($hours)
    {
        return $this->hours;
    }
    public function setMinutes()
    {
        return $this->minutes;
    }
    public function setSeconds()
    {
        return $this->seconds;
    }
    public function setTime($hours, $minutes, $seconds)
    {
        $this->hours = $hours;
        $this->minutes = $minutes;
        $this->seconds = $seconds;
    }
    public function nextSecond()
    {
        $this->seconds += 1;
        if ($this->seconds > 59) {
            $this->seconds = 0;
            $this->minutes += 1;
            if ($this->minutes > 59) {
                $this->minutes = 0;
                $this->hours += 1;
                if ($this->hours > 23) {
                    $this->hours = 0;
                }
            }
        }
    }
    public function __toString()
    {
        return "CalledTime[hours=$this->hours,minutes=$this->minutes,seconds=$this->seconds]";
    }
}
echo "<br>";
$time = new CalledTime(12, 20, 9);
$time->nextSecond();
echo $time->__toString();
echo "<br>";

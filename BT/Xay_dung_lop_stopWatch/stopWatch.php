<?php
class stopWatch{
    private float $startTime;
    private float $stopTime;
    public function __construct()
    {
        $this->startTime=microtime(true);
    }
    public function start()
    {
        return $this->startTime=microtime(true);
    }
    public function stop()
    {
        return $this->stopTime=microtime(true);
    }
    public function getElapsedTime()
    {
        return ($this->stopTime -$this->startTime)*1000;
    }
}

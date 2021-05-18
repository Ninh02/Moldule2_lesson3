<?php

class Fan
{
    const SLOW=1;
    const MEDIUM=2;
    const FAST=3;
    private int $speed;
    private float $radius;
    private string $color;
    private bool $status;

    public function __construct($speed, $radius, $color, $status)
    {
        $this->speed = $speed;
        $this->radius = $radius;
        $this->color = $color;
        $this->status = $status;
    }

    public function getSpeed(): string
    {
        switch ($this->speed){
            case self::SLOW:
                return "slow";
            case self::MEDIUM:
                return "medium";
            case self::FAST:
                return "fast";
        }
    }

    public function getRadius(): float
    {
        return $this->radius;
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function getStatus(): bool
    {
        return $this->status;
    }

    public function toString(): string
    {
        if ($this->getStatus()) {
            return "Fan is on {" . "speed=" . $this->getSpeed()."," . "color=" . $this->color .",". "radius=" . $this->radius . "}";
        } else {
            return "Fan is off {" . "speed=" . $this->getSpeed()."," ."color=" . $this->color .",". "radius=" . $this->radius . "}";
        }
    }
}
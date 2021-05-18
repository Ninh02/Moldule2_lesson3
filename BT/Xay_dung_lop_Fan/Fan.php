<?php

class Fan
{
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
        if ($this->speed === 1) {
            return 'slow';
        } elseif ($this->speed === 2) {
            return 'medium';
        } elseif ($this->speed === 3) {
            return 'fast';
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

    public function OnOff(): bool
    {
        return $this->status;
    }

    public function toString(): string
    {
        if ($this->OnOff() == true) {
            return "Fan is on {" . "speed=" . $this->getSpeed()."," . "color=" . $this->color .",". "radius=" . $this->radius . "}";
        } else {
            return "Fan is off {" . "speed=" . $this->getSpeed()."," ."color=" . $this->color .",". "radius=" . $this->radius . "}";
        }
    }
}
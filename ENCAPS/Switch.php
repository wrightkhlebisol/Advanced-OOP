<?php

class LightSwitch
{
    public function on()
    {
        echo "On";
    }

    public function off()
    {
        echo "Off";
    }

    protected function connect()
    {
        echo "Connect";
    }

    protected function activate()
    {
        echo "Activate";
    }
}

$switch1 = new LightSwitch();
$switch1->connect();

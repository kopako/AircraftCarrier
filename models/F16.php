<?php

class F16 extends Aircraft 
{

    public function __construct() {
        parent::__construct();
        $this->maxAmmo = 8;
        $this->baseDamage = 30;
    }
}
?>
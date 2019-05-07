<?php
class F36 extends Aircraft 
{

    public function __construct( ) {
        parent::__construct();
        $this->maxAmmo = 12;
        $this->baseDamage = 50;
        $this->priority = true;
    }

}
?>
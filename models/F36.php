<?php
class F36 extends Aircraft 
{

    public function __construct( ) {
        parent::__construct();
        $this->maxAmmo = 12;
        $this->baseDamage = 50;
    }

    function __toString() {
        $thisClass = get_class($this);
        $output= "Aircraft type: {$thisClass}, max_ammo: {$this->maxAmmo}, base_damage: {$this->baseDamage}";
        return $output;
         
    }
}
?>
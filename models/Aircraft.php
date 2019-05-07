<?php 
abstract class Aircraft 
{
    protected $maxAmmo;
    protected $baseDamage;
    protected $ammoStorage;

    public function __construct() {
        $this->ammoStorage=0;
    }

    public function __get($fieldName = null)
    {
        return $this->$fieldName;
    }

    public function __toString() {
        $thisClass = get_class($this);
        $output= "Aircraft type:{$thisClass},max_ammo:{$this->maxAmmo},base_damage: {$this->baseDamage}";
        return $output; 
    }
}

?>
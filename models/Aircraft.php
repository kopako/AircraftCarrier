<?php 
abstract class Aircraft 
{
    protected $maxAmmo;
    protected $baseDamage;
    protected $ammo;
    protected $priority;

    public function __construct() {
        $this->ammo=0;
        $this->priority=false;
    }

    public function __get($fieldName)
    {
        return $this->$fieldName;
    }

    public function fight()
    {
        $usedAmmo = $this->ammo;
        $this->ammo =0;
        $damage = $usedAmmo * $this->baseDamage;
        return $damage;
    }

    public function refill($var)
    {
        while($this->ammo<$this->maxAmmo && $var>0) 
        {
            $var -=1;
            $this->ammo+=1;
        }
        return $var;
    }

    public function getType()
    {
        return get_class($this);
    }

    public function isPriority()
    {
        return $this->priority;
    }

    public function getStatus() {
        $thisClass = get_class($this);
        $allDamage = $this->ammo*$this->baseDamage;
        $output= "Type: {$thisClass},\t Ammo: {$this->ammo},\t Base Damage: {$this->baseDamage}, All Damage: {$allDamage},\t ";
        return $output; 
    }

}

?>
<?php 
class Carrier {
    private $aircrafts;
    private $ammo;
    private $health;


    public function __construct($health,$ammo) {
        $this->aircrafts = array();
        $this->health = $health;
        $this->ammo = $ammo;
    }

    public function add($aircraft)
    {
        array_push($aircrafts, $aircraft);
    }

    public function fill()
    {
        // try 
        // {
        //     foreach ($this->aircrafts as &$aircraft) {
        //         $this->ammo = $aircraft->refill($this->ammo);
        // } catch (\Throwable $th) 
        // {
        //     throw $th;
        // }
        // }
    }

    // TODO: method fight

    // TODO: method getStatus
}
?>
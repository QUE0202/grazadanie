<?php
class Village 
{
    private $buildings;
    private $storage;
    private $upgradeCost;

    public function __construct()
    {
        $this->buildings = array(
            'townHall' => 1,
            'woodcutter' => 1,
            'ironMine' => 1,
            'goldMine' => 1,
            'quarry' => 1,
            'barraki' => 1,
        );
        $this->storage = array(
                'wood' => 0,
                'iron' => 0,
                'gold' => 0,
                'stone' => 0,
                'weapons' => 0,
        );
        $this->upgradeCost = array( //tablica wszystkich budynkow
            'woodcutter' => array(
                    2 => array(
                        'wood' => 100,
                        'iron' => 50,
                    ),
                ),
            'ironMine' => array(
                    1 => array(
                        'wood' => 100,
                    ),
                    2 => array(
                        'wood' => 300,
                        'iron' => 100,
                    )
                ),
            'goldMine' => array(
                    1 => array(
                        'iron' => 100,
                    ),
                    2 => array(
                        'wood' => 600,
                        'iron' => 200,
                        'gold' => 100,
                    )
                ),
            'quarry' => array(
                    1 => array(
                        'wood' => 500,
                    ),
                    2 => array(
                        'wood' => 1500,
                        'iron' => 125,
                        'gold' => 100,
                    )
                ),
            'barraki' => array(
                     1 => array(
                        'iron' => 2000,
                        'gold' => 8000,
                     ),
                     2 => array(
                         'iron' => 4000,
                         'gold' => 16000,
                     ),
                )
            );
    } 
    private function woodGain(int $deltaTime) : float
    {
        //liczymy zysk na godzine z wzoru poziom_drwala ^ 2
        $gain = pow($this->buildings['woodcutter'],2) * 100;
        // liczymy zysk na sekunde (godzina/3600)
        $perSecondGain = $gain / 3600;
        //zwracamy zysk w czasie $deltaTime
        return $perSecondGain * $deltaTime;
    }
    private function ironGain(int $deltaTime) : float
    {
        //liczymy zysk na godzine z wzoru poziom_drwala ^ 2
        $gain = pow($this->buildings['ironMine'],2) * 5000;
        // liczymy zysk na sekunde (godzina/3600)
        $perSecondGain = $gain / 3600;
        //zwracamy zysk w czasie $deltaTime
        return $perSecondGain * $deltaTime;
    }
    private function goldGain(int $deltaTime) : float
    {
        //liczymy zysk na godzine z wzoru poziom_Złotkina ^ 2
        $gain = pow($this->buildings['goldMine'],2) * 50;
        //zwracamy zysk w czasie $deltaTime
        return $perSecondGain * $deltaTime;
    }
    private function stoneGain(int $deltaTime) : float
    {
        //liczymy zysk na godzine z wzoru poziom_Kamieniarza ^ 2
        $gain = pow($this->buildings['quarry'],2) * 50;
        //zwracamy zysk w czasie $deltaTime
        return $perSecondGain * $deltaTime;
    }
    private function weaponsGain(int $deltaTime) : float
    {
       //liczymy zysk na godzine z wzoru poziom_Wojska ^ 2
       $gain = pow($this->buildings['barraki'],2) * 50;
       //zwracamy zysk w casie $deltaTime
       return $perSecondGain * $deltaTime;
    }








    public function gain($deltaTime) 
    {
        $this->storage['wood'] += $this->woodGain($deltaTime);
        $this->storage['iron'] += $this->ironGain($deltaTime);
        $this->storage['gold'] += $this->goldGain($deltaTime);
        $this->storage['stone'] += $this->stoneGain($deltaTime);
        $this->storage['weapons'] += $this->weaponsGain($deltaTime);
    }

}
?>














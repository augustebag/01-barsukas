<?php

class Kibiras2 {
    private static $akmenuKiekisVisuoseKibiruose;
    protected $akmenuKiekis = 0;
 
    public function __constructor() {
        self::$akmenuKiekisVisuoseKibiruose += $this->akmenuKiekis;
    }

    public function prideti1Akmeni() {
        $this->akmenuKiekis++;
        self::$akmenuKiekisVisuoseKibiruose += $this->akmenuKiekis;
    }   

    public function pridetiDaugAkmenu($kiekis) {
        $this->akmenuKiekis += $kiekis;
        self::$akmenuKiekisVisuoseKibiruose += $this->akmenuKiekis;
    } 
    
    public function kiekPririnktaAkm() {
        echo $this->akmenuKiekis;
    }

    static function getAkmenuKiekisVisuoseKibiruose() {
        echo self::$akmenuKiekisVisuoseKibiruose;
    }
}
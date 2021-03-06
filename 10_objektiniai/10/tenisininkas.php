<?php

class Tenisininkas {
    private $vardas;
    private $kamuoliukas = false;
    private static $zaidejas1;
    private static $zaidejas2;

    private static $start = false;

    public function __construct($name) {
        $this->vardas = $name;
        if (self::$zaidejas1 === null) {
            self::$zaidejas1 = $this;
            return;
        }
        if (self::$zaidejas2 === null) {
            self::$zaidejas2 = $this;
            return;
        }
        echo 'Vartininko nereik';
    }

    public static function zaidimoPradzia() {
        if (self::$zaidejas1 === null || self::$zaidejas2 === null) {
            echo 'Negali pats su savimi zaisti';
            die;
        }
        rand(0, 1) ? self::$zaidejas1->perduotiKamuoliuka() :
        self::$zaidejas2->perduotiKamuoliuka();
        self::$start = true;
    }

    public function arTuriKamuoliuka() {
        return $this -> kamuoliukas;
    }

    public function __get($prop) {
        if ($prop == 'vardas') {
            return $this->vardas;
        }
    }

    public function __set($prop, $val) {
        if ($prop == 'kamuoliukas') {
            $this->kamuoliukas = $val;
        }
    }

    public function perduotiKamuoliuka() {
        if (self::$zaidejas1 === null || self::$zaidejas2 === null) {
            echo 'Negali pats su savimi zaisti';
            die;
        }
        if (!$this->kamuoliukas && self::$start) {
            echo 'Perduoti negali, nes neturi kamuoliuko';
        }

        $this->kamuoliukas = false;

        // this is 1
        if ($this -> vardas == self::$zaidejas1->vardas) {
            self::$zaidejas2->kamuoliukas = true;
        }
        // this is 2
        if ($this -> vardas == self::$zaidejas2->vardas) {
            self::$zaidejas1->kamuoliukas = true;
        }
    }
}
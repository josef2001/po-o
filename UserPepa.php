<?php

declare(strict_types=1);

$instalace = new JOSEF;
 class JOSEF {
    
    public function __construct() {
 }

    private $blabla1;
    private $blabla2;
    protected $blabla3;
    protected $blabla4;
    protected $blabla5;
    public $blabla6 = 35 ;
    public $blabla7  = 30;
    public $blabla8 = 25;
    public $blabla9 = 20;
    public $blabla10 = 'dd';
  
   private $nameJosef;
  
    
   public function setnameJosef(string $nameJosef){
        $this->nameJosef =$nameJosef;
        
    }

    
    
    private function setblabla1 () {
        return $this->blabla1;
     }
     private function blabla2 () {
    return $this->blabla2;
         }
            public function getblabla6 () {
     return $this->blabla6;
            }
            public function getblabla7 () {
       return $this->blabla7;
                  }
            public function getblabla8 () {
     return $this->blabla8;
                  }
           public function getblabla9 () {
       return $this->blabla9;
                }
            public function getblabla10 () {
      return $this->blabla10;
                }
       /** Vrati prelozeny text
        * 
        * @param string $text
        * @return string
        */ 
    
       public function translate (  string $text): string{
        
           //preklada text
           $translate_text = $this->ts->translate($text);
           
           return $translate_text;
       /**
        * nebo viceradkovy
        * komentar
        */
          }
       }
var_dump ($instalace);
$number = new JOSEF();
echo '<br>';
echo '<br>';
$number->getblabla6 ('35');
echo $number-> getblabla6();
echo '<br>';
$number->getblabla7 ('30');
echo $number-> getblabla7();
echo '<br>';
$number->getblabla8 ('25');
echo $number-> getblabla8();
echo '<br>';
$number->getblabla9 ('20');
echo $number-> getblabla9();
echo '<br>';
$number->getblabla10 ('dd');
echo $number-> getblabla10();
echo '<br>';
echo '<br>';
echo '<br>';


?>
 <?php
 require_once dirname(__FILE__).'/Money.php';
 
 class Franc extends Money{

     function __construct($amount){
         $this->amount = $amount;
     }

     public function times($x)
     {
         return $this->amount * $x;
     }

     public function equals($doll){
         return($this->amount === $doll->amount);
     }
 }
 <?php
 require_once dirname(__FILE__).'/Money.php';
 
 class Franc extends Money{
    function __construct($amount){
        $this->amount = $amount;
    }
    
    public function times($x){
    	return new Franc($this->amount * $x);
    }
 }
 <?php
 require_once dirname(__FILE__).'/Money.php';
 
 class Franc extends Money{
    function __construct($amount){
        $this->amount = $amount;
        $this->currency = "CHF";
    }
    
    public function times($x){
    	return new Franc($this->amount * $x);
    }
 }
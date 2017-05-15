<?php

class Fibonacci{
    
    protected $sum;
    protected $numSet;
    
    function __construct() {
        $this->numSet = [];
        array_push($this->numSet, 0);
        array_push($this->numSet, 1);
    }
    
    private function unsetnums() {
        unset($this->num1, $this->num2, $this->num3);
    }
    
    private function OutputSequence() {
        for ($b = 0; $b < count($this->numSet); ++$b) {
            echo $this->numSet[$b];
            if ($b != end($this->numSet)) {
                echo ", ";
            }
        }
        return;
    }
    
    public function RunSequence() {
        for ($a = 1; $a < 40; ++$a) {
            if (count($this->numSet) == 2) {
                array_push($this->numSet, 2);
            } else {
                $this->unsetnums();
                $this->sum = $this->numSet[$a] + $this->numSet[$a - 1];
                array_push($this->numSet, $this->sum);
            }
        }
        $this->OutputSequence();
    }
    
}

$sys = new Fibonacci();
$sys->RunSequence();

?>

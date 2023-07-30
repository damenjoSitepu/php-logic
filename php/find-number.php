<?php 

class Number {
    /**
     * @var array
     */
    private array $numArr = [];

    /**
     * Initialize Data
     *
     * @param array $numArr
     */
    public function __construct(array $numArr = [])
    {
        $this->numArr = $numArr;
    }

    /**
     * Slowest Way Using For Loop To Find N Number Which Is The Target Number
     *
     * @param integer $numberTarget
     * @return string
     */
    public function findWithSlowestWay(int $numberTarget): string
    {
        // TODO: Detect if array not empty, do check it one by one
        if (empty($this->numArr)) {
            return "Value not found!";
        }

        $countNumArr = count($this->numArr);
        // TODO: If array only contains one value, please check it directly without using loop functionality
        if ($countNumArr === 1) {
            if ($this->numArr[0] === $numberTarget) {
                return "Value found at index 0";
            } else {
                return "Value not found!";
            }
        }

        // TODO: If more than one elements, please loop it one by one to check them itself
        for ($i = 0; $i < $countNumArr; $i++) { 
            if ($this->numArr[$i] === $numberTarget) {
                return "Value found at index " . $i;
            }
        }
        return "Value not found!";
    }
}

// Test Case 1 
echo (new Number([]))->findWithSlowestWay(10) . "\n";
// Test Case 2
echo (new Number([10]))->findWithSlowestWay(10) . "\n";
// Test Case 3
echo (new Number([14]))->findWithSlowestWay(10) . "\n";
// Test Case 4
echo (new Number([14,10,20]))->findWithSlowestWay(10) . "\n";
// Test Case 5
echo (new Number([14,15,20,10,56]))->findWithSlowestWay(10) . "\n";
// Test Case 6
echo (new Number([14,15,20,10,56]))->findWithSlowestWay(10) . "\n";
// Test Case 7
echo (new Number([14,15,20,10,56]))->findWithSlowestWay(11) . "\n";
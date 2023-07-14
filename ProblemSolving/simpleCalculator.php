<?php

class Calculator
{
    private $firstNum;
    private $secondNum;
    private $op;
    private $result;

    public function __construct($firstNum, $secondNum, $op)
    {
        $this->validateNums($firstNum, $secondNum);

        $this->firstNum = $firstNum;
        $this->secondNum = $secondNum;
        $this->op = $op;
    }
    
    public function Calculate()
    {
        if ($_SERVER['REQUEST_METHOD'] === "POST") {
            switch ($this->op)
            {
                case '+':
                    $this->result = $this->firstNum + $this->secondNum;
                    break;
                case '-':
                    $this->result = $this->firstNum - $this->secondNum;
                    break;
                case '*':
                    $this->result = $this->firstNum * $this->secondNum;
                    break;
                case '/':
                    try {
                        $this->result = $this->firstNum / $this->secondNum;
                    } catch (DivisionByZeroError $ex) {
                        echo 'Cannot Divide By Zero!';
                        die();
                    }
                    break;
                default:
                    echo 'Please Enter A Valid Operation!';
                    die();
            }
            return $this->result;
        }
        else return 0;
    }
    private function validateNums(...$nums): void
    {
        if (!is_numeric($nums[0]) || !is_numeric($nums[1]) ) {
            echo 'Please Enter A Valid Number!';
            die();
        }
    }
}

$firstNum = $_POST['first-num'] ?? 0;
$secondNum = $_POST['second-num'] ?? 0;
$op = $_POST['op'] ?? '+';

$calculator = new Calculator($firstNum, $secondNum, $op);
$result = $calculator->Calculate();

?>

<form method="POST">
    <label for="first-num">
        <input type="text" name="first-num" required placeholder="First Number">
    </label>
    <label for="second-num">
        <input type="text" name="second-num" required placeholder="Second Number">
    </label>
    <label for="op">
        <input list="op" name="op" required placeholder="Choose Operation">
        <datalist id="op">
            <option value="+">
            <option value="-">
            <option value="*">
            <option value="/">
        </datalist>
    </label>
    <input type="submit" value="Calculate">
    <label for="result">
        <input type="text" readonly value="<?= $result; ?>">
    </label>
</form>

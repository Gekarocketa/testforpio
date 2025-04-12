<?php
namespace app\forms;
class CalcForm {
    public $amount;
    public $interest;
    public $years;

    public function __construct() {
        $this->amount = null;
        $this->interest = null;
        $this->years = null;
    }
}
?>

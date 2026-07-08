<?php
class BankAccount {
    public int $number;
    public string $name;
    public float $balance;

    public function __construct(int $number, string $name, float $balance) {
        $this->number = $number;
        $this->name = $name;
        $this->balance = $balance;
    }

    public function deposit(float $amount): void {
        if ($amount > 0) {
            $this->balance += $amount;
        }
    }
}

// Tạo 1 tài khoản duy nhất
$bank1 = new BankAccount(2001230000, "Nguyen A", 500000);

if (isset($_POST['deposit'])) {
    $bank1->deposit((float)$_POST['amount']);
}
?>
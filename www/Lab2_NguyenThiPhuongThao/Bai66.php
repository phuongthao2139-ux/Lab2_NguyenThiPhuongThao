<?php

class Bai6_BankAccount {
    private $accountNumber;
    private $accountName;
    private $balance;

    public function __construct($accountNumber, $accountName, $initialBalance = 0) {
        $this->accountNumber = $accountNumber;
        $this->accountName = $accountName;
        $this->balance = $initialBalance;
    }

    public function deposit($amount) {
        if ($amount > 0) {
            $this->balance += $amount;
            echo "Nạp thành công " . number_format($amount) . " VND. Số dư hiện tại: " . number_format($this->balance) . " VND.<br>";
        }
    }

    public function withdraw($amount) {
        if ($amount > $this->balance) {
            echo "Rút tiền thất bại! Số dư không đủ.<br>";
        } else {
            $this->balance -= $amount;
            echo "Rút thành công " . number_format($amount) . " VND. Số dư còn lại: " . number_format($this->balance) . " VND.<br>";
        }
    }

    public function showBalance() {
        echo "Chủ TK: <strong>{$this->accountName}</strong> | Số dư: <strong>" . number_format($this->balance) . " VND</strong><br>";
    }
}

$account = new Bai6_BankAccount("2001230746", "Bùi Gia Quyền", 500000);
$account->showBalance();
$account->deposit(200000);
$account->withdraw(100000);
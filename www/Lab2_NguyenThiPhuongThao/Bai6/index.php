<?php
include "bank.php";
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Nạp tiền</title>
</head>

<body>

<h2>Nạp tiền vào tài khoản</h2>

<p><b>Số tài khoản:</b> <?= $bank1->number ?></p>

<p><b>Chủ tài khoản:</b> <?= $bank1->name ?></p>

<p><b>Số dư:</b> <?= number_format($bank1->balance, 0) ?> VND</p>


<form action="" method="post">
    <label>Nhập số tiền nạp:</label>
    <input type="number" name="amount" required>

    <button type="submit" name="deposit">
        Nạp tiền
    </button>
</form>

</body>
</html>
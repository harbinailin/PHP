<?php
class BankAccount
{
    private $name;
    private $balance;
    public function __construct($name)
    {
        $this->name = $name;
        $this->balance = 0.00;
    }
    public function getBalance()
    {
        return $this->balance;
    }
    public function getName()
    {
        return $this->name;
    }
    public function deposit($amount)
    {
        if ($amount >= 0.00) {
            $this->balance += $amount;
        }
    }
    public function withdraw($amount)
    {
        if ($amount >= 0.00 && $amount <= $this->balance) {
            $this->balance -= $amount;
        }
    }
    public function __toString()
    {
        return "{" . $this->name . ",$" . $this->balance . "}";
    }
}
$account1 = new BankAccount("张三");
$account1->deposit(5.00);
$account1->withdraw(1.25);
$account1->withdraw(1000.00);

$account2 = new BankAccount("李四");
$account2->deposit(999.00);
$account2->deposit(-15.00);
?>
<div>
    <strong>Account1:</strong><?= $account1 ?><br />
    <strong>Account2:</strong><?= $account2 ?>
</div>
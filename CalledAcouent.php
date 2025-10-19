<?php
class CalledAcouent
{
    private $id;
    private $name;
    private $balance;
    public function __construct($id, $name, $balance = 0.0)
    {
        $this->id = $id;
        $this->name = $name;
        $this->balance = $balance;
    }
    public function getId()
    {
        return $this->id;
    }
    public function getName()
    {
        return $this->name;
    }
    public function getBalance()
    {
        return $this->balance;
    }
    public function credit($amount)
    {
        $this->balance += $amount;
        return $this->balance;
    }
    public function debit($amount)
    {
        if ($amount <= $this->balance) {
            $this->balance -= $amount;
        } else {
            echo "Amount exceeded balance";
        }
        return $this->balance;
    }
    public function transferTo($anotherAccount, $amount)
    {
        if ($amount <= $this->balance) {
            $this->balance -= $amount;
            $anotherAccount->credit($amount);
        } else {
            echo "Amount exceeded balance";
        }
        return $this->balance;
    }
    public function __toString()
    {
        return "CalledAcouent[id=$this->id,name=$this->name,balance=$this->balance]";
    }
}
echo "<br>";
$account1 = new CalledAcouent(10, "Ali", 500.0);
$account2 = new CalledAcouent(12, "Sayed", 1000.0);
$account1->credit(200);
echo $account1->getBalance();
echo "<br>";
echo $account1->__toString();
echo "<br>";

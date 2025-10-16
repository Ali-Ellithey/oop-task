<?php

echo "The InvoiceItem class represents an item in an invoice with its details.";
echo "<br>";

class InvoiceItem
{
    private $id;
    private $desc;
    private $qty;
    private $unitPrice;

    public function __construct($id, $desc, $qty, $unitPrice)
    {
        $this->id = $id;
        $this->desc = $desc;
        $this->qty = $qty;
        $this->unitPrice = $unitPrice;
    }
    public function getId()
    {
        return $this->id;
    }
    public function getDesc()
    {
        return $this->desc;
    }
    public function getQty()
    {
        return $this->qty;
    }
    public function setQty($qty)
    {
        $this->qty = $qty;
    }
    public function getUnitPrice()
    {
        return $this->unitPrice;
    }
    public function setUnitPrice($unitPrice)
    {
        $this->unitPrice = $unitPrice;
    }
    public function getTotal()
    {
        return $this->qty * $this->unitPrice;
    }
    public function __tostring()
    {
        return "InvoiceItem [id=$this->id , desc=$this->desc ,Qty=->$this->qty , unitPrice=$this->unitPrice]";
    }
}

$invoiceItem = new InvoiceItem(1, "Laptop", 2, 1500);
echo "<br>";
echo $invoiceItem->__tostring();
echo "<br>";
echo $invoiceItem->getTotal();
echo "<br>";

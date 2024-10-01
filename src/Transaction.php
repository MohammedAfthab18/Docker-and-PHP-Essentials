<?php

declare(strict_types=1);

class Transaction {

    // use type hint
    private float $amount;
    public string $description;
    public float $taxamount;
    public float $discountamount;

    // using constructor - Magic Methods in PHP and destructor is also a Magic Method in PHP

    public function __construct(float $amount, string $description , float $taxamount , float $discountamount) {
        $this->amount = $amount;   // this.amount = amount
        $this->description = $description; // this.description = description
        $this->taxamount = $taxamount; // this.taxamount = taxamount 
        $this->discountamount = $discountamount; // this.discountamount = discountamount
        echo "Transaction created: {$this->description}<br>";
    } 
    // Destructor

    public function __destruct() {
        echo "Transaction destroyed: {$this->description}<br>";
    }
    // Accessing Private Variable in the Public Function -- Access Specifiers

    public function getAmount(): float{
        return $this->amount;
    }
    // Simple Method 

    // public function addTax(float $rate) {
    //     $this->taxamount = $this->amount * $rate /100;  // this.amount = this.amount * rate / 100;
    // }

    // public function getDiscount(float $rate) {
    //     $this->discountamount = $this->amount * $rate /100;
    // }

    // Method Chaining
     
    public function addTax(float $rate): self {
        $this->taxamount = $this->amount * $rate / 100;
        return $this; // return the current object for method chaining
    }

    public function getDiscount(float $rate): self {
        $this->discountamount = $this->amount * $rate / 100;
        return $this; // return the current object for method chaining
    }

    public function calculateTotalAmount(){
        return $this->amount + $this->taxamount - $this->discountamount;
    }

}

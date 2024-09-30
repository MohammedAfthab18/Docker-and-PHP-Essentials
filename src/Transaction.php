<?php

declare(strict_types=1);

class Transaction {
    // use type hint
    private float $amount;
    public string $description;
    public float $taxamount;
    public float $discountamount;

    public function __construct(float $amount, string $description , float $taxamount , float $discountamount) {
        $this->amount = $amount;   // this.amount = amount
        $this->description = $description; // this.description = description
        $this->taxamount = $taxamount; // this.taxamount = taxamount 
        $this->discountamount = $discountamount; // this.discountamount = discountamount
    } 

    public function getAmount(): float{
        return $this->amount;
    }

    // public function addTax(float $rate) {
    //     $this->taxamount = $this->amount * $rate /100;  // this.amount = this.amount * rate / 100;
    // }

    // public function getDiscount(float $rate) {
    //     $this->discountamount = $this->amount * $rate /100;
    // }

    // method chaining
     
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

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function paypalItem(){
    	return \PaypalPayment::item()->setName($this->titlte)
    		->setDescription($this->description)
    		->setCurrency('USD')
    		->setQuantity(1)
    		->setPrice($this->pricing/3.4);

    }
}

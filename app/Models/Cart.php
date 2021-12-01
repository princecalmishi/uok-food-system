<?php

namespace App\Models;


class Cart 
{

  public $food = null;
  public $totalQty = 0;
  public $totalPrice = 0;

        public function __construct($oldCart)
        {
                if($oldCart){
                    $this->food = $oldCart->food;
                    $this->totalQty = $oldCart->totalQty;
                    $this->totalPrice = $oldCart->totalPrice;

                }

        }

        public function add($food, $id){
            $storeditem = ['qty' => 0, 'price' => $food->Price, 'item' => $food ];
            if ($this->food){
                if (array_key_exists($id, $this->food)){
                    $storeditem = $this->food[$id];
                }
            }
            $storeditem['qty']++;
            $storeditem['price'] = $food->Price * $storeditem['qty'];
            $this->items[$id] = $storeditem;
            $this->totalQty++;
            $this->totalPrice += $food->Price;
        
        }


}

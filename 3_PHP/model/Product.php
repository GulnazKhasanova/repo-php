<?php


namespace app\model;

class Product extends Model
{
   
    public $id;
    public $name;
    public $price;
    public $countrymaker;
    public $maker;
    public $category_id;
    public $sale;
    public $promo;
    public $discount;


    public function getTablename(){
        return 'prod';
    }

    public function __construct($id = null, $name = null, $price = 0, $countrymaker = null, $maker = null, $category_id = null, $sale = null, $promo = null, $discount = null)
    {
        
        $this->id=$id;
        $this->name=$name;
        $this->price=$price;
        $this->countrymaker=$countrymaker;
        $this->maker=$maker;
        $this->category_id=$category_id;
        $this->sale = $sale;
        $this->promo = $promo;
        $this->discount = $discount;
    }
    public function __set($name,$value){
        $this->name = $value;
    }
    public function __get($name)
    {
        return $this->name; // TODO: Implement __get() method.
    }
}
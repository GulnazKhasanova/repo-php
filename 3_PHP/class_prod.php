<?php
/*---задание №1---*/

class Product
{
    /*---задание №2---*/
    private $id;
    private $name;
    private $price;
    private $countrymaker;
    private $maker;
    private $category_id;
    private $sale;
    private $promo;
    private $discount;

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

    /*---задание №3---*/
    private function add(){
        $error= "";
        $err=[
            'OK' => 'Файл загружен',
            'ERROR'=> 'Файл не загружен'
        ];
        if (!empty($_POST))
        {
           $path = "/my_php/job5/". $_FILES['myfile']['name'];
           if(move_uploaded_file($_FILES['tmp_name']['name'],$path)){

               header('location: /my_php/composer_proj/new_prod.php?error=OK');
               die();
           } else {

               header('location: /my_php/composer_proj/new_prod.php?error=ERROR');
               die();
           }

        }
        $error = $err[$_GET['error']];

        $link = mysqli_connect('localhost', 'root', '1111', 'gb');
        $name = $_POST['name_prod'];
        $alias = $_POST['alias'];
        $color = $_POST['color'];
        $price = $_POST['price'];
        $result = mysqli_query($link, "INSERT INTO prod (name, alias, color, price) VALUES ('{$name}','{$alias}','{$color}', '{$price}')");

    }
    private function del($id){
        $link = mysqli_connect('localhost', 'root', '1111', 'gb');
        $result = mysqli_query($link, "delete from prod where id = '{$id}';");
    }

   private function sale($price, $sale) {
       return round($price * $sale, 1, PHP_ROUND_HALF_ODD);
   }
   private function discount( $discount, $price, $promo = null) {
       if(is_null($promo)) {
           return $discount;
       } else {
           return  round($price * 0.3, 1, PHP_ROUND_HALF_ODD);
       }
   }
}
/*---задание №4---*/
class LargeProduct extends Product
{
    private $status;

    /**
     * LargeProduct constructor.
     */
    public function __construct($id = null, $name = null, $price = 0, $countrymaker = null, $maker = null, $category_id = null, $sale = null, $promo = null, $discount = null, $status = null)
    {
        parent::__construct($id, $name, $price, $countrymaker, $maker , $category_id, $sale, $promo, $discount);
        $this->status = $status;
    }
    public function reservation($id, $status) {
        return $status = 1;
    }
}
class AverageProduct extends Product
{
    private $creditterm;

    public function __construct($id = null, $name = null, $price = 0, $countrymaker = null, $maker = null, $category_id = null, $sale = null, $promo = null, $discount = null, $creditterm = null)
    {
        parent::__construct($id, $name, $price, $countrymaker, $maker, $category_id, $sale, $promo, $discount );
        $this->creditterm = $creditterm;
    }
    public function credit($creditterm, $id, $price){
        return round(($price * 0.3)/$creditterm, 1, PHP_ROUND_HALF_ODD);
    }

}

class SmallProductProduct extends Product
{
    private $count;
    public function __construct($id = null, $name = null, $price = 0, $countrymaker = null, $maker = null, $category_id = null, $sale = null, $promo = null, $discount = null, $count = null)
    {
        parent::__construct($id, $name, $price, $countrymaker, $maker, $category_id, $sale, $promo, $discount);
        $this-> count = $count;
    }
    public function wholesale($price,$id, $count){
        if(isset($count)){
            if($count >= 10 || $count <= 20){
                return $price * 0.8 * $count;
            } elseif ($count >= 20 || $count <= 40){
                return $price * 0.3 * $count;
            } else {
                return $price * 0.1 * $count;
            }
        }
    }
}

/*---5---*/
class A {
    public function foo() {
        static $x = 0;
        echo ++$x;
    }
}
$a1 = new A();
$a2 = new A();
$a1->foo();
$a2->foo();
$a1->foo();
$a2->foo();


//class A {
//    public function foo() {
//        static $x = 0;
//        echo ++$x;
//    }
//}
class B extends A {
}
$a1 = new A();
$b1 = new B();
$a1->foo();
$b1->foo();
$a1->foo();
$b1->foo();
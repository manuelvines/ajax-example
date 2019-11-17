<?php

 class Producto{
       
       private $products;


        
        function __construct(){
            //se poblan los productos 
            $this->products = [
                array("name"=>"iPhone 11 Pro",
                      "description"=>"2436 x 1125 pixeles, 5.8 pulgadas", 
                      "image"=>"iphone-11.jpeg", 
                      "price"=>"$31150.00"),
                
                array("name"=>"Huawei P30 Pro",
                      "description"=>"Pantalla 2340 x 1080 pixels, 6.47 pulgadas", 
                      "image"=>"huawei-30.jpeg", 
                      "price"=>"$4,889.00"),
                            
                array("name"=>"Redmi Note7",
                      "description"=>"Pantalla 2340 x 1080 pixeles, 6.3 pulgadas", 
                      "image"=>"xiaomi.jpeg", 
                      "price"=>"$4150.00")];
        }           
        
        //muestra todos los productos
        public function index(){
           $productsJSON = json_encode($this->products); 
           return $productsJSON;
        }

        //muestra un producto en especifico 
        public function find($id){
           $productJSON = json_encode($this->products[$id]); 
           return $productJSON;
        }



 }

    $products = new Producto();
    $producto = $products->index();
    echo $producto;

?>
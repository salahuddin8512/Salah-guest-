<?php


namespace App\classes;


class Product
{
    protected $products = [];
    protected $search_product;
    protected $result = [];
    protected $search_id;

    public function __construct($post = null)
    {
        if (isset($post['search_btn'])) {
            $this->search_id = $post['search'];
        }
    }

    public function getAllProduct(){

        return [
            0 => [
                'id'            => '1',
                'name'          => 'Shirt',
                'description'   => 'Blog Description',
                'price'         => '1200 tk',
                'image'         => '11.jpg',
                'brand'         => 'H&M',
                'category'      => 'Men'
            ],
            1 => [
                'id'            => '2',
                'name'          => 'Shirt',
                'description'   => 'Blog Description',
                'price'         => '1000 tk',
                'image'         => '2.jpg',
                'brand'         => 'EASY',
                'category'      => 'Men'
            ],
            3 => [
                'id'            => '3',
                'name'          => 'Shirt',
                'description'   => 'Blog Description',
                'price'         => '1000 tk',
                'image'         => '3.jpg',
                'brand'         => 'H&M',
                'category'      => 'Men'
            ],
            4 => [
                'id'            => '4',
                'name'          => 'Shirt',
                'description'   => 'Blog Description',
                'price'         => '1000 tk',
                'image'         => '4.jpg',
                'brand'         => 'H&M',
                'category'      => 'Men'
            ],
            5 => [
                'id'            => '5',
                'name'          => 'Shirt',
                'description'   => 'Blog Description',
                'price'         => '1000 tk',
                'image'         => '5.jpg',
                'brand'         => 'H&M',
                'category'      => 'Men'
            ],
            6 => [
                'id'            => '6',
                'name'          => 'Shirt',
                'description'   => 'Blog Description',
                'price'         => '1000 tk',
                'image'         => '6.jpg',
                'brand'         => 'H&M',
                'category'      => 'Men'
            ],
            7 => [
                'id'            => '7',
                'name'          => 'Shirt',
                'description'   => 'Blog Description',
                'price'         => '1000 tk',
                'image'         => '7.jpg',
                'brand'         => 'H&M',
                'category'      => 'Men'
            ],
            8 => [
                'id'            => '8',
                'name'          => 'Shirt',
                'description'   => 'Blog Description',
                'price'         => '1000 tk',
                'image'         => '8.jpg',
                'brand'         => 'H&M',
                'category'      => 'Men'
            ],


        ];
    }
    public function getProductById($id){

        $this->products = $this->getAllProduct();
        foreach ($this->products as $product){

            if ($product['id'] == $id){
                return $product;
            }
        }
    }

    public function searchProduct(){

        $this->search_product = $this->getAllProduct();
        foreach ($this->search_product as $prod){
            if ($this->search_id == $prod['id']){
                $this->result = $prod;
                break;
            }
        }
        return $this->result;
    }
}
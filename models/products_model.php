<?php
include_once "db/db.php";
class products_model
{
    private $link;
    public function __construct()
    {
        $this->link = new Db();
    }
    public function get_products()
    {
        $data = $this->link->query("select * from products order by
 product_name")->fetchAll();
        return $data;
    }
}

<?php
interface CRUD{
    function create();
    function list();
    function update();
    function delete();
}

class Common{
    function connectDatabase(){
        echo "This function is created to connect database";
    }

    function printData(){
        echo "This is data printing method";
    }
}

class Category extends Common implements CRUD{
    function create(){
        echo "Category Create";
    }

    function list(){
        echo "Category list";
    }

    function update(){
        echo "Category update";
    }

    function delete(){
        echo "Category delete";
    }
}


class Product extends Common implements CRUD{
    function create(){
        echo "Product Create";
    }

    function list(){
        echo "Product list";
    }

    function update(){
        echo "Product update";
    }

    function delete(){
        echo "Product delete";
    }
}

$computer  = new Category();
$computer->create();
$computer->update();
$computer->list();
$computer->delete();


$acer  = new Product();
$acer->create();
$acer->update();
$acer->list();
$acer->delete();
?>

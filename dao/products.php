<?php

    function products_select_all(){
        $sql = "Select * from products";
        return pdo_query($sql);
    }
    function products_select_one($id){
        $sql = "SELECT * FROM products where id  = ?";
        return pdo_query_one($sql,$id);
    }
    function products_insert($name, $price, $desc, $status, $type_id, $quality, $date, $img){
         $sql = "INSERT INTO products(name, price, desc, status, type_id, quality, date, img) Values ('?,?,?,?,?,?,?,?')";
         pdo_execute($sql , $name, $price, $desc, $status, $type_id, $quality, $date, $img);
    }
     function products_update($id,$name){
        $sql = "UPDATE products SET name = ? WHERE id = ?";
        pdo_execute($sql , $name , $id);
     }
     function products_delete($id){
        $sql = "DELETE FROM products WHERE id = ?";
        if(is_array($id)){
            foreach($id as $item){
                pdo_execute($sql , $item);
            }
        }
        pdo_execute($sql , $id);
     }

?>
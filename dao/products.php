<?php

function get_all_products($list_ids = []){
    $sqlQuery = "select * from products";
    // $list_ids = [5, 4]
    if(count($list_ids) > 0){
        // select * from categories where id in (5, 4)
        $sqlQuery .= " where id in (" . implode(', ', $list_ids) . ")";
    }
    return pdo_query($sqlQuery);
}
    function products_select_one($id){
        $sql = "SELECT * FROM products where id  = ?";
        return pdo_query_one($sql,$id);
    }
    function products_insert($name, $price,$mo_ta,$so_luong,$status,$type_id,$img){
        $sqlQuery = "INSERT INTO products (name,price,mo_ta,so_luong,status,type_id,img) VALUES (?,?,?,?,?,?,?)";
        pdo_execute($sqlQuery, $name, $price,$mo_ta,$so_luong,$status,$type_id,$img);
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
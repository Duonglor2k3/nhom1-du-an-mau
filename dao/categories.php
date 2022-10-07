<?php

    function categories_select_all(){
        $sql = "Select * from categories ";
        return pdo_query($sql);
    }
    function categories_select_one($id){
        $sql = "SELECT * FROM categories where id  = ?";
        return pdo_query_one($sql,$id);
    }
    function categories_insert($name){
         $sql = "INSERT INTO categories(name) Values (?)";
         pdo_execute($sql , $name);
    }
     function categories_update($id,$name){
        $sql = "UPDATE categories SET name = ? WHERE id = ?";
        pdo_execute($sql , $name , $id);
     }
     function categories_delete($id){
        $sql = "DELETE FROM categories WHERE id = ?";
        if(is_array($id)){
            foreach($id as $item){
                pdo_execute($sql , $item);
            }
        }
        pdo_execute($sql , $id);
     }

?>
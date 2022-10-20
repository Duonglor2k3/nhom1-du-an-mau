<?php

    function categories_select_all(){
        $sql = "Seletc * from categoies ";
        return pdo_query($sql);
    }
    function categories_select_one($id){
        $sql = "SELECT * FROM categoies where id  = ?";
        return pdo_query_one($sql,$id);
    }
    function categories_insert($name){
         $sql = "INSERT INTO categoies(name) Values (?)";
         pdo_execute($sql , $name);
    }
     function categories_update($id,$name){
        $sql = "UPDATE categories SET name = ? WHERE id = ?";
        pdo_execute($sql , $name , $id);
     }
     function categories_delete($id){
        $sql = "DELETE FROM categoies WHERE id = ?";
        if(is_array($id)){
            foreach($id as $item){
                pdo_execute($sql , $item);
            }
        }
        pdo_execute($sql , $id);
     }

?>
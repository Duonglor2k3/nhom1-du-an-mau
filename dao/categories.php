<?php
function get_all_categories($list_ids = []){
    $sqlQuery = "select * from categories";
    // $list_ids = [5, 4]
    if(count($list_ids) > 0){
        // select * from categories where id in (5, 4)
        $sqlQuery .= " where id in (" . implode(', ', $list_ids) . ")";
    }
    return pdo_query($sqlQuery);
}
    function categories_select_one($id){
        $sql = "SELECT * FROM categories where id  = ?";
        return pdo_query_one($sql, $id);
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
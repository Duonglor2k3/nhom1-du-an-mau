<?php

    function users_select_all(){
        $sql = "Select * from users ";
        return pdo_query($sql);
    }
    function users_select_one($id){
        $sql = "SELECT * FROM users where id  = ?";
        return pdo_query_one($sql,$id);
    }
    function users_insert($name, $email, $phone, $address, $password){
         $sql = "INSERT INTO users(name, email, phone, address, password) Values (?,?,?,?,?)";
         pdo_execute($sql ,$name, $email, $phone, $address, $password);
    }
     function users_update($id,$name){
        $sql = "UPDATE users SET name = ? WHERE id = ?";
        pdo_execute($sql , $name , $id);
     }
     function users_delete($id){
        $sql = "DELETE FROM users WHERE id = ?";
        if(is_array($id)){
            foreach($id as $item){
                pdo_execute($sql , $item);
            }
        }
        pdo_execute($sql , $id);
     }

?>
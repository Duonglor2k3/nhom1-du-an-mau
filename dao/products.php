<?php 
// truy vấn ds loại đã nhập
// mới lên trước
function products_select_all(){
        $sql = "Select * from products ";
        return pdo_query($sql);
    }
// function products_insert($name, $price, $desc, $status, $type_id, $quality, $date){
//     $sql = "insert into products(name,price,status,type_id,quality,date) values('?','?','?','?','?','?')";
//     pdo_execute($sql,$name, $price, $desc, $status, $type_id, $quality, $date);
// }  
function products_insert($name){
    $sql = "insert into products(name) values(?)";
    pdo_execute($sql,$name);
}    
?>
<?php 
// truy vấn ds loại đã nhập
// mới lên trước
function products_select_all(){
        $sql = "Select * from products ";
        return pdo_query($sql);
    }
?>
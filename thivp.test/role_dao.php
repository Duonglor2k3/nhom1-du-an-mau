<?php
require_once './dao/base_dao.php';
function role_all(){
    $sql = "select * from roles";
    return pdo_query($sql);
}
function role_destroy($id){
    $sql = 'delete from roles where id = ?';
    pdo_excute($sql, $id);
}
?>
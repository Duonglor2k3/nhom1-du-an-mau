<?php
// lấy ra nhiều
function categorie_select_all(){
  $sql = "SELECT * FROM categories";
  return  pdo_query($sql);
}
//lấy 1
function categorie_select_id($id){
  $sql = "SELECT * FROM categories Where id = ?";
  return pdo_query_one($sql, $id);
}
//thêm
function categorie_insert($name){
  $sql = "INSERT INTO categories (name) values(?)";
  pdo_execute($sql, $name);
}
//sửa
function categorie_update($id, $name){
  $sql = "UPDATE categories SET name = ? where id = ?";
  pdo_execute($sql, $name, $id);
}
//xoá
function categorie_delete($id){
  $sql = "DELETE FROM categories WHERE id = ?";
  if (is_array($id)) {
    foreach ($id as $item) {
      pdo_execute($sql, $item);
    }
  }
  pdo_execute($sql, $id);
}

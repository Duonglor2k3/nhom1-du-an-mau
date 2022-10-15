<?php
// lấy ra nhiều
function product_select_all()
{
  $sql = "SELECT * FROM products";
  return  pdo_query($sql);
}
//lấy 1
function product_select_id($id)
{
  $sql = "SELECT * FROM products Where id = ?";
  return pdo_query_one($sql, $id);
}
//thêm
function product_insert($name, $price, $description, $status, $type_id,$img){
  $sql = "INSERT INTO products (name, price,description, status, type_id,img) values(?, ?, ?, ?, ?,?)";
  pdo_execute($sql, $name, $price, $description, $status, $type_id,$img);
}
//sửa
function product_update($id, $name, $price, $description, $status, $type_id,$img)
{
  $sql = "UPDATE products SET name = ?, price = ?, description = ?, status = ?, type_id = ? , img = ? where id = ?";
  pdo_execute($sql, $name, $price, $description, $status, $type_id,$img);
}
//xoá
function product_delete($id){
  $sql = "DELETE FROM products WHERE id = ?";
  if (is_array($id)) {
    foreach ($id as $item) {
      pdo_execute($sql, $item);
    }
  }
  pdo_execute($sql, $id);
}
?>
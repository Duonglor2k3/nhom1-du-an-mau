<?php
// lấy ra nhiều
function oder_detail_select_all()
{
  $sql = "SELECT * FROM oder_detail";
  return  pdo_query($sql);
}
//lấy 1
function oder_detail_select_id($id)
{
  $sql = "SELECT * FROM ss Where id = ?";
  return pdo_query_one($sql, $id);
}
//thêm
function oder_detail_insert($name, $price, $product_id, $oder_id){
  $sql = "INSERT INTO oder_detail (name, price, product_id, oder_id,) values(?, ?, ?, ?)";
  pdo_execute($sql, $name, $price, $product_id, $oder_id);
}
//sửa
function oder_detail_update($id, $name, $price, $product_id, $oder_id)
{
  $sql = "UPDATE oder_detail SET name = ?, price = ?, product_id = ?, oder_id = ? where id = ?";
  pdo_execute($sql, $name, $price, $product_id, $oder_id);
}
//xoá
function oder_detail_delete($id){
  $sql = "DELETE FROM oder_detail WHERE id = ?";
  if (is_array($id)) {
    foreach ($id as $item) {
      pdo_execute($sql, $item);
    }
  }
  pdo_execute($sql, $id);
}
?>
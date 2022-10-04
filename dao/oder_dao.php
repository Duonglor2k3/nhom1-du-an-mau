<?php
// lấy ra nhiều
function oder_select_all()
{
  $sql = "SELECT * FROM oder";
  return  pdo_query($sql);
}
//lấy 1
function oder_select_id($id)
{
  $sql = "SELECT * FROM ss Where id = ?";
  return pdo_query_one($sql, $id);
}
//thêm
function oder_insert($name, $date, $acc_id, $products_id){
  $sql = "INSERT INTO oder (name, date, acc_id, products_id,) values(?, ?, ?, ?)";
  pdo_execute($sql, $name, $date, $acc_id, $products_id);
}
//sửa
function oder_update($id, $name, $date, $acc_id, $products_id)
{
  $sql = "UPDATE oder SET name = ?, date = ?, acc_id = ?, products_id = ? where id = ?";
  pdo_execute($sql, $name, $date, $acc_id, $products_id);
}
//xoá
function oder_delete($id){
  $sql = "DELETE FROM oder WHERE id = ?";
  if (is_array($id)) {
    foreach ($id as $item) {
      pdo_execute($sql, $item);
    }
  }
  pdo_execute($sql, $id);
}
?>
<?php
function pdo_get_connect(){
    $connect = new PDO("mysql:host=202.92.5.49;dbname=tmudobpahosting_nhom1;charset=utf8","tài khoản hosting","mật khẩu");
    return $connect;
}
function pdo_execute($sql){
    $connect = pdo_get_connect();
    $inputData = array_slice(func_get_arg(), 1);
    $stmt = $connect -> prepare($sql);
    $stmt->execute($inputData);
}
function pdo_query($sql){
    $connect = pdo_get_connect();
    $stmt = $connect -> prepare($sql);
    $stmt->execute();
    return $stmt->fetchall();
}
function pdo_query_one($sql){
  $sql_args = array_slice(func_get_args(), 1);
  try {
    $conn = pdo_get_connection();
    $stmt = $conn->prepare($sql);
    $stmt->execute($sql_args);
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    return $row;
  } catch (PDOException $e) {
    throw $e;
  } finally {
    unset($conn);
  }
}

function pdo_query_value($sql){
  $sql_args = array_slice(func_get_args(), 1);
  try {
    $conn = pdo_get_connection();
    $stmt = $conn->prepare($sql);
    $stmt->execute($sql_args);
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    return array_values($row)[0];
  } catch (PDOException $e) {
    throw $e;
  } finally {
    unset($conn);
  }
}
?>
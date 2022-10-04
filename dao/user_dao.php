<?
require_once './dao/base_dao.php';

// lấy nhiều
function user_select_all()
{
  $sql = "SELECT * FROM users";
  return  pdo_query($sql);
}
//lấy 1
function user_select_id($id)
{
  $sql = "SELECT * FROM users Where id = ?";
  return pdo_query_one($sql, $id);
}

function store($name, $email, $password, $role_id, $avatar = ''){
    $sql = "insert into users (name, email, password, role_id, avatar) values (?, ?, ?, ?, ?)";
    $pdo_execute($sql, $name, $email, $password, $role_id, $avatar);
}
?>
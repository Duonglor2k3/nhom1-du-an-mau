<?php
    //  Kết nối database

    function pdo_get_connect(){
        $connect = new PDO(
            "mysql:host=202.92.5.49;dbname=kefxcfqphosting_nhom1;charset=utf8",
            "kefxcfqphosting_nhom1",
            "quyduong2k3");
        return $connect;
    }

    function pdo_execute($sql){
        $connect = pdo_get_connect();
        $inputData = array_slice(func_get_args(), 1);
        $stmt = $connect->prepare($sql);
        $stmt->execute($inputData);
    }
    
    function pdo_query($sql){
        $connect = pdo_get_connect();
        $stmt = $connect->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    
    function pdo_query_one($sql){
        $sql_args = array_slice(func_get_args(),1);
        try {
            $connect = pdo_get_connect();
            $stmt = $connect->prepare($sql);
            $stmt->execute($sql_args);
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            return $row;
        } catch (\Throwable $th) {
            throw $th;
        }finally{
            unset($connect);
        }
    }
?>
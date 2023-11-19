<?php
    function connect(){
        if (!defined('HOSTNAME')) {
            define('HOSTNAME', 'localhost');
        }
        
        if (!defined('DBNAME')) {
            define('DBNAME', 'duan1');
        }
        
        if (!defined('USERNAME')) {
            define('USERNAME', 'root');
        }
        if (!defined('PASSWORD')) {
            define('PASSWORD', '');
        }
        try{
            $connect = new PDO("mysql:host=".HOSTNAME.";dbname=".DBNAME,USERNAME,PASSWORD);
            $connect -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            return $connect;
        }catch(PDOException $e){
            echo "Lỗi kết nối: ".$e->getMessage();
        }
    }

    function all($table, $select = ['*'], $where = 1){
        $conn = connect();
        $select = implode(',',$select);
        $sql = "SELECT $select FROM `$table` where $where";
        $stmt = $conn->prepare($sql);
        $stmt -> execute();
        $list = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $list;
    }

    function find($table, $select = ['*'], $where = 1){
        $conn = connect();
        $select = implode(',',$select);
        $sql = "SELECT $select FROM `$table` where $where";
        $stmt = $conn->prepare($sql);
        $stmt -> execute();
        $list = $stmt->fetch(PDO::FETCH_ASSOC);
        return $list;
    }

    function update($table,$id = 0, $data = []){
        $conn = connect();
        $datas = [];
        foreach($data as $key => $value){
            $datas[] = "`$key` = '$value'";
        }
        $dataSql = implode(', ',$datas); 
        $sql = "UPDATE `$table` SET $dataSql WHERE `$table`.`id` = $id";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
    }


    function insert($table,$data = []){
        $conn = connect();
        $values = array_values($data);
        $value = implode("','",$values);
        $keys = array_keys($data);
        $key = implode('`,`',$keys);
        $sql = "INSERT INTO `$table` (`$key`) VALUES ('$value')";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
    }

    function lastInsertId($table,$data = []){
        $conn = connect();
        $values = array_values($data);
        $value = implode("','",$values);
        $keys = array_keys($data);
        $key = implode('`,`',$keys);
        $sql = "INSERT INTO `$table` (`$key`) VALUES ('$value')";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        return $conn->lastInsertId();
    }


    function delete($table,$id){
        $conn = connect();
        $sql = "DELETE FROM $table WHERE `$table`.`id` = $id";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
    }
?>
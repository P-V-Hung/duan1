<?php
    function connect(){
        define("HOSTNAME","localhost");
        define("DBNAME","xuongphp1");
        define("USERNAME","root");
        define("PASSWORD","");
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

    $list = all("mon_hoc",['trang_thai','ten_mon_hocc'],'trang_thai = 1');
    echo "<pre>";
    print_r($list);
?>
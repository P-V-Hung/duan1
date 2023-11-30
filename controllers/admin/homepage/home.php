
<?php 
    $listBill = BillAll(['bill_userid','SUM(bill_price) as total_price',"SUM(bill_count) as total_count"],"1 group by bill_userid order by total_price limit 5");
    require_once $views."homepage/home.php";
?>

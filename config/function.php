<?php 
    function reUrl($url)
    {
      echo '<script> window.location.href = "admin.php?url=' . $url . '"; </script>';
    }
    function reUrlClient($url)
    {
      echo '<script> window.location.href = "?url=' . $url . '"; </script>';
    }

    function statusVou($count,$used,$date){
        $today = date('Y-m-d');
        if ($used == $count) {
            echo "<span style='color:red'>Đã hết</span>";
        }else if( $date < $today ) {
            echo "<span style='color:red'>Hết hạn</span>";
        }else{
            echo "<span style='color:green'>Khả dụng</span>";
        }
    }
?>
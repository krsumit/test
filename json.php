<?php
include(env.php);
if($_server['request_method']=="GET"){
    
    $task = isset($_GET['userId']) ? mysqli_real_escape_string($conn,$_GET['userId']):"";
    $sql= "select * from  user where userId = '{$task}';"
    $get_data_query = mysqli_query($conn,$sql) or die(mysql_error($conn));
    if (mysql_num_rows($get_data_query)!=0){
        $res = array();
        while ($r = mysqli_fetch_array($get_data_query)){
            extract($r);
            $res[] = array('userId'=>$task,'username'=>$username,'repo'=>$repo);
        }
        $json = array("info"=>$res);
    }
}
mysqli_close();
header('content-type:application/json');
echo json_encode($json)

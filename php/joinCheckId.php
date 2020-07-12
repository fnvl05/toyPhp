<?php header("Content-Type: application/json");
    $userId = json_decode(file_get_contents('php://input')); 
    $userReId = $userId->{'userId'};

    function checkId($user_id){
        $connet =  mysqli_connect('localhost','root','','test_toy');
        $sql_IdSelect = "select users_id from test_users";
        $idCheck = 'YES';
        $result = mysqli_query($connet ,$sql_IdSelect);
        $row = mysqli_fetch_all($result);

        for($i = 0; $i < count($row); $i++){
            if($row[$i][0] === $user_id){
                $idCheck = 'No';
                break;
            }
        }
        mysqli_close($connet);
        return $idCheck; 
    }
    
    $checkId = checkId($userReId);
    echo json_encode(array('checkId'=>$checkId));
?>
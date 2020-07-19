<?php header("Content-Type: application/json");
    $json = json_decode(file_get_contents('php://input'));
    
    $userId = $json->{'userId'};
    $userPw = $json->{'userPw'};
    
    function checkLogin($userId ,$userPw){
        $connect = mysqli_connect("localhost","root","","test_toy");  
        
        //아이디 찾는 sql 문
        $userSqlId = "select users_id from test_users where users_id = '$userId'";
        //비밀번호 찾는 sql 문
        $userSqlPw = "select users_pw from test_users where users_id = '$userId'";
        
        //부분 찾기
        $sqlTestId = mysqli_query($connect, $userSqlId);
        $sqlTestPw = mysqli_query($connect, $userSqlPw);
        
        $RowId = mysqli_fetch_array($sqlTestId);
        $RowPw = mysqli_fetch_array($sqlTestPw);

        $resultId = "";
        $resultPw = "";
            
        if($RowId !== null && $RowPw !== null){  
            $resultId = $RowId['users_id'];
            $resultPw = $RowPw['users_pw'];
        }
        
        $userResultId = $resultId === $userId ? true : false; 
        $userResultPw = password_verify($userPw , $resultPw);
        
        $checkLogin='No';
        if($userResultId && $userResultPw) $checkLogin='Yes';
        mysqli_close($connect);
        return $checkLogin;
    }

    $checkLogin = checkLogin($userId, $userPw);
    echo json_encode(array('checkLogin'=>$checkLogin));
?>
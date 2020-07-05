<?php
    $connet = mysqli_connect("localhost","root",'','test_toy');
    
    $usersId = $_POST['userId'];
    $usersPw1 = password_hash($_POST['userPw1'], PASSWORD_DEFAULT);
    $usersName = $_POST['userName'];
    $usersGender = $_POST['gender'];
    $usersEmail = $_POST['email1'].'@'.$_POST['email2'];
    $usersHobby = (string)implode("," , $_POST['hobby']);
    $usersProfile = $_FILES["userIcon"]["name"];
    $usersContent = $_POST['content'];

    function resultProfile($users_profile){
        if($users_profile === ''){
            $usersProfile = '/toyPhp/resource/image/unnamed.jpg';
        }else{
            $usersProfile = (string)$users_profile;
        }
        return $usersProfile;
    }
    function resultContent($users_content){
        if($users_content === ''){
            $users_content = '잘부탁드립니다.';
        }else {
            $users_content = $_POST['content'];
        }
        return $users_content;
    }

    $resultProfile = resultProfile($usersProfile);
    $resultContent = resultContent($usersContent);

    $insert_sql = "insert into test_users(users_id, users_pw, users_name, users_gender, users_email,
    users_hobby, users_profile, users_content) values ('$usersId','$usersPw','$usersName','
    $usersGender','$usersEmail','$usersHobby','$resultProfile','$resultContent')";

    mysqli_query($connet, $insert_sql);
    mysqli_close($connet);

    $file_dir = "C:/xampp/htdocs/toyPhp/resource/image/usersIcon/";
    $filePath = $file_dir.$usersProfile;
    
    if(move_uploaded_file($_FILES["userIcon"]["tmp_name"], $filePath)){
        $fileUserIcon = "/toyPhp/resource/image/usersIcon".$_FILES['userIcon']['name'];
    }

    Header("Location:/toyPhp/php/loginForm.php");
?>
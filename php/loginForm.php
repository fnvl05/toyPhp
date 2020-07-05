<!DOCTYPE html>
<html class="loginHtml">
	<head>
		<meta http-equiv= "Content-type" content="text/html; charset=utf-8">
		<title>로그인</title>
		<link rel="stylesheet" type="text/css" href="/toyPhp/css/style.css"/>
	</head>
	<body class="loginBody">
		<nav>
			<?php require_once 'nav.php';?>
		</nav>
		<section class="paddingSection">
        	<div class="login">
        	<div class="loginLeft"></div>
			<div class="loginRight">
    			<div class="loginForm">
            		<form method = "post" action="login.php" enctype="multipart/form-data">
            			<input type = "text" class = "user" name = "id" placeholder="아이디" ><br/>
            			<input type = "text" class = "user" name = "pw" placeholder="비밀번호"><br/>
            			<input type = "submit" class = "LoginForm__Login" name = "submit" value = "로그인">
            		</form>
    			</div>
    			<hr/>
				<div class="loginForm__selectId">
	    			<a href="#">아이디 찾기</a>
	    			<a href="#">비밀번호 찾기</a>
	    			<a href="/test_01/php/joinForm.php">회원가입</a>
				</div>
			</div>
        	</div>
		</section>
	</body>
</html>
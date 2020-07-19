<!DOCTYPE html>
<html class="loginHtml">
	<head>
		<meta http-equiv= "Content-type" content="text/html; charset=utf-8">
		<title>로그인</title>
		<link rel="stylesheet" type="text/css" href="/shopping/css/style.css"/>
	</head>
	<body class="loginBody">
		<nav>
			<?php require_once '../nav.php';?>
		</nav>
		<section class="paddingSection">
        	<div class="login">
        	<div class="loginLeft"></div>
			<div class="loginRight">
    			<div class="loginForm">
            		<form method = "post" action="login.php" enctype="multipart/form-data" name = "loginForm">
            			<input type = "text" class = "user" name = "id" id="userId" placeholder="아이디" ><br/>
						<input type = "password" class = "user" name = "pw" id="userPw" placeholder="비밀번호"><br/>
						<p><span class="checkId"></span></p>
						<input type = "button" class = "LoginForm__Login" name = "submit" value = "로그인" onclick="moveLogin()" id="loginAjax">
            		</form>
    			</div>
    			<hr/>
				<div class="loginForm__selectId">
	    			<a href="#">아이디 찾기</a>
	    			<a href="#">비밀번호 찾기</a>
	    			<a href="/toyPhp/php/joinForm.php">회원가입</a>
				</div>
			</div>
        	</div>
		</section>
		<script src = "/shopping/js/loginJs.js"></script>
	</body>
</html>
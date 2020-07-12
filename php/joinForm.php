<!DOCTYPE html>
	<html>
		<head>
			<meta http-equiv= "Content-type" content="text/html; charset=utf-8">
			<title>입력페이지</title>
			<link rel="stylesheet" type="text/css" href="/toyPhp/css/style.css"/>
		</head>
		<body>
			<nav>
				<?php require 'nav.php';?>
			</nav>
			<section class="paddingSection">
			<h1>회원가입</h1>
    			<div class="joinForm">	
            		<form method = "post" action="joinInsert.php" enctype="multipart/form-data" name="joinForm">
            			<input type="text" name="userId" placeholder="아이디를 입력하세요" class="join_text" id="userId"><br/>
						<p class="help_block">
							<span class="checkId"></span>
						</p>
						<input type="password" name="userPw1" placeholder="비밀번호를 입력하세요" class="join_text" id="userPw1"><br/>
						<input type="password" name="userPw2" placeholder="비밀번호를 입력하세요" class="join_text" id="userPw2"><br/>
						<p>
							<span class="checkPw"></span> 
						</p>
						<input type="text" name="userName" placeholder="이름을 입력하세요" class="join_text" id="userName"><br/>
						<p class="help_block">
							<span class = "checkUserName"></span>
						</p>
						<div class="joinForm_gender">
                			<span class="join_genderTitle">성별</span>
                			<span class="normalSpan">남자</span>
                			<input type="radio" name="gender" value="남" class="join_radio"/>
                			<span class="normalSpan">여자</span>
                			<input type="radio" name="gender" value="여" class="join_radio">	<br/>					
						</div>
						<p>
							<span class = "checkUserGender"></span>
						</p>
            			<input type="text" name="email1" placeholder="이메일을 입력하세요" class="join_emaliText" id="userEmail1"> @
            			<select name="email2" class="join_select" id="userEmail2">
            				<option value="" selected>선택하세요</option>
            				<option value="hanmail.net">hanmail.net</option>
            				<option value="google.com">gmail.com</option>
            				<option value="naver.com">naver.com</option>
						</select>
						<p>
							<span class = "checkUserEmail"></span>
						</p>
            			<hr class="join__hr"/>
            			<ul class="joinForm__bobby">
            				<li class="joinForm__bobbyTitle">취미</li>
            				<li>여행 <input type="checkbox" name="hobby[]" value='여행'/></li>
            				<li>맛집 <input type="checkbox" name="hobby[]" value='맛집'/></li>
            				<li>게임 <input type="checkbox" name="hobby[]" value='게임'/></li>
            				<li>영화 <input type="checkbox" name="hobby[]" value='영화'/></li>
            				<li>그림 <input type="checkbox" name="hobby[]" value='그림'/></li>
            				<li>독서 <input type="checkbox" name="hobby[]" value='독서'/></li>
						</ul>
						<p>
							<span class="checkUserHobby"></span>
						</p>
            			<div id="join_userProfile">
                			유저 프로필
                			<input type="file" name="userIcon">
            			</div>
            			<h3>한마디</h3>
            			<textarea rows="3" cols="54" name = "content"></textarea><br/><hr class="join__hr"/>
            			<div class="join_button">
        	    			<input type = "button" onclick = "fromCheck()" value = "전달"/>
    	        			<input type = "reset" value = "다시"/>
	            			<input type="button" onclick="backIndex();" value="뒤돌아가기">
            			</div>
            		</form>
    			</div>
			</section>
			<script src="/toyPhp/js/joinJs.js"></script>
		</body>
	</html>
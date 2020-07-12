function moveLogin(){
    
};

document.querySelector('#loginAjax').addEventListener('click', function(){
    const userId = document.querySelector('#userId').value;
    const userPw = document.querySelector('#userPw').value;
    const url = "/toyPhp/php/loginCheck.php";
    ajax(userId, userPw, url);
})

function ajax(userId, userPw, url){
    const xhttp = new XMLHttpRequest();
    const data = {
        userId : userId,
        userPw : userPw
    };
    xhttp.onreadystatechange = function(){
        if(xhttp.readyState === xhttp.DONE){
            if(xhttp.status === 200 || xhttp.status === 201){
                const json = JSON.parse(xhttp.responseText)
                check(json);
            }
        }
    };
    xhttp.open("POST", url, true);
    xhttp.setRequestHeader('content-type', 'application/json');
    xhttp.send(JSON.stringify(data));
}

function check(json){
    const checkId = document.querySelector('.checkId');
    if(json.checkLogin == "No"){
        checkId.innerText = "아이디 및 비밀번호를 다시 입력하세요"
        checkId.style.color = "red";
        checkId.style.fontSize = "10px";
        checkId.style.fontWeight = "bold";
        checkId.style.display = "flex";
        checkId.style.justifyContent = "center";
    }
}
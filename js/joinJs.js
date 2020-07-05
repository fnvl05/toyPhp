document.querySelector("#userId").addEventListener('blur', function(){
    let userId = document.querySelector("#userId").value;
    const url = "/toyPhp/php/joinCheckId.php";
    ajax(url, userId);
})

function ajax(url, userId){
    const xhttp = new XMLHttpRequest();
    let data = {
        userId: userId
    };
    console.log(data.userId);
    xhttp.onreadystatechange = function(){
        if(xhttp.readyState === xhttp.DONE){
            if(xhttp.status === 200 || xhttp.status === 201){
                console.log(xhttp.responseText);
                let json = JSON.parse(xhttp.responseText);
                check(json);
            }else {
                console.log(xhttp.responseText);
            }
        }
    };
    function check(json){
        if(json.checkId === 'No'){
            const checkId = document.querySelector('.checkId');
            checkId.innerText = "아이디를 사용할수 없습니다.";
            checkId.style.color = 'red';
            checkId.style.fontWeight = 'bold';
        }else if(json.checkId === 'YES'){
            const checkId = document.querySelector('.checkId');
            checkId.innerText = "사용할수 있는 아이디입니다.";
            checkId.style.color = '#01DF3A';
            checkId.style.fontWeight = 'bold';
        }
    }
    xhttp.open("POST", url, true);
    xhttp.setRequestHeader('content-type', 'application/json');
    xhttp.send(JSON.stringify(data));
}

document.querySelector('#userPw2').addEventListener('blur',function(){
    let userPw1 = document.querySelector('#userPw1').value;
    let userPw2 = document.querySelector('#userPw2').value;

    if(userPw1 !== userPw2){
        const checkPw = document.querySelector('.checkPw');
        checkPw.innerText = "다시 확인하고 입력하세요";
        checkPw.style.color = 'red';
        checkPw.style.fontWeight = 'bold';
    }else {
        const checkPw = document.querySelector('.checkPw');
        checkPw.innerText = "";
    }
});

function fromCheck(){
    console.log("!!");
    alert("안돼!");
    return false;
}
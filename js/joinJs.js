document.querySelector("#userId").addEventListener('blur', function(){
    let userId = document.querySelector("#userId").value;
    const url = "/toyPhp/php/joinCheckId.php";
    console.log(ajax(url, userId));
})

function ajax(url, userId){
    const xhttp = new XMLHttpRequest();
    const data = {
        userId: userId
    };
    
    xhttp.open("POST", url, true);
    xhttp.setRequestHeader('content-type', 'application/json');
    xhttp.send(JSON.stringify(data));

    xhttp.onreadystatechange = function(){
        if(xhttp.readyState === xhttp.DONE){
            if(xhttp.status === 200 || xhttp.status === 201){
                return xhttp.responseText;
            }else{
                return console.log("안된다.");
            }
        }
    };
}

function check(json){
    const checkId = document.querySelector('.checkId');
    if(json.checkId === 'No'){
        checkId.innerText = "아이디를 사용할수 없습니다.";
        checkId.style.color = 'red';
        checkId.style.fontWeight = 'bold';
    }else if(json.checkId === 'YES'&& document.querySelector('#userId').value != ''){
        checkId.innerText = "사용할수 있는 아이디입니다.";
        checkId.style.color = '#01DF3A';
        checkId.style.fontWeight = 'bold';
    }else if(json.checkId === 'YES'&& document.querySelector('#userId').value == ''){
        checkId.innerText = "";
    }
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
    const userId = document.querySelector('#userId').value;
    const userPw1 = document.querySelector('#userPw1').value;
    const userPw2 = document.querySelector('#userPw2').value;
    const userName = document.querySelector('#userName').value;
    const userGender = document.getElementsByName('gender');
    const userEmail1 = document.querySelector('#userEmail1').value;
    const userEmail2 = document.querySelector('#userEmail2').value;
    const userHobby = document.getElementsByName('hobby[]');

    const formCheck = resultCheck(userId, userPw1, userPw2, userName, userGender, userEmail1, userEmail2, userHobby);
        
    if(formCheck && checkUserId){
        document.joinForm.submit();
    }          
}

function checkRadio(userGender){
    const length = userGender.length;
    let check = false;
    for(let i = 0; i < length; i++){
        if(userGender[i].checked == true){
            check = true;
            break;
        }
    }
    return check;
}

function checkHobby(userHobby){
    const length = userHobby.length;
    let check = false;
    for(let i = 0; i < length; i++){
        if(userHobby[i].checked == true){
            check = true;
            break;
        }
    }
    return check;
}

//입력을 잘 했는지 판별 함수
function resultCheck(userId, userPw1, userPw2, userName, userGender, userEmail1, userEmail2, userHobby){
    // 시각적으로 보여줄 메세지
const checkId = document.querySelector('.checkId').value;
const checkPw = document.querySelector('.checkPw').value;
const checkName = document.querySelector('.checkUserName');
const checkEmail = document.querySelector('.checkUserEmail');
const checkGender = document.querySelector('.checkUserGender');
const checkUserHobby = document.querySelector('.checkUserHobby');
        
// 체크가 있는지 없는지 판별
const resultGender = checkRadio(userGender);
const resultHobby = checkHobby(userHobby);

let fromCheck = false;
let userIdCheck = false;
let userPwCheck = false;
let userNameCheck = false;
let userGenderCheck = false;
let userEmailCheck = false;
let userHobbyCheck = false;

if(userId == ''){
    checkId.innerText = "아이디를 입력해주세요";
    checkId.style.color = "red";
    checkId.style.fontWeight = "bord";
    userIdCheck = false;
}else{
    checkId.innerText = "";
    userIdCheck = true;
}

if(userPw1 == '' || userPw2 == ''){
    checkPw.innerText = "비밀번호를 입력해주세요";
    checkPw.style.color = "red";
    checkPw.style.fontWeight = "bord";
    userPwCheck = false;
}else{
    checkPw.innerText = "";
    userPwCheck = true;
}

if(userName == ''){
    checkName.innerText = "이름을 입력해주세요";
    checkName.style.color = "red";
    checkName.style.fontWeight = "bord";
    userNameCheck = false;
}else {
    checkName.innerText = "";
    userNameCheck = true;
}
if(!resultGender){
    checkGender.innerText = "성별을 체크해주세요"
    checkGender.style.color = "red";
    checkGender.fontWeight = "bord";
    userGenderCheck = false;
}else {
    checkGender.innerText = "";
    userGenderCheck = true;
}
if(userEmail1 == '' || userEmail2 == ''){
    checkEmail.innerText = "이메일을 입력해주세요";
    checkEmail.style.color = "red";
    checkEmail.style.fontWeight = "bord";
    userEmailCheck = false;
}else{
    checkEmail.innerText = "";
    userEmailCheck = true;
}
if(!resultHobby){
    checkUserHobby.innerText = "취미를 선택해주세요";
    checkUserHobby.style.color = "red";
    checkUserHobby.style.fontWeight = "bord";
    userHobbyCheck = false;
}else {
    checkUserHobby.innerText = "";
    userHobbyCheck = true;
}

if(userIdCheck && userPwCheck && userNameCheck && userGenderCheck && userEmailCheck && userHobbyCheck){
    fromCheck = true;
}else {
    fromCheck = false;
}
return fromCheck;
}
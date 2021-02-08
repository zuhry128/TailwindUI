let userName = document.getElementById('username');
let passWord = document.getElementById('password');

function preventLogin() {
    if(userName !="", passWord !="") {
        alert("please fill required form below");
    } 
}
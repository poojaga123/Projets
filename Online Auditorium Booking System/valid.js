var email=document.forms['form']['email'];
var psw=document.forms['form']['psw'];
var confpsw=document.forms['form']['psw-repeat'];


var email_error=document.getElementById('email_error');
var psw_error=document.getElementById('psw_error');
var pswrep_error=document.getElementById('pswrep_error');


email.addEventListener('textInput',email_Verify);
psw.addEventListener('textInput',psw_Verify);
confpsw.addEventListener('textInput',pswrep_verify);

function validated()
{
    if(email.value.length < 9) {
        email.style.border="1px solid red";
        email_error.style.display="block";
        email.focus();
        return false;
    }
    if(psw.value.length < 9) {
        psw.style.border="1px solid red";
        psw_error.style.display="block";
        psw.focus();
        return false;
    }
    if(confpsw.value.length < 9) {
        confpsw.style.border="1px solid red";
        pswrep_error.style.display="block";
        confpsw.focus();
        return false;
    }
     
}
function email_Verify(){
    if(email.value.length >=5) {
        email.style.border="1px solid silver";
        email_error.style.display="none";
        return true;
}
}
function psw_Verify(){
    if(psw.value.length >=5) {
        psw.style.border="1px solid silver";
        psw_error.style.display="none";
        return true;
}
}
function pswrep_verify(){
    if(confpsw.value.length >=8) {
        confpsw.style.border="1px solid silver";
        pswrep_error.style.display="none";
        return true;
}
}


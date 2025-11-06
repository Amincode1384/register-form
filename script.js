// description of moteghayer
const signUpbutton=document.getElementById('signupbotton');

const signInButton=document.getElementById('signinbutton');

const signInform=document.getElementById('signin');

const signUpForm=document.getElementById('signup');

// creat function 

signUpbutton.addEventListener('click',function(){

    signInform.style.display="none";
    signUpForm.style.display='block';
})
signUpbutton.addEventListener('click',function(){
 signUpForm.style.display='none';
    signInform.style.display="block";
   
})
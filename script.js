// description of moteghayer
const signUpbutton=document.getElementById('signupbotton');

const signInButton=document.getElementById('signinbutton');

const signInform=document.getElementById('signin');

const signUpForm=document.getElementById('signup');

// creat function for signin and signup button

signUpbutton.addEventListener('click',function(){

    signInform.style.display="none";
    signUpForm.style.display='block';
})
signInButton.addEventListener('click',function(){
 signUpForm.style.display="none";
    signInform.style.display="block";
   
})
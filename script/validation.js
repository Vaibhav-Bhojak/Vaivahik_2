function validateForm(){
let naam =document.forms["myform"]["name"].value;
let email = document.getElementById('.email').value;
let password = document.getElementById('.password').value;

if (naam == " ") {
    alert('fill')
}
}
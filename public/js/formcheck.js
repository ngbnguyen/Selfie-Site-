// Get vars
let name = document.querySelector("input.name");
let last = document.querySelector("input.last");
let email = document.querySelector("input.email");
let subject = document.querySelector("input.subject");
let message = document.querySelector("input.message");
// get help-block for errors display
let namehelp = document.querySelector(".help-block .name");
let lasthelp = document.querySelector(".help-block .last");
let emailhelp = document.querySelector(".help-block .email");
let subjecthelp = document.querySelector(".help-block .subject");
let messagehelp = document.querySelector(".help-block .message");


let errors = [];
name.addEventListener("focusout", function() {
console.log(name.value);
checkLength(name, 2, 20);
errorHandler(namehelp);
})
last.addEventListener("focusout", function() {
console.log(last.value);
checkLength(last, 2, 20);
errorHandler(lasthelp);
})
email.addEventListener("focusout", function() {
checkEmail(email);
errorHandler(emailhelp);
})
subject.addEventListener("focusout", function() {
console.log(subject.value);
checkLength(subject, 2, 20);
errorHandler(subjecthelp);
})
message.addEventListener("focusout", function() {
console.log(message.value);
checkLength(message, 1, 1);
errorHandler(messagehelp);
})
function checkLength(input, min, max) {
let inputval = input.value.length;
if(inputval < min || inputval > max) {
errors.push(true);
} else {
errors.push(false);
}
}
function checkEmail(email) {
var pattern = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
if(!pattern.test(email.value)) {
errors.push(true);
} else {
errors.push(false);
}
}

function errorHandler(targetclass)
{

if(errors[errors.length-1])
{
  targetclass.classList.add("warning");
}
else {
  targetclass.classList.remove("warning");
}
}

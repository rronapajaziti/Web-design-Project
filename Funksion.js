let i =0;
let imgVarg=['Photos/hotel1.jpg','Photos/hotel5.jpg','Photos/hotel3.jpg','Photos/hotel4.jpg'];

function nextImg(){
  document.getElementById('slide').src = imgVarg[i];
  if(i<imgVarg.length -1){
    i++;
  }else{
    i=0;
  }
}
function prevImg(){
  document.getElementById('slide').src = imgVarg[i];
  if(i> 0){
    i++;
  }else{
    i= imgVarg.length -1;
  }
}

document.addEventListener(onload,nextImg());
document.addEventListener(onload,prevImg());


function emalValid(){
  let email = document.getElementById('email');
  let emailError = document.getElementById('emailiError');

  emailError.innerText = '';
  let emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

  if (!emailRegex.test(email.value)) {
    emailError.innerText = 'Example: name@gmail.com';
    return;
  }
  window.location.href = "Travel.html";
}

function validimiFlights(){
  let flyingFrom = document.getElementById('fromF');
  let flyingTo = document.getElementById('toF');
  let departing = document.getElementById('departingF');
  let returning = document.getElementById('returningF');
  let adults = document.getElementById('adultsF');
  let children = document.getElementById('childrenF');
  let name = document.getElementById('nameF');
  let lastName = document.getElementById('lastNameF');
  let email2 = document.getElementById('emailF');

  // Erroret
  let flyingFromError = document.getElementById('flyingFromError');
  let flyingToError = document.getElementById('flyingToError');
  let departingError = document.getElementById('departError');
  let returningError = document.getElementById('returnError');
  let adultsError = document.getElementById('adultsError');
  let childrenError = document.getElementById('childrenError');
  let nameError = document.getElementById('nameError');
  let lastNameError = document.getElementById('lastNameError');
  let email2Error = document.getElementById('emailErrors');


}

// -------------------------------------Log in-----------------------------------



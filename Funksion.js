let i =0;
let imgVarg=['Photos/hotel1.jpg','Photos/hotel6.jpg','Photos/hotel5.jpg','Photos/hotel3.jpg','Photos/hotel7.jpg'];

function nextImg(){
  if(i % 2 === 0){
    //nese i ehte cift shfaq img 1
    document.getElementById('slide').src = imgVarg[i];
    if(i+1<imgVarg.length){
      //foton e dyte ne varg e bene te dyten ne rresht
      document.getElementById('slide2').src = imgVarg[i+1];
    }
  }else{
    //nese i eshte tek shfaq foton e dyte
    document.getElementById('slide2').src = imgVarg[i];
    if(i -1 >= 0){
      //nese eshte nje foto para kesaj merre ate si te paren ne rresht
      document.getElementById('slide').src = imgVarg[i-1];
    }
  }
  i++;
  //nese i behet ma e madhe se vargu.length beje i=0
  if(i>= imgVarg.length){
    i=0;
  }
  setTimeout(nextImg,1600);
}

window.addEventListener('load',nextImg);


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

  flyingFromError.innerText='';
  flyingToError.innerText='';
  departingError.innerText='';
  returningError.innerText='';
  adultsError.innerText='';
  childrenError.innerText='';
  nameError.innerText='';
  lastNameError.innerText='';
  email2Error.innerText='';

  let flyingFromRegex = /^[A-Za-z\s'-]{2,}$/;
  let flyingToRegex = /^[A-Za-z\s'-]{2,}$/;
  let departingRegex = /^(0[1-9]|1[0-2])-(0[1-9]|[12][0-9]|3[01])-\d{4}$/;
  let returningRegex= /^(0[1-9]|1[0-2])-(0[1-9]|[12][0-9]|3[01])-\d{4}$/;
  let adultsRegex= /^[1-9][0-9]*$/;
  let childrenRegex = /^[0-9]*$/;
  let nameRegex = /^[A-Za-z]{2,}$/;
  let surnameRegex = /^[A-Za-z]{2,}$/;
  let emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

  if (!flyingFromRegex.test(flyingFrom.value)) {
    flyingFromError.innerText = 'Invalid city';
    return;
  }
  if (!flyingToRegex.test(flyingTo.value)) {
    flyingToError.innerText = 'Invalid city';
    return;
  }
  if (!departingRegex.test(departing.value)) {
    departingError.innerText = 'Invalid Date';
    return;
  }

  



}

// -------------------------------------Log in-----------------------------------



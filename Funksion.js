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
  setTimeout(nextImg,1000);
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

function dateValidim(){
   //merr dates e sotme
   var currentDateTime = new Date();
  currentDateTime.setDate(currentDateTime.getDate() + 1);
   var year = currentDateTime.getFullYear();
   var month = (currentDateTime.getMonth() + 1);
   var date = (currentDateTime.getDate());
 
   //sigurohemi qe muaji dhe data jan nga dy numra
   if(date < 10) {
     date = '0' + date;
   }
   if(month < 10) {
     month = '0' + month;
   }
 
   var dateTomorrow = year + "-" + month + "-" + date;
   var departingD = document.querySelector("#departingF");
   var returningD = document.querySelector("#returningF");
 
   departingD.setAttribute("min", dateTomorrow);
   departingD.onchange = function () {
    //min prej dates se selektuar ne departing
   returningD.setAttribute("min", this.value);
  }
}
//ne load te faqes bllokon datat e meparshme tek departing
  window.addEventListener('load',dateValidim);

function validimiFlights(){
  let flyingFrom = document.getElementById('fromF');
  let flyingTo = document.getElementById('toF');
  let adults = document.getElementById('adultsF');
  let children = document.getElementById('childrenF');
  let name = document.getElementById('nameF');
  let lastName = document.getElementById('lastNameF');
  let email2 = document.getElementById('emailF');
  var isValid = true;

  // Erroret
  let flyingFromError = document.getElementById('flyingFromError');
  let flyingToError = document.getElementById('flyingToError');
  let adultsError = document.getElementById('adultsError');
  let childrenError = document.getElementById('childrenError');
  let nameError = document.getElementById('nameError');
  let lastNameError = document.getElementById('lastNameError');
  let email2Error = document.getElementById('emailErrors');

  flyingFromError.innerText='';
  flyingToError.innerText='';
  adultsError.innerText='';
  childrenError.innerText='';
  nameError.innerText='';
  lastNameError.innerText='';
  email2Error.innerText='';


  let flyingFromRegex = /^[A-Za-z\s'-]{2,}$/;
  let flyingToRegex = /^[A-Za-z\s'-]{2,}$/;
  let adultsRegex= /^[1-9][0-9]*$/;
  let childrenRegex = /^[0-9]*$/;
  let nameRegex = /^[A-Za-z]{2,}$/;
  let lastNameRegex = /^[A-Za-z]{2,}$/;
  let emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

  if (!flyingFromRegex.test(flyingFrom.value)) {
    flyingFromError.innerText = 'Invalid city';
    isValid=false;
  }
  if (!flyingToRegex.test(flyingTo.value)) {
    flyingToError.innerText = 'Invalid city';
    isValid=false;
  }


  if (!adultsRegex.test(adults.value)) {
    adultsError.innerText = 'There must be at least one adult';
    isValid=false;
  }
  if (!childrenRegex.test(children.value)) {
    childrenError.innerText = 'Add a valid number';
    isValid=false;
  }
  if (!nameRegex.test(name.value)) {
    nameError.innerText = 'Invalid name';
    isValid=false;
  }
  if (!lastNameRegex.test(lastName.value)) {
    lastNameError.innerText = 'Invalid Last name';
    isValid=false;
  }
  if (!emailRegex.test(email2.value)) {
    email2Error.innerText = 'Enter a valid email, Example: name@gmail.com';
    isValid=false;
  }
  if(isValid){      
    window.location.href = "Travel.html";
  }
}





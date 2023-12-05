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

    var email =document.getElementById('email').value;
    var emailRegex = /^[^\s@] + @[^\s@] + \.[^\s@] +$/;
    if(!emailRegex.test(email)){
        alert('Please enter a valid email address');
        return false;

    }

}

// -------------------------------------Log in-----------------------------------



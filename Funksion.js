// const body = document.body;
const slider = document.querySelectorAll('.slide');
const prev = document.querySelectorAll('.previous');
const next = document.querySelectorAll('.next');

let i = 0;

next[0].addEventListener('click',() => {
    i++;
    if(i >slider.length -1){
        i =0;
    }
    setBgToBody();
    setActiveSlides();
});
prev[0].addEventListener('click',() => {
    i--;
    if(i < 0 ){
        i = slider.length -1;
    }
    setBgToBody();
    setActiveSlides();
});

function setBgToBody(){
    body.style.backgroundImage = slider[i].style.backgroundImage
}
function setActiveSlides(){
    slider.forEach((slide) => slide.classList.remove('active'));
    slides[i].classList.add('active');
}



function emalValid(){

    var email =document.getElementById('email').value;
    var emailRegex = /^[^\s@] + @[^\s@] + \.[^\s@] +$/;
    if(!emailRegex.test(email)){
        alert('Please enter a valid email address');
        return false;

    }

}

// -------------------------------------Log in-----------------------------------



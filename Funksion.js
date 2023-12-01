const slides = document.querySelector(".slides")
var i =0;
var imgVarg = [
    "Photos/hotel1.jpg",
    "Photos/hotel2.jpg",
    "Photos/hotel4.jpg",
    "Photos/hotel5.jpg"
]
function nextSlide(){
    document.getElementById('slide').src = imgVarg[i];
    if(i< imgVarg.length -1){
        i++;
    }
    else{
        i=0;
    }
    document.body.addEventListener('load',nextSlide());
    
}
function prevSlide(){
    document.getElementById('slide').src = imgVarg[i];
    if(i>0){
        i--;
    }else{
        i= imgVarg.length-1;
    }
    document.body.addEventListener('load',prevSlide());

}


// -------------------------------------Log in-----------------------------------



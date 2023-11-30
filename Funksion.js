var i =0;
var imgVarg = [
    "Photos/hotel1.jpg",
    "Photos/hotel2.jpg",
    "Photos/hotel4.jpg",
    "Photos/hotel5.jpg"
]
function nextSlide(){
    if(i< imgVarg.length -1){
        i++;
    }
    else{
        i=0;
    }
    document.body.addEventListener('load',nextSlide());
}
function prevSlide(){
    if(i>0){
        i--;
    }else{
        i= imgVarg.length-1;
    }
    document.getElementById('slide').src = imgVarg[i];
}


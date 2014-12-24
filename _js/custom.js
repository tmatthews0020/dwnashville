sliderint = 1;
sliderNext= 2;

$(document).ready(function(){
  $("#slider>img#1").fadeIn(300);
  startSlider();


});


function startSlider(){
  count = $("#slider > img").size();

  loop = setInterval(function() {

    if(sliderNext > count){
      sliderNext = 1;
      sliderint = 1;
    }
    $("#slider > img").fadeOut(300);
    $("#slider > img#" + sliderNext).fadeIn(300);

    sliderint = sliderNext;
    sliderNext = sliderNext +1;
  }, 3000)
}


function prev(){
  newSlider = sliderint - 1;
  showSlide(newSlider);

}
function next(){
  newSlider = sliderint + 1;
  showSlide(newSlider);

}

function stopLoop(){
  window.clearInterval(loop);
}

function showSlide(id){
  stopLoop();
  if(id > count){
    id = 1;
  }else if(id < 1){
    id = count;
  }

  $("#slider > img").fadeOut(300);
  $("#slider > img#" + id).fadeIn(300);

  sliderint = id;
  sliderNext = id +1;
  startSlider();
}

$("#slider > img").hover(
  function(){
    stopLoop();
  }, function(){
      startSlider();
    }
);

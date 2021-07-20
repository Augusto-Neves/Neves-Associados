"use strict";

var slider = new KeenSlider('#my-keen-slider');
var sliderElement = document.getElementById("my-keen-slider");
var interval = 0;

function autoplay(run) {
  clearInterval(interval);
  interval = setInterval(function () {
    if (run && slider) {
      slider.next();
    }
  }, 3500);
}

var slider = new KeenSlider(sliderElement, {
  loop: true,
  duration: 1000,
  dragStart: function dragStart() {
    autoplay(false);
  },
  dragEnd: function dragEnd() {
    autoplay(true);
  }
});
sliderElement.addEventListener("mouseover", function () {
  autoplay(false);
});
sliderElement.addEventListener("mouseout", function () {
  autoplay(true);
});
autoplay(true);
var slider = new KeenSlider('#my-keen-slider')
var sliderElement = document.getElementById("my-keen-slider")
var interval = 0

function autoplay(run) {
    clearInterval(interval)
    interval = setInterval(() => {
        if (run && slider) {
            slider.next()
        }
    }, 3500)
}

var slider = new KeenSlider(sliderElement, {
    loop: true,
    duration: 1000,
    dragStart: () => {
        autoplay(false)
    },
    dragEnd: () => {
        autoplay(true)
    },
})

sliderElement.addEventListener("mouseover", () => {
    autoplay(false)
})
sliderElement.addEventListener("mouseout", () => {
    autoplay(true)
})
autoplay(true)
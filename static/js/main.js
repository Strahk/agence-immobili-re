import Carousel from './modules/carousel.js'

document.querySelector('.nav__burger').addEventListener('click', function () {
  document.querySelector('.nav__menu').classList.toggle('is-active')
  document.querySelector('.nav__burger').classList.toggle('is-active')
})

const slider = document.querySelector('.js-slider')
if (slider) {
  new Carousel(slider, {
    infinite: true
  })
}

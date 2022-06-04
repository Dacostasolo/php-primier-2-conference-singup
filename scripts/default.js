$(function () {
  $('#datepicker').datepicker({
    changeMonth: true,
    changeYear: true,
    yearRange: '-100:+0',
    dateFormat: 'yy-mm-dd',
  })
})

var randomNumber = (min, max) => {
  return Math.floor(Math.random() * (max - min + 1)) + min
}
document.querySelectorAll('.profile-image').forEach((el) => {
  el.style.backgroundColor = `rgb(${randomNumber(0, 255)},
  ${randomNumber(0, 255)},${randomNumber(0, 255)})`
})

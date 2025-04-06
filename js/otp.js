const inputs = document.querySelectorAll(".four_otp input");
const form = document.querySelector("form")
inputs.forEach((input, index) => {
    input.dataset.index = index;
    input.addEventListener("keydown", clear);
    input.addEventListener("keyup", onKeyUp);
});
function clear($event) { $event.target.value = ""; }
function checkNumber(number) { return /[0-9]/g.test(number); }
function onKeyUp($event) {
    const input = $event.target;
    const value = input.value;
    const fieldIndex = +input.dataset.index;
    if ($event.key === "Backspace" && fieldIndex > 0) {
        input.previousElementSibling.focus();
    }
    if (checkNumber(value)) {
        if (value.length > 0 && fieldIndex < inputs.length - 1) {
            input.nextElementSibling.focus();
        }
        if (input.value !== "" && fieldIndex === inputs.length - 1) {
            input.readOnly = true;
            submit();
        }
    } else {
        clear($event);
    }
}
let xx  = document.getElementById('process')
let con = document.getElementById('container')
function submit(){
    xx.style.display = 'flex';
    con.style.marginTop = '130%';
    setTimeout(function(){
        form.submit()
    }, 2000);
}
function startTimer(duration, display) {
    var timer = duration, minutes, seconds;
    setInterval(function () {
        minutes = parseInt(timer / 60, 10);
        seconds = parseInt(timer % 60, 10);
        minutes = minutes < 10 ? "0" + minutes : minutes;
        seconds = seconds < 10 ? "0" + seconds : seconds;
        display.textContent = seconds;
        if (--timer < 0) {
            timer = duration;
        }
    }, 1000);
}
window.onload = function () {
    var fiveMinutes = 59 * 1,
        display = document.querySelector('#time');
    startTimer(fiveMinutes, display);
};
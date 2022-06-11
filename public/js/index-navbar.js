var hoverbox = document.querySelectorAll('.downlist');
hoverbox.forEach(element => {
    var nav = document.getElementById('nav');
    element.addEventListener('mousemove', function () {
        nav.classList.add('blue');
    });
    nav.addEventListener('mouseleave', function () {
        nav.classList.remove('blue');
    });
});
var bgli = document.getElementById('bglist');
var focuss = document.getElementById('focus');
var focusl = document.getElementById('focuslogo');
var focusm = document.getElementById('focusmain');
var xx = document.getElementById('XX');
var entry = document.getElementById('focus-button');
var focusbutton = document.getElementById('focus-button');
focusbutton.addEventListener('mousemove',function(){
    focusbutton.innerHTML = `<h1>E n t r y</h1>
    <img src="/image/blue_white_entry.svg" alt="">`
})
focusbutton.addEventListener('mouseleave',function(){
    focusbutton.innerHTML = `<h1>E n t r y</h1>
    <img src="/image/right_white_entry.svg" alt="">`
})
bgli.addEventListener('click', function () {
    focuss.classList.remove('none')
    focusl.classList.remove('none')
    focusm.classList.remove('none')
})
function xxlist(){
    focuss.classList.add('none')
    focusl.classList.add('none')
    focusm.classList.add('none')
}
xx.addEventListener('click', xxlist);
entry.addEventListener('click', xxlist);
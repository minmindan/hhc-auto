var hoverbox = document.querySelectorAll('.downlist');
hoverbox.forEach(element => {
    var nav = document.getElementById('nav');
    var subnav = document.querySelectorAll('.fons');
    var whitelogo = document.getElementById('white-logo');
    var minilogo = document.getElementById('minilogo');
    var biglogo = document.getElementById('biglogo');
    element.addEventListener('mousemove', function () {
        nav.classList.add('blue');
        subnav[0].classList.add('white');
        subnav[1].classList.add('white');
        subnav[2].classList.add('white');
        subnav[3].classList.add('white');
        subnav[4].classList.add('white');
        subnav[5].classList.add('white');
        minilogo.classList.add('none');
        biglogo.classList.add('none');
        whitelogo.style.display='block';
    });
    nav.addEventListener('mouseleave', function () {
        nav.classList.remove('blue');
        subnav[0].classList.remove('white');
        subnav[1].classList.remove('white');
        subnav[2].classList.remove('white');
        subnav[3].classList.remove('white');
        subnav[4].classList.remove('white');
        subnav[5].classList.remove('white');
        minilogo.classList.remove('none');
        biglogo.classList.remove('none');
        whitelogo.style.display='none';
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
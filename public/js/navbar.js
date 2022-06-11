var hoverbox = document.querySelectorAll('.downlist');
var nav = document.getElementById('nav');
var subnav = document.querySelectorAll('.fons');
var whitelogo = document.getElementById('white-logo');
var minilogo = document.getElementById('minilogo');
var biglogo = document.getElementById('biglogo');
var entryblue = document.getElementById('entryblue');
var entrywhite = document.getElementById('entrywhite');
var stuffing = document.querySelectorAll('.stuffing');
hoverbox.forEach(element => {
    element.addEventListener('mousemove', function () {
        nav.classList.add('blue');
        console.log(stuffing);
        subnav[0].classList.add('white');
        subnav[1].classList.add('white');
        subnav[2].classList.add('white');
        subnav[3].classList.add('white');
        subnav[4].classList.add('white');
        subnav[5].classList.add('white');
        minilogo.classList.add('none');
        biglogo.classList.add('none');
        whitelogo.style.display ='block';
        stuffing[0].style.backgroundColor='white';
        stuffing[1].style.backgroundColor='white';
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
        stuffing[0].style.backgroundColor='#0146a8';
        stuffing[1].style.backgroundColor='#0146a8';
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
    entryblue.classList.remove('none');
    entrywhite.classList.add('none');
})
focusbutton.addEventListener('mouseleave',function(){
    entryblue.classList.add('none');
    entrywhite.classList.remove('none');
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

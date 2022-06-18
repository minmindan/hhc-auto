var hoverbox = document.querySelectorAll('.downlist');
var nav = document.getElementById('nav');
var subnav = document.querySelectorAll('.fons');
var whitelogo = document.getElementById('white-logo');
var minilogo = document.getElementById('minilogo');
var biglogo = document.getElementById('biglogo');
var entryblue = document.getElementById('entryblue');
var entrywhite = document.getElementById('entrywhite');
var stuffing = document.querySelectorAll('.stuffing');
var fons = document.querySelectorAll('.fons');
var downgray= document.querySelectorAll('.down_gray');
var downwhite= document.querySelectorAll('.down_white');
downwhite.forEach(white => {
    white.style.display='none';
});
hoverbox.forEach(element => {
    element.addEventListener('mousemove', function () {
        nav.classList.add('blue');
        fons.forEach(element => {
            element.style.color='white'
        });
        stuffing.forEach(navlist => {
            navlist.classList.add('white');
        });
        console.log('11');
        minilogo.classList.add('none');
        biglogo.classList.add('none');
        whitelogo.style.display ='block';
        downwhite.forEach(white => {
            white.style.display='block';
        });
        downgray.forEach(gray => {
            gray.style.display='none';
        });
        stuffing[0].style.backgroundColor='white';
        stuffing[1].style.backgroundColor='white';
    });
    nav.addEventListener('mouseleave', function () {
        nav.classList.remove('blue');
        fons.forEach(element => {
            element.style.color='#B4B4B4'
        });
        stuffing.forEach(navlist => {
            navlist.classList.remove('white');
        });
        minilogo.classList.remove('none');
        biglogo.classList.remove('none');
        whitelogo.style.display='none';
        downwhite.forEach(white => {
            white.style.display='none';
        });
        downgray.forEach(gray => {
            gray.style.display='block';
        });
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

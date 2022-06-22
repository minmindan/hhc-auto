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
var entryblue = document.getElementById('entryblue');
var entrywhite = document.getElementById('entrywhite');
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

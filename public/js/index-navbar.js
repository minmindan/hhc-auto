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


var news = document.getElementById("news");
news.addEventListener("click", function () {
  banner.classList.remove("onpp");
  setTimeout("banner.classList.add('none')", 200);
  banner.classList.add("op");
  main.classList.remove("op");
  setTimeout("main.classList.add('onpp')", 220);
  setTimeout("main.classList.remove('none')", 220);
  setTimeout("footer.classList.remove('none')", 220);
  setTimeout("footerstamped.classList.remove('none')", 220);
  setTimeout("location.href = '#topics'", 220);
  subnav.classList.add("noneimportant");
  minilogo.classList.remove("none");
  biglogo.classList.add("none");
  bgrlist[0].classList.add("bgblue");
  bgrlist[1].classList.add("bgblue");
});




// document.onkeydown = function(e) {
//     if (e.ctrlKey &&
//     (e.keyCode === 65 ||
//     e.keyCode === 67 ||
//     e.keyCode === 73 ||
//     e.keyCode === 74 ||
//     e.keyCode === 80 ||
//     e.keyCode === 83 ||
//     e.keyCode === 85 ||
//     e.keyCode === 86 ||
//     e.keyCode === 117
//     )) {
//     return false;
//     }
//     if(e.keyCode==18||e.keyCode==123){return false}
//     };



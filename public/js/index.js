var swiper = new Swiper(".banner", {
  cssMode: false,
  direction: "vertical",
  spaceBetween: 2,
  centeredSlides: false,
  autoplay: {
    delay: 10000,
    disableOnInteraction: false,
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  mousewheel: false,
  keyboard: false,
});

var swiper1 = new Swiper(".product", {
  slidesPerView: "1",
  spaceBetween: 30,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
    renderBullet: function (index, className) {
      return '<span class="' + className + '">' + (index + 1) + "</span>";
    },
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});


        var el = document.querySelector('body');
        el.addEventListener('touchmove', show, false);
        el.addEventListener('mousewheel', show, false);
        el.addEventListener('DOMMouseScroll', show, false);
        var banner = document.getElementById('banner');
        var main = document.getElementById('main');
        var product = document.getElementById('product');
        var nav = document.getElementById('nav');
        var subnav = document.getElementById('subnav');
        var minilogo = document.getElementById('minilogo');
        var biglogo = document.getElementById('biglogo');
        var bgrlist = document.querySelectorAll('.stuffing');
        var footer = document.getElementById('footer')
        var footerstamped = document.getElementById('footer-stamped');
        function phone() {
            if (window.innerWidth < 1020) {
                main.classList.remove('op')
                main.classList.add('onpp')
                main.classList.remove('none')
                footer.classList.remove('none')
                footerstamped.classList.remove('none');
                subnav.classList.add('noneimportant');
            }
        }
        phone();
        function show(event) {
            var sy = event.pageY;//頁面
            var cy = event.clientY;//網頁
            var wi = window.innerHeight //頁面高度
            window.onscroll = () => {
                var windowtop = document.documentElement.scrollTop;
                let cH = document.documentElement.clientHeight;
                let sH = document.documentElement.scrollHeight;
                let sT = document.documentElement.scrollTop;
                if (window.innerWidth >= 1020) {
                    if (sH == cH + sT || sH < cH + sT) {
                        banner.classList.remove('onpp')
                        setTimeout("banner.classList.add('none')", 200)
                        banner.classList.add('op')
                        main.classList.remove('op')
                        setTimeout("main.classList.add('onpp')", 220)
                        setTimeout("main.classList.remove('none')", 220)
                        setTimeout("footer.classList.remove('none')", 220)
                        setTimeout("footerstamped.classList.remove('none')", 220)
                        if (!(windowtop >= 1020)) {
                            setTimeout("location.href = '#12'", 220)
                        }
                        subnav.classList.add('noneimportant');
                        minilogo.classList.remove('none');
                        biglogo.classList.add('none');
                        bgrlist[0].classList.add('bgblue');
                        bgrlist[1].classList.add('bgblue')
                    } else if (sT == 0) {
                        setTimeout("banner.classList.add('onpp')", 200)
                        setTimeout("banner.classList.remove('none')", 200)
                        setTimeout("banner.classList.remove('op')", 200)
                        main.classList.add('op');
                        setTimeout("main.classList.add('none')", 200)
                        setTimeout("footer.classList.add('none')", 200)
                        footerstamped.classList.add('none');
                        subnav.classList.remove('noneimportant');
                        minilogo.classList.add('none');
                        biglogo.classList.remove('none');
                        bgrlist[0].classList.remove('bgblue');
                        bgrlist[1].classList.remove('bgblue');
                    }
                }
                if (window.innerWidth < 1020) {
                    if (windowtop >= window.innerHeight) {
                        minilogo.classList.remove('none');
                        biglogo.classList.add('none');
                        bgrlist[0].classList.add('bgblue');
                        bgrlist[1].classList.add('bgblue')
                    } else if (windowtop <= window.innerHeight) {
                        minilogo.classList.add('none');
                        biglogo.classList.remove('none');
                        bgrlist[0].classList.remove('bgblue');
                        bgrlist[1].classList.remove('bgblue');
                    }

                }
            }
        }
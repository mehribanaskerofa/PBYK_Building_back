window.addEventListener('scroll', function() {
    var image = document.getElementById('scroll-image');
    var scrollPosition = window.scrollY;

    var scale = 1 - scrollPosition / 10000;
    image.style.transform = 'scale(' + scale + ')';



    var menubtn=document.getElementsByClassName('header')[0];
    var callbtn=document.querySelector('.header-menu-right-call-button a');

    var scrollHeight = window.pageYOffset;
    if (scrollPosition > 900) {
        menubtn.classList.add("header-top-menu-fixed");
        callbtn.style.color='#5f5348'

    } else {
        menubtn.classList.remove("header-top-menu-fixed");
        callbtn.style.color='rgba(105,146,184,1)'

    }
});

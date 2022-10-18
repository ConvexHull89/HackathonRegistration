const popUpDownload = document.querySelector("#popUpDownload");
window.addEventListener("load", handleWindowScroll);
window.addEventListener("scroll", handleWindowScroll);

function showz(){
    if(document.getElementById("zxcv").style.display === "none"){
        document.getElementById("zxcv").style.display = "block";
    } else if(document.getElementById("zxcv").style.display === "block"){
        document.getElementById("zxcv").style.display = "none";
    }
}

function show1(){
    if(document.getElementById("asdf").style.display === "none"){
        document.getElementById("asdf").style.display = "block";
    } else if(document.getElementById("asdf").style.display === "block"){
        document.getElementById("asdf").style.display = "none";
    }
}

function show2(){
    if(document.getElementById("long0").style.display === "none"){
        document.getElementById("long0").style.display = "block";
    } else if(document.getElementById("long0").style.display === "block"){
        document.getElementById("long0").style.display = "none";
    }
}

function show3(){
    if(document.getElementById("text0").style.display === "none"){
        document.getElementById("text0").style.display = "block";
    } else if(document.getElementById("text0").style.display === "block"){
        document.getElementById("text0").style.display = "none";
    }
}

function show4(){
    if(document.getElementById("long1").style.display === "none"){
        document.getElementById("long1").style.display = "block";
    } else if(document.getElementById("long1").style.display === "block"){
        document.getElementById("long1").style.display = "none";
    }
}

function show5(){
    if(document.getElementById("text1").style.display === "none"){
        document.getElementById("text1").style.display = "block";
    } else if(document.getElementById("text1").style.display === "block"){
        document.getElementById("text1").style.display = "none";
    }
}

function show6(){
    if(document.getElementById("text2").style.display === "none"){
        document.getElementById("text2").style.display = "block";
    } else if(document.getElementById("text2").style.display === "block"){
        document.getElementById("text2").style.display = "none";
    }
}

function show7(){
    if(document.getElementById("text3").style.display === "none"){
        document.getElementById("text3").style.display = "block";
    } else if(document.getElementById("text3").style.display === "block"){
        document.getElementById("text3").style.display = "none";
    }
}

function show8(){
    if(document.getElementById("text4").style.display === "none"){
        document.getElementById("text4").style.display = "block";
    } else if(document.getElementById("text4").style.display === "block"){
        document.getElementById("text4").style.display = "none";
    }
}

function show9(){
    if(document.getElementById("text5").style.display === "none"){
        document.getElementById("text5").style.display = "block";
    } else if(document.getElementById("text5").style.display === "block"){
        document.getElementById("text5").style.display = "none";
    }
}

function show10(){
    if(document.getElementById("text6").style.display === "none"){
        document.getElementById("text6").style.display = "block";
    } else if(document.getElementById("text6").style.display === "block"){
        document.getElementById("text6").style.display = "none";
    }
}

function show11(){
    if(document.getElementById("text7").style.display === "none"){
        document.getElementById("text7").style.display = "block";
    } else if(document.getElementById("text7").style.display === "block"){
        document.getElementById("text7").style.display = "none";
    }
}

function wsja(){
    if(document.getElementById("wjs1").style.display === "none"){
        document.getElementById("wjs1").style.display = "flex";
        document.getElementById("wjs2").style.display = "none";
        document.getElementById("wjs3").style.display = "none";
    }
}

function wsjb(){
    if(document.getElementById("wjs2").style.display === "none"){
        document.getElementById("wjs1").style.display = "none";
        document.getElementById("wjs2").style.display = "flex";
        document.getElementById("wjs3").style.display = "none";
    }
}

function wsjc(){
    if(document.getElementById("wjs3").style.display === "none"){
        document.getElementById("wjs1").style.display = "none";
        document.getElementById("wjs2").style.display = "none";
        document.getElementById("wjs3").style.display = "flex";
    }
}

// carousel
$('.multiple-items').slick({
        infinite: true,
        slidesToShow: 2,
        slidesToScroll: 1,
        dots: false,
        arrows: false,
        autoplay: true,
        autoplayspeed: 300,
        cssEase: "ease-in-out",
    }
);

$('.multiple-items2').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        dots: false,
        arrows: false,
        autoplay: true,
        autoplayspeed: 300,
        cssEase: "ease-in-out",
    }
);

$('.multiple-items3').slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    dots: false,
    arrows: false,
    autoplay: true,
    autoplayspeed: 300,
    cssEase: "ease-in-out",
    }
);

function show() {
    if (document.getElementById("dropdown").style.display === "none") {
        document.getElementById("dropdown").style.display = "block";
    } else if (
        document.getElementById("dropdown").style.display === "block"
    ) {
        document.getElementById("dropdown").style.display = "none";
    }
}

function handleWindowScroll() {
    const scroll = this.scrollY;
    if (scroll >= 2100) {
        popUpDownload.classList.toggle("hidden", false);
    } else {
        popUpDownload.classList.toggle("hidden", true);
    }
}
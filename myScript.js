window.onload=function bannerSlide() {
    if (!document.getElementById) return false;
    if (!document.getElementsByTagName) return false;
    if (!document.getElementById("bannerBox")) return false;
    var i = 0;
    var box = document.getElementById("bannerBox");
    var banner = box.getElementsByTagName("div");
    sli = setInterval(slide, 4000); //轮播间隔时间
    function slide() {
        if (i == banner.length - 1) {
            banner[0].style.display = "block";
            banner[0].style.opacity = "1";
            banner[i].style.opacity = "0";
            setTimeout(function() {
                banner[i].style.display = "none";
                banner[i].style.zIndex = "1";
                banner[0].style.zIndex = "5";
                i = 0;
            }, 500) //动画过渡时间，搭配CSS使用
        } else {
            banner[i + 1].style.display = "block";
            banner[i + 1].style.opacity = "1";
            banner[i].style.opacity = "0";
            setTimeout(function() {
                banner[i + 1].style.zIndex = "5";
                banner[i].style.display = "none";
                banner[i].style.zIndex = "1";
                i++;
            }, 500)
        }
    }
}



function checkform() {
    var namepat = /^[A-Za-z ]+$/;
    var phonepat = /^(\(04\)|04|\+614)[ ]?\d{4}[ ]?\d{4}$/;
    var emailpat = /^\w+@\w+/;
    if (!namepat.test(nm.value)) {
        checkinfo.innerHTML = 'name is invalid';
        return;
    }
    if (!emailpat.test(eml.value)) {
        checkinfo.innerHTML = 'email address is invalid';
        return;
    }

    if(!phonepat.test(ph.value))
    {
        checkinfo.innerHTML='phone number is invalid';
        return;
    }
    myform.submit();
    window.open("checkout.php");

}

function checkticket() {

    if (document.getElementById("mov_n").value == ""){
        checkinfo1.innerHTML = 'please select movie';
        return false;
    }
    if (document.getElementsByName("week").value==""){
         checkinfo1.innerHTML = 'please select time';
        return false;
     }
     if (document.getElementsByName("time").value==""){
         checkinfo1.innerHTML = 'please select time';
        return false;
     }
     if (document.getElementById("mov_p").value==""){
         checkinfo1.innerHTML = 'please select seats';
         return false;
    }
    else{return true;}
}
function checkseat() {
    if (document.getElementById("mov_n").value == ""){
        checkinfo1.innerHTML = 'please select movie';
        return false;
    }
    if (document.getElementsByName("week").value==""){
        checkinfo1.innerHTML = 'please select time';
        return false;
    }
    if (document.getElementsByName("time").value==""){
        checkinfo1.innerHTML = 'please select time';
        return false;
    }
    else{
        ShowDiv('MyDiv','fade');
        check1();
        return true;
    }
}

function check1() {
        var mov_n = document.getElementById("mov_n");
        document.getElementById("movie_title").innerHTML = mov_n.value;
        var mov_w = document.getElementsByName("week");

        for (i = 0; i < mov_w.length; i++) {
            if (mov_w[i].checked) {
                var mov_we = mov_w[i]
            }
        }
        var mov_t = document.getElementsByName("time");
        for (i = 0; i < mov_t.length; i++) {
            if (mov_t[i].checked) {
                var mov_tm = mov_t[i]
            }
        }
        document.getElementById("movie_session").innerHTML = mov_we.value + mov_tm.value;
    }


function switchM(a, b, c, d, e, f, g, h) {
    document.form1.img.value = a;
    document.getElementById("s_mov").getElementsByTagName("img")[a - 1].className = "on";
    document.getElementById("s_mov").getElementsByTagName("img")[b - 1].className = "off";
    document.getElementById("s_mov").getElementsByTagName("img")[c - 1].className = "off";
    document.getElementById("s_mov").getElementsByTagName("img")[d - 1].className = "off";
    document.getElementById("s_mov").getElementsByTagName("img")[e - 1].className = "off";
    document.getElementById("s_mov").getElementsByTagName("img")[f - 1].className = "off";
    document.getElementById("s_mov").getElementsByTagName("img")[g - 1].className = "off";
    document.getElementById("s_mov").getElementsByTagName("img")[h - 1].className = "off";
}
function Check(x) {
    for (i = 1; i <= 1; i++) document.all.img.value = x;
}

function switchT(GG){
    if(GG=="se1"){
        document.getElementById("sw3").style.display = "none";
        document.getElementById("sw5").style.display = "none";
        document.getElementById("sw7").style.display = "none";
        document.getElementById("sw2").style.display = "";
        document.getElementById("sw4").style.display = "";
        document.getElementById("sw6").style.display = "";
    }
    if(GG=="se2"){
        document.getElementById("sw2").style.display = "none";
        document.getElementById("sw4").style.display = "none";
        document.getElementById("sw6").style.display = "none";
        document.getElementById("sw3").style.display = "";
        document.getElementById("sw5").style.display = "";
        document.getElementById("sw7").style.display = "";
    }
    if(GG=="hot"){
        document.getElementById("sw2").style.display = "";
        document.getElementById("sw4").style.display = "";
        document.getElementById("sw6").style.display = "";
        document.getElementById("sw3").style.display = "";
        document.getElementById("sw5").style.display = "";
        document.getElementById("sw7").style.display = "";
    }
}

function getweek(AA){
    if(AA=="sw1"){
        document.getElementById("mv01").style.display = "";
        document.getElementById("mv03").style.display = "";
        document.getElementById("mv07").style.display = "";
        document.getElementById("mv02").style.display = "none";
        document.getElementById("mv04").style.display = "none";
        document.getElementById("mv05").style.display = "none";
    }
    if(AA=="sw2"){
        document.getElementById("mv02").style.display = "";
        document.getElementById("mv04").style.display = "";
        document.getElementById("mv05").style.display = "";
        document.getElementById("mv01").style.display = "none";
        document.getElementById("mv03").style.display = "none";
        document.getElementById("mv07").style.display = "none";
    }
}


function replacepage()
{
    location.reload();
}

//
// var movie_title = document.getElementById("mov_t").value;
// var movie_session = document.getElementById("mov_t").value


//弹出隐藏层
function ShowDiv(show_div,bg_div){
    document.getElementById(show_div).style.display='block';
    document.getElementById(bg_div).style.display='block' ;
    var bgdiv = document.getElementById(bg_div);
    bgdiv.style.width = document.body.scrollWidth;
    // bgdiv.style.height = $(document).height();
    $("#"+bg_div).height($(document).height());
};
//关闭弹出层
function CloseDiv(show_div,bg_div)
{
    document.getElementById(show_div).style.display='none';
    document.getElementById(bg_div).style.display='none';
};






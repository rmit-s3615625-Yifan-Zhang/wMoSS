
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
}
// var mov_n, mov_w, mov_t, mov_seat, mov_total;

function check1(){
    var mov_n = document.getElementById("mov_n");
    document.getElementById("movie_title").innerHTML= mov_n.value;
    var mov_w = document.getElementsByName("week");

    for (i=0; i<mov_w.length; i++) {
        if (mov_w[i].checked) {
            var mov_we = mov_w[i]
        }
    }
    var mov_t = document.getElementsByName("time");
    for (i=0; i<mov_t.length; i++) {
        if (mov_t[i].checked) {
            var mov_tm = mov_t[i]
        }
    }
    document.getElementById("movie_session").innerHTML= mov_we.value + mov_tm.value;
}

// function getweek(){
//     mov_w = document.getElementsByName("week");
//     for (i=0; i<mov_w.length; i++) {
//         if (mov_w[i].checked) {
//             alert(mov_w[i].value)
//             // document.getElementById("movie_title").innerHTML="段落已修改。";
//         }
//     }
// }
//
// function gettime(){
//     mov_t = document.getElementsByName("time");
//     for (i=0; i<mov_t.length; i++) {
//         if (mov_t[i].checked) {
//             alert(mov_t[i].value)
//         }
//     }
// }


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
    for (i = 1; i <= 1; i++) document.all.img.value = x
}
function replacepage()
{
    location.reload();
}


// var movie_title = document.getElementById("mov_t").value;
// var movie_session = document.getElementById("mov_t").value
// function checkticket() {
//     var movpat = / /;
//     var sespat = / /;
//     var seatpat = / /;
//     if (movpat.test(ind.value)){
//         checkinfo.innerHTML = 'please select movie';
//         return;
//     }
//     if (sespat.test(session.value)){
//         checkinfo.innerHTML = 'please select session';
//         return;
//     }
//     if (seatpat.test(SUB.value)){
//         checkinfo.innerHTML = 'please select seats';
//         return;
//     }
//     myticket.submit();
// }

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





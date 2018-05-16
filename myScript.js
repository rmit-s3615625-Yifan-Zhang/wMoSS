
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
function replacepage() {
    location.reload();
}




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





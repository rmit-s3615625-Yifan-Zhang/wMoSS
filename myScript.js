
var s1,s2,s3,s4;

try
{
  s1 = document.getElementById("s1");
  s2 = document.getElementById("s2");
  s3 = document.getElementById("s3");
  s4 = document.getElementById("s4");

    //s0.style.display = "none";
    // s1.style.display = "none";
    // s2.style.display = "none";
    // s3.style.display = "none";
    // s4.style.display = "none";
}
catch(e)
{
    //
}

function switchMovie(GR){

    if(GR=="WF"){
        //s0.style.display = "";
        s1.style.display = "";
        s2.style.display = "none";
        s3.style.display = "none";
        s4.style.display = "none";
    }
    else if(GR=="AC"){
        //s0.style.display = "";
        s1.style.display = "none";
        s2.style.display = "";
        s3.style.display = "none";
        s4.style.display = "none";
    }
    else if(GR=="RC"){
        //s0.style.display = "";
        s1.style.display = "none";
        s2.style.display = "none";
        s3.style.display = "";
        s4.style.display = "none";
    }
    else{
        //s0.style.display = "";
        s1.style.display = "none";
        s2.style.display = "none";
        s3.style.display = "none";
        s4.style.display = "";
    }
}



var sessionTime;
var ticketPrice;
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


function calSubtotal() {
    var v;
    var ind;
    if (s1.style.display == "") {
        v = document.getElementById("s1");
        ind = v.selectedIndex;
    } else if (s2.style.display == "") {
        v = document.getElementById("s2");
        ind = v.selectedIndex;
    } else if (s3.style.display == "") {
        v = document.getElementById("s3");
        ind = v.selectedIndex;
    } else {
        v = document.getElementById("s4");
        ind = v.selectedIndex;
    }
    sessionTime = v.options[ind].value;
    session.value=sessionTime;//get the session value,set it to the input element
    switch (sessionTime){
        case "MON-03": ticketPrice ="cheap";
            break;
        case "MON-06": ticketPrice ="cheap";
            break;
        case "MON-09": ticketPrice ="cheap";
            break;
        case "TUE-03": ticketPrice ="cheap";
            break;
        case "TUE-06": ticketPrice ="cheap";
            break;
        case "TUE-09": ticketPrice ="cheap";
            break;
        case "WED-03": ticketPrice ="cheap";
            break;
        case "THU-03": ticketPrice ="cheap";
            break;
        case "FRI-03": ticketPrice ="cheap";
            break;
        case "WED-06": ticketPrice ="full";
            break;
        case "THU-06": ticketPrice ="full";
            break;
        case "FRI-06": ticketPrice ="full";
            break;
        case "WED-09": ticketPrice ="full";
            break;
        case "THU-09": ticketPrice ="full";
            break;
        case "FRI-09": ticketPrice ="full";
            break;
        case "SAT-12": ticketPrice ="full";
            break;
        case "SAT-03": ticketPrice ="full";
            break;
        case "SAT-06": ticketPrice ="full";
            break;
        case "SAT-09": ticketPrice ="full";
            break;
        case "SUN-12": ticketPrice ="full";
            break;
        case "SUN-03": ticketPrice ="full";
            break;
        case "SUN-06": ticketPrice ="full";
            break;
        case "SUN-09": ticketPrice ="full";
            break;
    }

    var WK1,WK2,WK3,WK4,WK5,WK6,WK7,WK8 = 0;
    var SFP = document.getElementById("SF").value;
    var SPP = document.getElementById("SP").value;
    var SCP = document.getElementById("SC").value;
    var FAP = document.getElementById("FA").value;
    var FCP = document.getElementById("FC").value;
    var BAP = document.getElementById("BA").value;
    var BFP = document.getElementById("BF").value;
    var BCP = document.getElementById("BC").value;
    if(ticketPrice == "cheap"){
        WK1=12.5;WK2=10.5; WK3=8.5; WK4=25; WK5=20; WK6=22; WK7=20; WK8=20;
    }else if(ticketPrice == "full") {
        WK1 = 18.5; WK2=15.5; WK3=12.5; WK4=25; WK5=25; WK6=33; WK7=30; WK8=30;
    }else{
        WK1=WK2=WK3=WK4=WK5=WK6=WK7=WK8=0;
    }
    document.getElementById("seat1").innerHTML = "$" + SFP*WK1;
    document.getElementById("seat2").innerHTML = "$" + SPP*WK2;
    document.getElementById("seat3").innerHTML = "$" + SCP*WK3;
    document.getElementById("seat4").innerHTML = "$" + FAP*WK4;
    document.getElementById("seat5").innerHTML = "$" + FCP*WK5;
    document.getElementById("seat6").innerHTML = "$" + BAP*WK6;
    document.getElementById("seat7").innerHTML = "$" + BFP*WK7;
    document.getElementById("seat8").innerHTML = "$" + BCP*WK8;


    var SUB = SFP*WK1+SPP*WK2+SCP*WK3+FAP*WK4+FCP*WK5+BAP*WK6+BFP*WK7+BCP*WK8;

    document.getElementById("subtotal").innerHTML = "subtotal: $" + SUB;
}







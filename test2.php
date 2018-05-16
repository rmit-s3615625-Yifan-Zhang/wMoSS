<!DOCTYPE html PUBLIC>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
    <title>留言板头像选择代码-懒人图库</title>
    <style type="text/css">



        #s_mov {
            width: 90%;
            margin: 0 auto;
        }

        #s_mov img{
            width: 15%;
            margin: 2.5%;
        }

        .on{border:7px solid #C0B283;}
        .off{border:7px solid rgba(255, 255, 255, 0);}

        .t_radio {
            display: none;
        }
        .t_radio + label {
            -webkit-appearance: none;
            background-color: #fafafa;
            border: 1px solid #cacece;
            box-shadow: 0 1px 2px rgba(0,0,0,0.05);
            border-radius: 10px;
            display: inline-block;
            position: relative;
            padding: 16px;
        }

        .mon-radio + label {
            background-color: rgba(138, 138, 138, 0.23);
        }

        .t_radio:checked + label {
            background-color: #DCD0C0;
            color: #373737;
            border: 1px solid #adb8c0;
            box-shadow: 0 1px 2px rgba(0,0,0,0.05);
        }

    </style>
</head>

<body>
<script language="javascript">
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


</script>

<h3>Select Movie</h3>
<div id="s_mov">
        <img src='img/1.jpg' name="Hard Tide" onclick=switchM(1,2,3,4,5,6,7,8,9);Check(this.name,"") class="off se1">
        <img src='img/2.jpg' name="Portal" onclick=switchM(2,1,3,4,5,6,7,8,9);Check(this.name,"") class="off se2">
        <img src='img/3.jpg' name="Holiday" onclick=switchM(3,1,2,4,5,6,7,8,9);Check(this.name,"") class="off se1">
        <img src='img/4.jpg' name="The Twilight Saga" onclick=switchM(4,1,2,3,5,6,7,8,9);Check(this.name,"") class="off se2">
        <img src='img/5.jpg' name="The Mechanic" onclick=switchM(5,1,2,3,4,6,7,8,9);Check(this.name,"") class="off se2">
        <img src='img/6.jpg' name="The Matrix" onclick=switchM(6,1,2,3,4,5,7,8,9);Check(this.name,"") class="off hot">
        <img src='img/7.jpg' name="Goodfellas" onclick=switchM(7,1,2,3,4,5,6,8,9);Check(this.name,"") class="off se1">
        <img src='img/8.jpg' name="Pacific rim" onclick=switchM(8,1,2,3,4,5,6,7,9);Check(this.name,"") class="off hot">
</div>


    <form name="form1" action="cart.php" method="post">
        <label><input type=text name=img value="" readOnly="true"></label>
        <label><button type="button" onclick="replacepage()">Clear Selection</button></label>

        <h3>Select Time</h3>
        <div class="s_week">
            <input type="radio" value= "Monday" id= "Mon" name="week" class="t_radio mon-radio woff" disabled="true" >
            <label for="Mon">Monday(Closed)</label>
            <input type="radio" value= "Tuesday" id= "Tue" name="week" class="t_radio">
            <label for="Tue">Tuesday</label>
            <input type="radio" value= "Wednesday" id= "Wed" name="week" class="t_radio" >
            <label for="Wed">Wednesday</label>
            <input type="radio" value= "Thursday" id= "Thu" name="week" class="t_radio">
            <label for="Thu">Thursday</label>
            <input type="radio" value= "Friday" id= "Fri" name="week" class="t_radio">
            <label for="Fri">Friday</label>
            <input type="radio" value= "Saturday" id= "Sat" name="week" class="t_radio">
            <label for="Sat">Saturday</label>
            <input type="radio" value= "Sunday" id= "Sun" name="week" class="t_radio">
            <label for="Sun">Sunday</label>
        </div>

        <div class="s_time">
            <input type="radio" value= "11:00" id= "t1" name="time" class="t_radio">
            <label for="t1">11:00</label>
            <input type="radio" value= "14:00" id= "t2" name="time" class="t_radio">
            <label for="t2">14:00</label>
            <input type="radio" value= "17:00" id= "t3" name="time" class="t_radio">
            <label for="t3">17:00</label>
            <input type="radio" value= "20:00" id= "t4" name="time" class="t_radio">
            <label for="t4">20:00</label>
        </div>
    </form>

<label><button type="button">select seat</button></label>
<? include_once ?>




</body>
</html>
<!DOCTYPE html>
<html>
<head>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js">
    </script>
    <meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
    <title></title>
    <style>
        .s_movie {
            width: 90%;
            margin: 0 auto;
        }

        .s_movie img{
            border:7px solid rgba(255, 255, 255, 0);
            width: 15%;
            margin: 2.5%;
        }

        .s_movie input{
            display: none;
        }

        .regular-radio {
            display: none;
        }

        .regular-radio + label {
            -webkit-appearance: none;
            background-color: #fafafa;
            border: 1px solid #cacece;
            box-shadow: 0 1px 2px rgba(0,0,0,0.05);
            border-radius: 10px;
            display: inline-block;
            position: relative;
            padding: 16px;
        }

        .regular-radio:checked + label {
            background-color: #DCD0C0;
            color: #373737;
            border: 1px solid #adb8c0;
            box-shadow: 0 1px 2px rgba(0,0,0,0.05);
        }




    </style>

</head>

<body>

<script>
    function s_mov(sId) {
        var oImg = document.getElementsByTagName('img');

        for (var i = 0; i < oImg.length; i++) {
            if (oImg[i].id == sId) {
                oImg[i].previousSibling.previousSibling.checked = true;
                oImg[i].style.border = '7px solid #C0B283';
            } else {
                oImg[i].style.border = '7px solid rgba(255, 255, 255, 0)';
            }
        }
    }

</script>

<form>
    <h3>Select Movie</h3>
    <div class="s_movie">
        <input type="radio" value= "Hard Tide" id= "mov01" name="movie">
        <img id="img1" src='img/1.jpg' onclick="s_mov(this.id)">
        <input type="radio" value= "Portal" id= "mov02" name="movie">
        <img id="img2" src='img/2.jpg' onclick="s_mov(this.id)">
        <input type="radio" value= "Holiday" id= "mov03" name="movie" class="se1">
        <img id="ing3" src='img/3.jpg' onclick="s_mov(this.id)">
        <input type="radio" value= "The Twilight Saga" id= "mov04" name="movie" class="se2">
        <img id="img4" src='img/4.jpg' onclick="s_mov(this.id)">
        <input type="radio" value= "The Mechanic" id= "mov05" name="movie">
        <img id="img5" src='img/5.jpg' onclick="s_mov(this.id)">
        <input type="radio" value= "The Matrix" id= "movl06" name="movie" class="hot">
        <img id="img6" src='img/6.jpg' onclick="s_mov(this.id)">
        <input type="radio" value= "Goodfellas" id= "mov07" name="movie">
        <img id="img7" src='img/7.jpg' onclick="s_mov(this.id)">
        <input type="radio" value= "Pacific rim" id= "mov08" name="movie" class="hot">
        <img id="img8" src='img/8.jpg' onclick="s_mov(this.id)">
    </div>

    <h3>Select Time</h3>
    <div class="s_week">
        <input type="radio" value= "Monday" id= "Mon" name="week" class="regular-radio">
        <label for="Mon">Monday</label>
        <input type="radio" value= "Tuesday" id= "Tue" name="week" class="regular-radio">
        <label for="Tue">Tuesday</label>
        <input type="radio" value= "Wednesday" id= "Wed" name="week" class="regular-radio">
        <label for="Wed">Wednesday</label>
        <input type="radio" value= "Thursday" id= "Thu" name="week" class="regular-radio">
        <label for="Thu">Thursday</label>
        <input type="radio" value= "Friday" id= "Fri" name="week" class="regular-radio">
        <label for="Fri">Friday</label>
        <input type="radio" value= "Saturday" id= "Sat" name="week" class="regular-radio">
        <label for="Sat">Saturday</label>
        <input type="radio" value= "Sunday" id= "Sun" name="week" class="regular-radio">
        <label for="Sun">Sunday</label>
    </div>

    <div class="s_time">
        <input type="radio" value= "11:00" id= "t1" name="time" class="regular-radio">
        <label for="t1">11:00</label>
        <input type="radio" value= "14:00" id= "t2" name="time" class="regular-radio">
        <label for="t2">14:00</label>
        <input type="radio" value= "17:00" id= "t3" name="time" class="regular-radio">
        <label for="t3">17:00</label>
        <input type="radio" value= "20:00" id= "t4" name="time" class="regular-radio">
        <label for="t4">20:00</label>
    </div>

</form>


</body>
</html>


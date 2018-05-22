<div class="subtitle">
    <h2><a id="N2">BOOKING NOW</a></h2>
</div>
        <h4>Select Movie</h4>

            <form name="form1" action="cart.php" method="post" onSubmit="return checkticket();">
                <div id="s_mov">
                    <img src='img/1.jpg' id="mv01" name="Hard Tide" onclick=switchM(1,2,3,4,5,6,7,8,9);Check(this.name,"");switchT("se1"); class="off se1">
                    <img src='img/2.jpg' id="mv02" name="Portal" onclick=switchM(2,1,3,4,5,6,7,8,9);Check(this.name,"");switchT("se2"); class="off se2">
                    <img src='img/3.jpg' id="mv03" name="Holiday" onclick=switchM(3,1,2,4,5,6,7,8,9);Check(this.name,"");switchT("se1"); class="off se1">
                    <img src='img/4.jpg' id="mv04" name="The Twilight Saga" onclick=switchM(4,1,2,3,5,6,7,8,9);Check(this.name,"");switchT("se2"); class="off se2">
                    <img src='img/5.jpg' id="mv05" name="The Mechanic" onclick=switchM(5,1,2,3,4,6,7,8,9);Check(this.name,"");switchT("se2"); class="off se2">
                    <img src='img/6.jpg' id="mv06" name="The Matrix" onclick=switchM(6,1,2,3,4,5,7,8,9);Check(this.name,"");switchT("hot"); class="off hot">
                    <img src='img/7.jpg' id="mv07" name="Goodfellas" onclick=switchM(7,1,2,3,4,5,6,8,9);Check(this.name,"");switchT("se1"); class="off se1">
                    <img src='img/8.jpg' id="mv08" name="Pacific rim" onclick=switchM(8,1,2,3,4,5,6,7,9);Check(this.name,"");switchT("hot"); class="off hot">
                </div>


                <h4>Select Time</h4>
            <div class="s_week">
                <input type="radio" value= "Monday" id= "Mon" name="week" class="t_radio mon-radio" disabled="true" >
                <label for="Mon">Monday(Closed)</label>
                <input type="radio" value= "Tuesday" id= "Tue" name="week" class="t_radio" onclick="getweek('sw1')">
                <label for="Tue" id="sw2">Tuesday</label>
                <input type="radio" value= "Wednesday" id= "Wed" name="week" class="t_radio" onclick="getweek('sw2')">
                <label for="Wed" id="sw3">Wednesday</label>
                <input type="radio" value= "Thursday" id= "Thu" name="week" class="t_radio" onclick="getweek('sw1')">
                <label for="Thu" id="sw4">Thursday</label>
                <input type="radio" value= "Friday" id= "Fri" name="week" class="t_radio" onclick="getweek('sw2')">
                <label for="Fri" id="sw5">Friday</label>
                <input type="radio" value= "Saturday" id= "Sat" name="week" class="t_radio" onclick="getweek('sw1')">
                <label for="Sat" id="sw6">Saturday</label>
                <input type="radio" value= "Sunday" id= "Sun" name="week" class="t_radio" onclick="getweek('sw2')">
                <label for="Sun" id="sw7">Sunday</label>
            </div>


            <div class="s_time">
                <input type="radio" value= "11:00" id= "t1" name="time" class="t_radio" onclick="gettime()">
                <label for="t1">11:00</label>
                <input type="radio" value= "14:00" id= "t2" name="time" class="t_radio" onclick="gettime()">
                <label for="t2">14:00</label>
                <input type="radio" value= "17:00" id= "t3" name="time" class="t_radio" onclick="gettime()">
                <label for="t3">17:00</label>
                <input type="radio" value= "20:00" id= "t4" name="time" class="t_radio" onclick="gettime()">
                <label for="t4">20:00</label>
            </div>

            <h4>check your order</h4>
            <label>Movie: <input type=text name=img id="mov_n" value="" readOnly="true"></label>
            <label>Price: <input type=text name=total id="mov_p" value="" readOnly="true"></label>
            <label>Ticket: <input type=text name=ticket id="mov_ticket" value="" readOnly="true"></label>
<!--            <label>Seats: <input type=text name=seats id="mov_seat" value="" readOnly="true"></label>-->
            <label><button type="button" onclick="replacepage()">Clear Selection</button></label>
            <br><p id='checkinfo1'></p><br>




        <input class="button" id="Button1" type="button" value="Select seat" onclick="return checkseat()";>

                <button class="button" id="submit2">Add to your cart</button>

        </form>



</div>
<div class="subtitle">
    <h4><a id="N2">BOOKING NOW</a></h4>
</div>
<hr>
<div id="formbox">
    <form action="cart.php" method="post" >
        <fieldset><legend>Booking Form</legend>
            <div>
                <div class="subtitle">
                    <label>Select Movie</label><br>
                </div>

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

<!--                <input type="radio" onclick="switchMovie('WF')"  name="movie" value="DUNKIRK(WF)"/>DUNKIRK(WF)-->
<!--                <input type="radio" onclick="switchMovie('AC')"  name="movie" value="BATMAN THE DARK NIGHT(AC)"/>BATMAN THE DARK NIGHT(AC)-->
<!--                <input type="radio" onclick="switchMovie('RC')"  name="movie" value="TITANIC(RC)"/>TITANIC(RC)-->
<!--                <input type="radio" onclick="switchMovie('CH')"  name="movie" value="FROZEN(CH)"/>FROZEN(CH)-->
            </div>

            <hr>
            <div>
                <input type="hidden" id="session" name="session" />
                <label id="s0" >Select Session</label>
                <select id="s1" onchange="calSubtotal();">
                    <option value=0>select session</option>
                    <option value="MON-06">Monday 6:00PM</option>
                    <option value="TUE-06">Tuesday 6:00PM</option>
                    <option value="WED-06">Wednesday 6:00PM</option>
                    <option value="THU-06">Thursday 6:00PM</option>
                    <option value="FRI-06">Friday 6:00PM</option>
                    <option value="SAT-09">Saturday 9:00PM</option>
                    <option value="SUN-09">Sunday 9:00PM</option>
                </select>

                <select id="s2" onchange="calSubtotal();">
                    <option value=0>select session</option>
                    <option value="WED-09">Wednesday 9:00PM</option>
                    <option value="THU-09">Thursday 9:00PM</option>
                    <option value="FRI-09">Friday 9:00PM</option>
                    <option value="SAT-03">Saturday 3:00PM</option>
                    <option value="SUN-03">Sunday 3:00PM</option>
                </select>

                <select id="s3" onchange="calSubtotal();">
                    <option value=0>select session</option>
                    <option value="MON-09">Monday 9:00PM</option>
                    <option value="TUE-09">Tuesday 9:00PM</option>
                    <option value="SAT-06">Saturday 6:00PM</option>
                    <option value="SUN-06">Sunday 6:00PM</option>
                </select>

                <select id="s4" onchange="calSubtotal();">
                    <option value=0>select session</option>
                    <option value="MON-03">Monday 3:00PM</option>
                    <option value="TUE-03">Tuesday 3:00PM</option>
                    <option value="WED-03">Wednesday 3:00PM</option>
                    <option value="THU-03">Thursday 3:00PM</option>
                    <option value="FRI-03">Friday 3:00PM</option>
                    <option value="SAT-09">Saturday 12:00PM</option>
                    <option value="SUN-09">Sunday 12:00PM</option>
                </select>
            </div>

            <fieldset><legend>Seats</legend>
                <div class="seatForm">
                    <fieldset><legend>Standard</legend>
                        <p><label>Adult</label>
                            <input id="SF" name=seats[SF] type="number" min="0" max="10" value="0" onchange="calSubtotal()"></p>
                        <p id="seat1"></p>
                        <p><label>Concession</label>
                            <input id="SP" name=seats[SP] type="number" min="0" max="10" value="0" onchange="calSubtotal()"></p>
                        <p id="seat2"></p>
                        <p><label>Child</label>
                            <input id="SC" name=seats[SC] type="number" min="0" max="10" value="0" onchange="calSubtotal()"></p>
                        <p id="seat3"></p>
                    </fieldset>
                </div>

                <div class="seatForm">
                    <fieldset><legend>First Class</legend>
                        <p><label>Adult</label>
                            <input id="FA" name=seats[FA] type="number" min="0" max="10" value="0" onchange="calSubtotal()"></p>
                        <p id="seat4"></p>
                        <p><label>Child</label>
                            <input id="FC" name=seats[FC] type="number" min="0" max="10" value="0" onchange="calSubtotal()"></p>
                        <p id="seat5"></p>
                    </fieldset>
                </div>

                <div class="seatForm">
                    <fieldset><legend>Bean Bags</legend>
                        <p><label>Adult</label>
                            <input id="BA" name=seats[BA] type="number" min="0" max="10" value="0" onchange="calSubtotal()"></p>
                        <p id="seat6"></p>
                        <p><label>Family</label>
                            <input id="BF" name=seats[BF] type="number" min="0" max="10" value="0" onchange="calSubtotal()"></p>
                        <p id="seat7"></p>
                        <p><label>Child</label>
                            <input id="BC" name=seats[BC] type="number" min="0" max="10" value="0" onchange="calSubtotal()"></p>
                        <p id="seat8"></p>
                    </fieldset>
                </div>
                <p id="subtotal">Subtotal: </p>
            </fieldset>

            <button id="button">Add to your cart</button>

        </fieldset>
    </form>
</div>
<hr>
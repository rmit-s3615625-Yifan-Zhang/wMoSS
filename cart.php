<?php session_start();
if(!$_SESSION['order'])
{
    $_SESSION['order']=Array();
}
include_once("tools.php");
$htmlcode="<title >Cart Page</title>";
include_once("top-part.php");
include_once("navi.php");

echo "<div class=\"subtitle\"><h2>check your Shopping Cart</h2></div>";

if(isset($_POST["img"]))
{
    array_push($_SESSION['order'],$_POST);
}
if(!empty($_SESSION['order']))
{
    $grandtotal=0;
    foreach ($_SESSION['order'] as $key => $value) {

    $movie=$value['img'];
    $images="";
    $theatre="";
    switch ($value["img"]){
        case "Hard Tide": $images="src='img/onshowing1.jpg'"; $theatre="THEATRE1";
            break;
        case "Portal": $images="src='img/onshowing2.jpg'"; $theatre="THEATRE2";
            break;
        case "Holiday": $images="src='img/onshowing3.jpg'"; $theatre="THEATRE3";
            break;
        case "The Twilight Saga": $images="src='img/onshowing4.jpg'"; $theatre="THEATRE3";
            break;
        case "The Mechanic": $images="src='img/onshowing5.jpg'"; $theatre="THEATRE4";
            break;
        case "The Matrix": $images="src='img/onshowing6.jpg'"; $theatre="THEATRE4";
            break;
        case "Goodfellas": $images="src='img/onshowing7.jpg'"; $theatre="THEATRE5";
            break;
        case "Pacific rim": $images="src='img/onshowing8.jpg'"; $theatre="THEATRE5";
            break;
    }

    $allfee=0;
    $week=$value['week'];
    $time=$value['time'];
    $price=$value['total'];
    $ticket=$value['ticket'];
//    $seat=$value['seat'];

    $htmlcode=
        "<br><div class='cart-box' style='border-style:solid;width:80%;margin: 0 auto;'><br>
         <a class='del-f-cart' style='display:inline;float:right;margin-right:50px;' href='delete_cart.php?id=$key'>delete from cart</a><br>
         <h2 style='display:inline'>$movie</h2>
         <h3>Showing at $week $time</h3>";

    $htmlcode.= "
<table id='carttable'><tr><th rowspan=\"3\"><img $images></th><td>$movie</td><td>$theatre</td></tr>
<tr><td>$week</td><td>$time</td></tr>
<tr><td>ticket:$ticket</td><td>＄$price</td></tr></table>";
    $allfee+=$price;
    $htmlcode.="</div>";
        echo $htmlcode;
        $grandtotal+=$allfee;
    }
    echo "<H2>Grand Total:＄ $grandtotal</H2>";
}
else
{
    echo 'your Shopping Cart is empty!';
}

echo "<hr>";
echo "<form action='ticket.php' id='myform'  method='POST'>
<h1>submit your order</h1>
<p style='display:inline'>yoru name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
<input type='textbox' name='yourname' id='nm' /><br>
<p style='display:inline'>email address&nbsp;&nbsp;&nbsp;</p>
<input type='textbox' name='email' id='eml'/><br>
<p style='display:inline'>phone number </p>
<input type='textbox' name='phone' id='ph' /><br>
<p id='checkinfo'></p><hr>
</form><button id='submit' onclick='checkform()'>submit</button>"
?>

    <br><br><br>
    <hr>


<?php include_once("end-part.php");?>
<?php session_start();
if(!$_SESSION['order'])
{
    $_SESSION['order']=Array();
}
include_once("tools.php");
$htmlcode="<title >Cart Page</title>";
include_once("top-part.php");
include_once("navi.php");

echo "<div class=\"subtitle\"><h2>check your Shopping Cart</h2></div><hr>";
echo "<a href='index.php'>back to bookpage</a><br><hr>";

if(isset($_POST["movie"]))
{
    array_push($_SESSION['order'],$_POST);
}
if(!empty($_SESSION['order']))
{
    $grandtotal=0;
    //var_dump($_SESSION['order']);
    foreach ($_SESSION['order'] as $key => $value) {
        $ticketPrice='';
        switch ($value['session']){
        case "MON-03": $ticketPrice ="cheap";
            break;
        case "MON-06": $ticketPrice ="cheap";
            break;
        case "MON-09": $ticketPrice ="cheap";
            break;
        case "TUE-03": $ticketPrice ="cheap";
            break;
        case "TUE-06": $ticketPrice ="cheap";
            break;
        case "TUE-09": $ticketPrice ="cheap";
            break;
        case "WED-03": $ticketPrice ="cheap";
            break;
        case "THU-03": $ticketPrice ="cheap";
            break;
        case "FRI-03": $ticketPrice ="cheap";
            break;
        case "WED-06": $ticketPrice ="full";
            break;
        case "THU-06": $ticketPrice ="full";
            break;
        case "FRI-06": $ticketPrice ="full";
            break;
        case "WED-09": $ticketPrice ="full";
            break;
        case "THU-09": $ticketPrice ="full";
            break;
        case "FRI-09": $ticketPrice ="full";
            break;
        case "SAT-12": $ticketPrice ="full";
            break;
        case "SAT-03": $ticketPrice ="full";
            break;
        case "SAT-06": $ticketPrice ="full";
            break;
        case "SAT-09": $ticketPrice ="full";
            break;
        case "SUN-12": $ticketPrice ="full";
            break;
        case "SUN-03": $ticketPrice ="full";
            break;
        case "SUN-06": $ticketPrice ="full";
            break;
        case "SUN-09": $ticketPrice ="full";
            break;
    }
    $WK1=0;
    $WK2=0;
    $WK3=0;
    $WK4=0;
    $WK5=0;
    $WK6=0;
    $WK7=0;
    $WK8=0;
    if($ticketPrice == "cheap"){
        $WK1=12.5;$WK2=10.5; $WK3=8.5; $WK4=25; $WK5=20; $WK6=22; $WK7=20; $WK8=20;
    }else if($ticketPrice == "full") {
        $WK1 = 18.5; $WK2=15.5; $WK3=12.5; $WK4=25; $WK5=25; $WK6=33; $WK7=30; $WK8=30;
    }else{
        $WK1=$WK2=$WK3=$WK4=$WK5=$WK6=$WK7=$WK8=0;
    }
    //var_dump($value);
    $movie=$value['movie'];
    $time=$value['session'];
    $time=str_replace("MON-","Monday ",$time);
    $time=str_replace("TUE-","Tuesday ",$time);
    $time=str_replace("WED-","Wednesday ",$time);
    $time=str_replace("THU-","Thursday ",$time);
    $time=str_replace("FRI-","Friday ",$time);
    $time=str_replace("SAT-","Saturday ",$time);
    $time=str_replace("SUN-","Sunday ",$time);
    $time=str_replace("0","",$time);
    $time=$time."pm";
    $htmlcode=
        "<br><div class='cart-box' style='border-style:solid;width:80%;margin: 0 auto;'><br>
         <a class='del-f-cart' style='display:inline;float:right;margin-right:50px;' href='delete_cart.php?id=$key'>delete from cart</a><br>
         <h2 style='display:inline'>$movie</h2>
         <h3>Showing at $time</h3>";

        $htmlcode.= "<table border=1 style='width:60%; margin: 0 auto'><tr><th>Seat Type</th><th>Cost</th><th>Qty</th><th>Subtotal</th></tr>";
        $allfee=0;
        if($value['seats']['SF']!=0)
        {
            $cost=$WK1;
            $qry=$value['seats']['SF'];
            $total=$WK1*$qry;
            $htmlcode.="<tr><td>Standard(Full)</td><td>＄ $cost</td><td>$qry</td><td>$total</td></tr>";
            $allfee+=$total;
        }
        if($value['seats']['SP']!=0)
        {
            $cost=$WK2;
            $qry=$value['seats']['SP'];
            $total=$WK2*$qry;
            $htmlcode.="<tr><td>Standard(Concession)</td><td>＄ $cost</td><td>$qry</td><td>$total</td></tr>";
            $allfee+=$total;
        }
        if($value['seats']['SC']!=0)
        {
            $cost=$WK3;
            $qry=$value['seats']['SC'];
            $total=$WK3*$qry;
            $htmlcode.="<tr><td>Standard(Child)</td><td>＄ $cost</td><td>$qry</td><td>$total</td></tr>";
            $allfee+=$total;
        }
        if($value['seats']['FA']!=0)
        {
            $cost=$WK4;
            $qry=$value['seats']['FA'];
            $total=$WK4*$qry;
            $htmlcode.="<tr><td>First Class(Adult)</td><td>＄ $cost</td><td>$qry</td><td>$total</td></tr>";
            $allfee+=$total;
        }
        if($value['seats']['FC']!=0)
        {
            $cost=$WK5;
            $qry=$value['seats']['FC'];
            $total=$WK5*$qry;
            $htmlcode.="<tr><td>First Class(Child)</td><td>＄ $cost</td><td>$qry</td><td>$total</td></tr>";
            $allfee+=$total;
        }
        if($value['seats']['BA']!=0)
        {
            $cost=$WK6;
            $qry=$value['seats']['BA'];
            $total=$WK6*$qry;
            $htmlcode.="<tr><td>Bean Bags(Adult)</td><td>＄ $cost</td><td>$qry</td><td>$total</td></tr>";
            $allfee+=$total;
        }
        if($value['seats']['BF']!=0)
        {
            $cost=$WK7;
            $qry=$value['seats']['BF'];
            $total=$WK7*$qry;
            $htmlcode.="<tr><td>Bean Bags(Family)</td><td>＄ $cost</td><td>$qry</td><td>$total</td></tr>";
            $allfee+=$total;
        }
        if($value['seats']['BC']!=0)
        {
            $cost=$WK8;
            $qry=$value['seats']['BC'];
            $total=$WK8*$qry;
            $htmlcode.="<tr><td>Bean Bags(Child)</td><td>＄ $cost</td><td>$qry</td><td>$total</td></tr>";
            $allfee+=$total;
        }
        $htmlcode.="<tr><td width='300px'>total</td><td>＄ $allfee</td></tr></table><br></div><br><hr>";
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
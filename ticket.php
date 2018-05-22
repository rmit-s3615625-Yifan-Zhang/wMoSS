<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <title>print tickets</title>
    <script>

        function printpage(){
            window.print();
        }
    </script>

<?php
session_start();
file_put_contents('ticket_log.txt',serialize($_SESSION).PHP_EOL,FILE_APPEND);
//write to file

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
            "<br><div class='cart-box' style='width:80%;margin: 0 auto;'><br>";
        $htmlcode.= "
<table class='carttable'><tr><th rowspan=\"3\"><img $images></th><td>$movie</td><td>$theatre</td></tr>
<tr><td>$week</td><td>$time</td></tr>
<tr><td>ticket:$ticket</td><td>＄$price</td></tr></table>";
        $allfee+=$price;
        $htmlcode.="</div>";
        echo $htmlcode;
    }
}
else
{
    echo 'your Shopping Cart is empty!';
}

?>


</head>
<body>
<input type="button" value="print this page" onclick="printpage()" />
<br>
<hr>
</body>
</html>

<?php include_once("end-part.php");?>
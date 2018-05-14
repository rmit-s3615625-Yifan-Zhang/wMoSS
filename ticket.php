<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
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

//$namepat='/^[A-Za-z ]+$/';
//$emailpat='/^\w+@\w+/';
//$phonepat='/^(\(04\)|04|\+614)[ ]?\d{4}[ ]?\d{4}$/';
//if(!preg_match($namepat, $_POST['yourname']))
//{
//	exit('invalid name <a href="javascript:history.go(-1);">click to go back </a>');
//}
//if(!preg_match($emailpat, $_POST['email']))
//{
//	exit('invalid email address <a href="javascript:history.go(-1);">click to go back </a>');
//}
//if(!preg_match($phonepat, $_POST['phone']))
//{
//	exit('invalid phone number <a href="javascript:history.go(-1);">click to go back </a>');
//}


if(!empty($_SESSION['order']))
{	
    $grandtotal=0;
    //var_dump($_SESSION['order']);
    foreach ($_SESSION['order'] as $key => $value) {
    	$appendhtml="";
    	$htmlcode="";
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
    $name=$_POST['yourname'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $htmlcode.="<br><div ><br><table cellpadding=2 style='border-style:solid;width:500px'><tr><td>$name</td><td style='float:right;'>Siverado</td></tr><tr><td>$email</td><td style='float:right;'>$movie</td></tr><tr><td>$phone</td><td style='float:right;'>$time</td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr>";
    $allfee=0;
    if($value['seats']['SF']!=0)
    {
        $cost=$WK1;
        $qry=$value['seats']['SF'];
        $total=$WK1*$qry;
		$htmlcode.="<tr><td>$qry x Standard(Full)</td><td style='float:right;'>$total</td></tr>";
        for($i=0;$i<$qry;$i++)
        {
	        $appendhtml.="<table style='border-style:solid;width:500px' cellpadding=2><tr><td>Silverado</td></tr>";
	        $appendhtml.="<tr><td>$time</td></tr>";
	        $appendhtml.="<tr><td>$movie</td></tr>";
	        $appendhtml.="<tr><td></td></tr>";
	        $appendhtml.="<tr><td></td></tr>";
	        $appendhtml.="<tr><td></td></tr>";
	        $appendhtml.="<tr><td></td></tr>";
	        $appendhtml.="<tr><td>Standard(Full)</td></tr></table>";
        }
        $allfee+=$total;
    }
    if($value['seats']['SP']!=0)
    {
        $cost=$WK2;
        $qry=$value['seats']['SP'];
        $total=$WK2*$qry;
        $htmlcode.="<tr><td>$qry x Standard(Concession)</td><td style='float:right;'>$total</td></tr>";
        for($i=0;$i<$qry;$i++)
        {
	        $appendhtml.="<table style='border-style:solid;width:500px' cellpadding=2><tr><td>Silverado</td></tr>";
	        $appendhtml.="<tr><td>$time</td></tr>";
	        $appendhtml.="<tr><td>$movie</td></tr>";
	        $appendhtml.="<tr><td></td></tr>";
	        $appendhtml.="<tr><td></td></tr>";
	        $appendhtml.="<tr><td></td></tr>";
	        $appendhtml.="<tr><td></td></tr>";
	        $appendhtml.="<tr><td>Standard(Concession)</td></tr></table>";
        }
        $allfee+=$total;
    }
    if($value['seats']['SC']!=0)
    {
        $cost=$WK3;
        $qry=$value['seats']['SC'];
        $total=$WK3*$qry;
        $htmlcode.="<tr><td>$qry x Standard(Child)</td><td style='float:right;'>$total</td></tr>"; 
        for($i=0;$i<$qry;$i++)
        {
	        $appendhtml.="<table style='border-style:solid;width:500px' cellpadding=2><tr><td>Silverado</td></tr>";
	        $appendhtml.="<tr><td>$time</td></tr>";
	        $appendhtml.="<tr><td>$movie</td></tr>";
	        $appendhtml.="<tr><td></td></tr>";
	        $appendhtml.="<tr><td></td></tr>";
	        $appendhtml.="<tr><td></td></tr>";
	        $appendhtml.="<tr><td></td></tr>";
	        $appendhtml.="<tr><td>Standard(Child)</td></tr></table>";
        }   
        $allfee+=$total;

    }
    if($value['seats']['FA']!=0)
    {
        $cost=$WK4;
        $qry=$value['seats']['FA'];
        $total=$WK4*$qry;
        $htmlcode.="<tr><td>$qry x First Class(Adult)</td><td style='float:right;'>$total</td></tr>";
        for($i=0;$i<$qry;$i++)
        {
	        $appendhtml.="<table style='border-style:solid;width:500px' cellpadding=2><tr><td>Silverado</td></tr>";
	        $appendhtml.="<tr><td>$time</td></tr>";
	        $appendhtml.="<tr><td>$movie</td></tr>";
	        $appendhtml.="<tr><td></td></tr>";
	        $appendhtml.="<tr><td></td></tr>";
	        $appendhtml.="<tr><td></td></tr>";
	        $appendhtml.="<tr><td></td></tr>";
	        $appendhtml.="<tr><td>First Class(Adult)</td></tr></table>";
        }   
        $allfee+=$total;  
    }
    if($value['seats']['FC']!=0)
    {
        $cost=$WK5;
        $qry=$value['seats']['FC'];
        $total=$WK5*$qry;
        $htmlcode.="<tr><td>$qry x First Class(Child)</td><td style='float:right;'>$total</td></tr>";
        for($i=0;$i<$qry;$i++)
        {
	        $appendhtml.="<table style='border-style:solid;width:500px' cellpadding=2><tr><td>Silverado</td></tr>";
	        $appendhtml.="<tr><td>$time</td></tr>";
	        $appendhtml.="<tr><td>$movie</td></tr>";
	        $appendhtml.="<tr><td></td></tr>";
	        $appendhtml.="<tr><td></td></tr>";
	        $appendhtml.="<tr><td></td></tr>";
	        $appendhtml.="<tr><td></td></tr>";
	        $appendhtml.="<tr><td>First Class(Child)</td></tr></table>";
        } 
        $allfee+=$total;   
    }
    if($value['seats']['BA']!=0)
    {
        $cost=$WK6;
        $qry=$value['seats']['BA'];
        $total=$WK6*$qry;
        $htmlcode.="<tr><td>$qry x Bean Bags(Adult)</td><td style='float:right;'>$total</td></tr>"; 
        for($i=0;$i<$qry;$i++)
        {
	        $appendhtml.="<table style='border-style:solid;width:500px' cellpadding=2><tr><td>Silverado</td></tr>";
	        $appendhtml.="<tr><td>$time</td></tr>";
	        $appendhtml.="<tr><td>$movie</td></tr>";
	        $appendhtml.="<tr><td></td></tr>";
	        $appendhtml.="<tr><td></td></tr>";
	        $appendhtml.="<tr><td></td></tr>";
	        $appendhtml.="<tr><td></td></tr>";
	        $appendhtml.="<tr><td>Bean Bags(Adult)</td></tr></table>";
        } 
        $allfee+=$total;
    }
    if($value['seats']['BF']!=0)
    {
        $cost=$WK7;
        $qry=$value['seats']['BF'];
        $total=$WK7*$qry;
        $htmlcode.="<tr><td>$qry x Bean Bags(Family)</td><td style='float:right;'>$total</td></tr>"; 
        for($i=0;$i<$qry;$i++)
        {
	        $appendhtml.="<table style='border-style:solid;width:500px' cellpadding=2><tr><td>Silverado</td></tr>";
	        $appendhtml.="<tr><td>$time</td></tr>";
	        $appendhtml.="<tr><td>$movie</td></tr>";
	        $appendhtml.="<tr><td></td></tr>";
	        $appendhtml.="<tr><td></td></tr>";
	        $appendhtml.="<tr><td></td></tr>";
	        $appendhtml.="<tr><td></td></tr>";
	        $appendhtml.="<tr><td>Bean Bags(Family)</td></tr></table>";
        }
        $allfee+=$total;    
    }
    if($value['seats']['BC']!=0)
    {
        $cost=$WK8;
        $qry=$value['seats']['BC'];
        $total=$WK8*$qry;
        $htmlcode.="<tr><td>$qry x Bean Bags(Child)</td><td style='float:right;'>$total</td></tr>";
        for($i=0;$i<$qry;$i++)
        {
	        $appendhtml.="<table style='border-style:solid;width:500px' cellpadding=2><tr><td>Silverado</td></tr>";
	        $appendhtml.="<tr><td>$time</td></tr>";
	        $appendhtml.="<tr><td>$movie</td></tr>";
	        $appendhtml.="<tr><td></td></tr>";
	        $appendhtml.="<tr><td></td></tr>";
	        $appendhtml.="<tr><td></td></tr>";
	        $appendhtml.="<tr><td></td></tr>";
	        $appendhtml.="<tr><td>Bean Bags(Child)</td></tr></table>";
        }
        $allfee+=$total;
    }
    $grandtotal+=$allfee;
    $htmlcode.="<tr><td></td><td></td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr><tr><td></td><td style='float:right;'>Total: $grandtotal</td></tr></table>";
    echo $htmlcode;
    echo $appendhtml;
    echo "</div><br><hr>";
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
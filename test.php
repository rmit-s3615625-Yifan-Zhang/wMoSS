


<?php
session_start();
$_SESSION = ["itm","name","email","phoneNum",$_POST];

if(isset($_SESSION["itm"]))
{
    $_SESSION["itm"]=$_SESSION["itm"]+1;
}
else
{
    $_SESSION["itm"]=1;
}
?>

<pre>
    <?php print_r($_POST); ?>
    <?php print_r($_SESSION); ?>
</pre>

<?php ?><br>



<?php echo $_SESSION[4]["movie"] ?><br>
<?php echo $_SESSION[4]["session"] ?><br>
<?php echo $_SESSION[4]["seats"]["SF"] ?><br>
<?php echo $_SESSION[4]["seats"]["SP"] ?><br>
<?php echo $_SESSION[4]["seats"]["SC"] ?><br>
<?php echo $_SESSION[4]["seats"]["FA"] ?><br>
<?php echo $_SESSION[4]["seats"]["FC"] ?><br>
<?php echo $_SESSION[4]["seats"]["BA"] ?><br>
<?php echo $_SESSION[4]["seats"]["BF"] ?><br>
<?php echo $_SESSION[4]["seats"]["BC"] ?><br>




<?php $newa = array (0,2,5,7,9,array(2,4,6,8));?>

<?php print_r($newa);?><br>
<?php echo $newa[2];?><br>
<?php echo $newa[5][1];?>

<?php

echo $_POST["movie"];
echo $_POST["session"];
echo $_POST["seats"]["SF"];
echo $_SESSION[4]["movie"];
?>



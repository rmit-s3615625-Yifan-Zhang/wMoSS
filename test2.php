<!DOCTYPE html PUBLIC>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
    <title>留言板头像选择代码-懒人图库</title>
    <style type="text/css">
        .on{margin:5px;border:1px solid #F60;filter:alpha(Opacity=100)}
        .off{margin:5px;border:1px solid #CCC;filter:alpha(Opacity=20)}
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
</script>

<div id="s_mov">
    <a><img border="0" src='img/1.jpg'  name=01 onclick=switchM(1,2,3,4,5,6,7);Check(this.name,"") class="off"></a>
    <a><img border="0" src='img/2.jpg'  name=02 onclick=switchM(2,1,3,4,5,6,7);Check(this.name,"") class="off"></a>
    <a><img border="0" src='img/3.jpg'  name=03 onclick=switchM(3,1,2,4,5,6,7);Check(this.name,"") class="off"></a>
    <a><img border="0" src='img/4.jpg'  name=04 onclick=switchM(4,1,2,3,5,6,7);Check(this.name,"") class="off"></a>
    <a><img border="0" src='img/5.jpg'  name=05 onclick=switchM(5,1,2,3,4,6,7);Check(this.name,"") class="off"></a>
    <a><img border="0" src='img/6.jpg'  name=06 onclick=switchM(6,1,2,3,4,5,7);Check(this.name,"") class="off"></a>

    <form name="form1">
        <input type=text name=img value="00">
    </form>
</body>
</html>
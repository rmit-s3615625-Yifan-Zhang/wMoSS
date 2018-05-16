<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>JQuery radio</title>
    <script type="text/javascript" language="javascript" src="JavaScript/jquery-1.6.1.min.js" ></script>
    <script type="text/javascript" language="javascript">
        /*------判断radio是否有选中，获取选中的值--------*/
        $(function(){
            $("#btnSubmit").click(function(){
                var val=$('input:radio[name="sex"]:checked').val();
                if(val==null){
                    alert("什么也没选中!");
                    return false;
                }
                else{
                    alert(val);
                }
                var list= $('input:radio[name="list"]:checked').val();
                if(list==null){
                    alert("请选中一个!");
                    return false;
                }
                else{
                    alert(list);
                }
            });
        });
    </script>
</head>

<body>
<form id="form1" >
    <input type="radio"  name="sex" value="男" />男
    <input type="radio" name="sex" value="女" />女
    <br />
    <input type="radio"  name="list" value="十分满意" />十分满意
    <input type="radio" name="list" value="满意" />满意
    <input type="radio" name="list" value="不满意" />不满意
    <input type="radio" name="list" value="非常差" />非常差
    <br />
    <input type="submit" value="submit"  id="btnSubmit" />
</form>
</body>
</html>
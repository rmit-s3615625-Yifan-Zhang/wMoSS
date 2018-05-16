<html>
<header>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js">
    </script>

    <script>
        function onClickRadioStyle(obj){
            var group = $(obj).attr('name');//获取当前点击对象的name，作为组的名称
            if($(obj).attr('flag')==1){//flag为1表示当前选中
                $(obj).attr('flag',0);
                $(obj).removeAttr("checked");
            }else if($(obj).attr('flag')==0){   //flag为0表示当前未选中
                $(obj).attr('flag',1);
                $(obj).attr("checked","checked");
            }

            //将其它未选中的flag置为0
            $("input[name='"+group+"']").not("input[name='"+group+"']:checked").each(function(){
                $(this).attr('flag',0);

            });
        }
    </script>
</header>
<body>
<input type="radio"  name="g" id="a" value="00" flag="0" onclick="onClickRadioStyle(this)"/>选项a
<input type="radio"  name="g" id="b" value="01" flag="0" onclick="onClickRadioStyle(this)"/>选项b
<input type="radio"  name="g" id="c" value="02" flag="0" onclick="onClickRadioStyle(this)"/>选项c
<input type="radio"  name="g" id="d" value="03" flag="0" onclick="onClickRadioStyle(this)"/>选项d
</body>

</html>